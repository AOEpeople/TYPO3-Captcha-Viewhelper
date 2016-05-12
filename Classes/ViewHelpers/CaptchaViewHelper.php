<?php

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use \TYPO3\CMS\Fluid\ViewHelpers\Form\AbstractFormFieldViewHelper;

/**
 * Render a captcha Element
 * @package captcha_viewhelper
 */
class Tx_CaptchaViewhelper_ViewHelpers_CaptchaViewHelper extends AbstractFormFieldViewHelper {
/**
	 * Renders the captcha image field.
	 * @return string
	 */
	public function render() {
		$path = GeneralUtility::getIndpEnv('TYPO3_SITE_URL').'?eID=captcha_viewhelper_captcha&amp;c='.time();
		$image = '<p>';
			$image .= '<img id="captcha-image" src="'.$path.'" class="captcha-image" alt="" />';
			$image .= '<br />';
			$image .= '<a class="captcha-reaload" href="javascript:void(0)" onclick="var now = new Date(); var e = document.getElementById(\'captcha-image\');e.src=e.src+\'&amp;c=\'+now.getTime();">';
				$image .= LocalizationUtility::translate('reload','captcha_viewhelper');
			$image .= '</a>';
		$image .= '</p>';
		return $image;
	}
}
