<?php
/**
 * Render a captcha Element
 * @package captcha_viewhelper
 */
class Tx_CaptchaViewhelper_ViewHelpers_CaptchaViewHelper extends Tx_Fluid_ViewHelpers_Form_AbstractFormFieldViewHelper {
/**
	 * Renders the captcha image field.
	 * @return string
	 */
	public function render() {
		$path = t3lib_div::getIndpEnv('TYPO3_SITE_URL').'?eID=captcha_viewhelper_captcha&c='.time();
		$image = '<img src="'.$path.'" class="captcha-image"/>';
		return $image;
	}
}