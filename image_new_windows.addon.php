<?php
/**
 * @file image_windows.addon.php
 * @author 김대현
 **/


if(!defined('__XE__')) exit();
if($called_position == 'after_module_proc' && Context::getResponseMethod()=="HTML" && !isCrawler())
{
	Context::loadJavascriptPlugin('ui');
	Context::loadFile(array('./addons/image_new_windows/js/image_new_windows.js', 'body', '', null), true); 
}
?>
