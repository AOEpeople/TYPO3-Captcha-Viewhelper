<?php
require_once dirname(__FILE__).'/../../../Classes/Captcha.php';
$captcha = new Tx_CaptchaViewhelper_Captcha();
$captcha->createImage();
