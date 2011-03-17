<?php

########################################################################
# Extension Manager/Repository config file for ext "captcha_viewhelper".
#
# Auto generated 17-03-2011 17:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Captcha View Helper',
	'description' => 'captcha view helper based on extbase and flud',
	'category' => 'plugin',
	'author' => 'Axel Jung',
	'author_email' => 'axel.jung@aoemedia.de',
	'author_company' => 'AOE Media GmbH',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'typo3' => '4.3.0-0.0.0',
			'php' => '5.2.0-0.0.0',
			'extbase' => '1.3.0',
			'fluid' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:26:{s:21:"ext_conf_template.txt";s:4:"9fb0";s:12:"ext_icon.gif";s:4:"f19a";s:17:"ext_localconf.php";s:4:"3948";s:19:"Classes/Captcha.php";s:4:"ebf2";s:49:"Classes/Validation/Validator/CaptchaValidator.php";s:4:"0d2d";s:41:"Classes/ViewHelpers/CaptchaViewHelper.php";s:4:"08b6";s:40:"Contrib/cool-php-captcha-0.3/LICENSE.txt";s:4:"d322";s:40:"Contrib/cool-php-captcha-0.3/captcha.php";s:4:"5e16";s:45:"Contrib/cool-php-captcha-0.3/example-form.php";s:4:"7a61";s:40:"Contrib/cool-php-captcha-0.3/example.jpg";s:4:"c43a";s:60:"Contrib/cool-php-captcha-0.3/resources/fonts/AntykwaBold.ttf";s:4:"b910";s:56:"Contrib/cool-php-captcha-0.3/resources/fonts/Candice.ttf";s:4:"9c7b";s:64:"Contrib/cool-php-captcha-0.3/resources/fonts/Ding-DongDaddyO.ttf";s:4:"7bc5";s:56:"Contrib/cool-php-captcha-0.3/resources/fonts/Duality.ttf";s:4:"0a28";s:57:"Contrib/cool-php-captcha-0.3/resources/fonts/Heineken.ttf";s:4:"fbe8";s:53:"Contrib/cool-php-captcha-0.3/resources/fonts/Jura.ttf";s:4:"33a1";s:57:"Contrib/cool-php-captcha-0.3/resources/fonts/StayPuft.ttf";s:4:"5929";s:66:"Contrib/cool-php-captcha-0.3/resources/fonts/TimesNewRomanBold.ttf";s:4:"ed6e";s:61:"Contrib/cool-php-captcha-0.3/resources/fonts/VeraSansBold.ttf";s:4:"4ebf";s:73:"Contrib/cool-php-captcha-0.3/resources/tools/dictionary-import/README.txt";s:4:"62ee";s:78:"Contrib/cool-php-captcha-0.3/resources/tools/dictionary-import/importwords.php";s:4:"9e4b";s:82:"Contrib/cool-php-captcha-0.3/resources/tools/dictionary-import/sample-words-en.txt";s:4:"d750";s:82:"Contrib/cool-php-captcha-0.3/resources/tools/dictionary-import/sample-words-es.txt";s:4:"86e8";s:51:"Contrib/cool-php-captcha-0.3/resources/words/en.php";s:4:"ef0f";s:51:"Contrib/cool-php-captcha-0.3/resources/words/es.php";s:4:"6af4";s:33:"Resources/Private/PHP/captcha.php";s:4:"b620";}',
	'suggests' => array(
	),
);

?>