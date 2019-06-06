<?php
require_once 'db.php';
session_start();

if (isset($_GET['logout'])) {
  unset($_SESSION['salt']);
  header("Location: /");
}

if ( isset($_SESSION['salt'], $_SESSION['login'])
  && is_int( $id = array_search(
    $_SESSION['login'], array_column(users, LOGIN)
  ) )
  && ($_SESSION['salt'] == users[$id][SALT]) ) {
  $username = users[$id][LOGIN];

  echo "HELLO, {$username}. You id: {$id}";
  echo '<br>';
  echo '<a href="/?logout">logout</a>';
}
elseif (isset($_GET['auth'])) {
  if ( isset($_POST['login'], $_POST['password'])
    && is_int($id = array_search(
      $_POST['login'], array_column(users, LOGIN)
    ) )
    && ( password_verify($_POST['password'], users[$id][HASH]) ) ) {

    $_SESSION[SALT] = users[$id][SALT];
    $_SESSION[LOGIN] = users[$id][LOGIN];

  }
  header("Location: /");
}
else {
  include "html/auth.inc.php";
}
