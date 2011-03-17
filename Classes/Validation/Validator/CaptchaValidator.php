<?php
require_once dirname(__FILE__).'/../../../Classes/Captcha.php';
/**
 * Captcha Validator
 */
class Tx_CaptchaViewhelper_Validation_Validator_CaptchaValidator extends Tx_Extbase_Validation_Validator_AbstractValidator {

	/**
	 * Returns TRUE, if the given property ($value) matches the session captcha Value.
	 *
	 * If at least one error occurred, the result is FALSE.
	 *
	 * @param mixed $value The value that should be validated
	 * @return boolean TRUE if the value is valid, FALSE if an error occured
	 */
	public function isValid($value) {
		$this->errors = array();
		$captcha = new Tx_CaptchaViewhelper_Captcha();
		if($value !== $captcha->getTextInSession()){
			$this->addError('Text is wrong.', 170320111501);
			return FALSE;
		}
		return TRUE;
	}
}