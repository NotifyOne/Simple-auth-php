<?php
//define (
//  "root_password",
//  ['hash' => md5("111"),
//    'salt' => md5(md5("123465"))]
//);

define('HASH', "hash");
define('SALT', "salt");
define("LOGIN", "login");

define("users",array(
  [
    LOGIN => 'root',
    HASH => (md5('111')),
    SALT => md5(md5(12311)),
  ],
  [
    LOGIN => 'user1',
    HASH => (md5('111')),
    SALT => md5(md5(1231231)),
  ],
));
