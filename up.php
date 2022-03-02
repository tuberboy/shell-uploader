<?php
set_time_limit(0);
/***
 * Name: Shell Uploader
 * Author: Tuber Boy
 * https://github.com/tuberboy
 **/
if(in_array($_SERVER['REQUEST_METHOD'], ['POST', 'PUT']))
{
    $name = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $dir = 'Output/'.$name;
    if(file_exists($dir))
    {
        echo "\033[0;34m\n[Exits!]:\033[0m \033[0;32m".$name."\033[0m \033[0;33mAlready Uploaded !!!\033[0m\n\n";
        exit;
    }
    $fp = fopen('php://input', 'r');
    if($fp)
    {
    	$up = fopen($dir, 'w');
    	while(!feof($fp))
    	{
			fputs($up, fgets($fp));
    	}
    	fclose($fp);
    	fclose($up);
        echo "\033[0;34m\n[Done]:\033[0m \033[0;32m".$name."\033[0m \033[0;34mUploaded Successfully!\033[0m\n\033[0;34m[Size]:\033[0m \033[0;32m".filesize($dir)."\033[0m\n\033[0;34m[Uses]:\033[0m \033[0;32mwget https://".$_SERVER['HTTP_HOST']."/".$dir."\033[0m\n\n";
    } else {
        echo "\033[0;31m\n[Opps!]:\033[0m \033[0;32m".$name."\033[0m \033[0;31mUpload Failed !!!\033[0m\n\n";
    }
}
?>