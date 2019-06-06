<?php
require_once 'config.php';
session_start();

if (isset($_GET['logout'])) {
//  $_SESSION['salt'] = '';
  unset( $_SESSION['salt'] );
  header("Location: /");
}


if (isset($_SESSION['salt']) && ($_SESSION['salt'] == root_password['salt'])) {
  echo '<a href="/?logout">logout</a>';
}
elseif (isset($_GET['auth'])) {
  if (
    isset($_POST['login']) && ($_POST['login'] == 'root')
    && isset($_POST['password'])
    && (md5($_POST['password']) == root_password['hash']) ) {
      $_SESSION['salt'] = root_password['salt'];
    }
  header("Location: /");
}
else {
  include "html/auth.inc.php";
}
