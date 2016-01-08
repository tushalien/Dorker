<?php
$name=$_POST['name'];
$option=$_POST['type'];
$name = str_replace('"','',$name);
if ($option != "None")
    header('location:resultpage.html?q='.urlencode('filetype:'.$option.' intitle:'.$name));
else
    header('location:resultpage.html?q='.urlencode($name));




?>