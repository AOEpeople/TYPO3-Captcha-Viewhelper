<?php
require_once dirname(__FILE__).'/../Contrib/cool-php-captcha-0.3/captcha.php';
/**
 * Captcha generator
 * @package captcha_viewhelper
 */
class Tx_CaptchaViewhelper_Captcha {
	const SESSION_KEY = 'tx_captcha_viewhelper_captcha';
	/**
	 * create a image
	 */
	public function createImage(){
		$captchaRoot = dirname(__FILE__).'/../Contrib/cool-php-captcha-0.3/';
		$configuration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['captcha_viewhelper']);
		$captcha = new SimpleCaptcha();
		$captcha->backgroundColor= explode(',',$configuration['captcha_background_color']);
		$captcha->width= $configuration['captcha_background_width']; 
		$captcha->height= $configuration['captcha_background_height']; 
		$captcha->resourcesPath = $captchaRoot.$captcha->resourcesPath;
		$captcha->wordsFile  = $captcha->resourcesPath.'/'.$captcha->wordsFile;
		$text = $captcha->CreateImage();
		$this->storeTextInSession($text);
	}
	
	/**
	 * @param string $text
	 */
	private function storeTextInSession($text){
		$fe_user = tslib_eidtools::initFeUser();
		tslib_eidtools::connectDB();
		$fe_user->setKey ( 'ses', self::SESSION_KEY, $text );
		$fe_user->storeSessionData();
	}
	/**
	 * @return string
	 * @throws Exception
	 */
	public function getTextInSession(){
		if(!isset($GLOBALS ['TSFE'])){
			throw new Exception('no TSFE found', 170320111503);
		}
		if(!isset($GLOBALS ['TSFE']->fe_user) || !is_object($GLOBALS ['TSFE']->fe_user)){
			throw new Exception('no fe_user found', 170320111504);
		}
		$fe_user= $GLOBALS ['TSFE']->fe_user;
		$value = $fe_user->getKey ( 'ses', self::SESSION_KEY );
		if(empty($value)){
			throw new Exception('no captcha text found', 170320111506);
		}
		return $value;
	}
}