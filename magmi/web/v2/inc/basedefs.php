<?php
 $incdir=__DIR__;
 define('MAGMI_DIR',dirname(dirname(dirname(__DIR__))));
 require_once(MAGMI_DIR."/inc/magmi_defs.php");
 require_once($incdir.'/session.php');
 require_once($incdir.'/security.php');
 require_once($incdir.'/message.php');
 require_once($incdir.'/utils.php');
set_include_path(
    ini_get("include_path"));
 $base_url=dirname(str_replace($_SERVER['DOCUMENT_ROOT'],'',$incdir));
 define("BASE_URL",$base_url);
?>