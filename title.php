<?php
$title='';
$url=$_SERVER['REQUEST_URI'];
$after_explode_title=explode('/',$url);
$after_end=end($after_explode_title);
$explode_second=explode('.',$after_end);
?>