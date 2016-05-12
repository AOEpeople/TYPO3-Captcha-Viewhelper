<?php

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

/**
 * Captcha Validator
 */
class Tx_CaptchaViewhelper_Validation_Validator_CaptchaValidator extends AbstractValidator {

	/**
	 * Returns TRUE, if the given property ($value) matches the session captcha Value.
	 *
	 * If at least one error occurred, the result is FALSE.
	 *
	 * @param mixed $value The value that should be validated
	 * @return boolean TRUE if the value is valid, FALSE if an error occured
	 */
	public function isValid($value) {
		$captcha = new Tx_CaptchaViewhelper_Captcha();
		try{
			if($value !== $captcha->getTextInSession()){
				$this->addError('Text is wrong.', 170320111501);
				return FALSE;
			}
		}catch(Exception $e){
			GeneralUtility::devLog ( 'captcha error: ' . $e->getMessage (), 'captcha_viewhelper', 2 );
			return FALSE;
		}
		return TRUE;
	}
}