<?php

define("MYSQL_HOST", "mysql.webhero.com");
define("MYSQL_USER", "phgladmin");
define("MYSQL_PASS", "Brothers357");
define("MYSQL_DB", "phgladmin0");

##webhero addmin  user: n.chris.payne@gmail.com/phgladmin     pass: Brothers357 or a20e45f5d159df6c

mysql_connect("".MYSQL_HOST."", "".MYSQL_USER."", "".MYSQL_PASS."")or die("Could not connect: ".mysql_error());
mysql_select_db("".MYSQL_DB."") or die(mysql_error());

?>