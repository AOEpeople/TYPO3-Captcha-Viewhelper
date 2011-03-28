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
		$image = '<p>';
			$image .= '<img id="captcha-image" src="'.$path.'" class="captcha-image"/>';
			$image .= '<br />';
			$image .= '<a class="captcha-reaload" href="javascript:void(0)" onclick="var now = new Date(); var e = document.getElementById(\'captcha-image\');e.src=e.src+\'&c=\'+now.getTime();">';
				$image .= Tx_Extbase_Utility_Localization::translate('reload','captcha_viewhelper');
			$image .= '</a>';
		$image .= '</p>';
		return $image;
	}
}