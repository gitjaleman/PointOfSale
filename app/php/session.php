<?php
session_start();
if (md5('activo') === $_GET['a']) {
  $type =$_GET['t'];
  $_SESSION["session"]='ACTIVE';
  $_SESSION["session_type"]=$type;
  echo 1;
}else{
  session_destroy();
}