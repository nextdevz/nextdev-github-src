<?php
  $webName = 'localhost/seeknovel/src/';
  //$webName = 'nextdev.noip.me/seeknovel/src/';
  //$root = 'http://'.$webName;
  $root = '';
  $title = 'Novel Club';
  $subtitle = ' เว็บไซต์สำหรับคนรักนิยาย';
  $fulltitle = $title.' '.$subtitle;
  $global_vars = array
  (
    "DB_HOST"	=>	"localhost",
    "DB_NAME"	=>	"novel",
    "DB_USER"	=>	"root",
    "DB_PWD"	=>	"",
  );
  while(list($key, $value) = each($global_vars)) {
    define($key, $value);
  }

  $rootUrl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  $cssDir = $rootUrl.'css/';
  $imgDir = $rootUrl.'images/';
  $rootDir = __DIR__.'/';
  $jsDir = $rootDir.'js/';
  $jsLayout = $rootDir.'js/';
  $phpDir = $rootDir.'php/';
  $phpClass = $phpDir.'class/';
  $phpLayout = $phpDir.'layout/';
  $phpProcess = $phpDir.'process/';
?>
