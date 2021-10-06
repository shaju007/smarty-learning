<?php
require('./smartyHeader.php');

$msg = 'Hello world, this is my first smarty';
$title = 'Smarty world';

$smarty->assign('title', $title);
$smarty->assign('message', $msg);
$smarty->display('test.tpl')
?>