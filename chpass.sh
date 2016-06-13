#!/bin/bash
pass=`mkpasswd -l 6 -d 6 -c 0 -C 0 -s 0 test`
cat /dev/null > /home/wwwroot/default/pass.txt
echo $pass >> /home/wwwroot/default/pass.txt