<?php
$link = mysql_connect('localhost', 'pmg3_user1','123456a') or die (mysql_error());
mysql_set_charset('utf8',$link);
$db_selected = mysql_select_db('pmg3_reg', $link) or die (mysql_error());
?>