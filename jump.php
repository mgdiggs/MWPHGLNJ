<?php
  //connect to DB
  require 'db_con.php';

  $jump_to_link = $_GET['href'];
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $referer = $_SERVER['HTTP_REFERER'];
  $ipaddress = $_SERVER["REMOTE_ADDR"];

  $str_sql = "INSERT into link_tracker (href, user_agent, ".
             "ipaddress, referer, timestamp) " .
             "VALUES ( '" . $jump_to_link . "', '" .
                            $user_agent . "', '" .
							$ipaddress . "', '" .
                            $referer . "', NOW() )";

  mysql_query( $str_sql ) or die( mysql_error() );

  header('Location: ' . $jump_to_link);
?>