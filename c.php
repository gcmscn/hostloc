<?php
$passwd=file ("/home/wwwroot/default/pass.txt");
foreach ($passwd as $pass);
echo "IP ",$_SERVER["SERVER_ADDR"]," 账号:test 密码:",$pass,"端口:22";
$file="/home/wwwroot/default/pass.txt";
$ctime=date("Y-m-d H:i:s",filectime($file));
?>