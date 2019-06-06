<?php
//define (
//  "root_password",
//  ['hash' => md5("111"),
//    'salt' => md5(md5("123465"))]
//);

define('HASH', "hash");
define('SALT', "salt");
define("LOGIN", "login");
define("HASH_ALG", PASSWORD_BCRYPT);

define("users",array(
  [
    LOGIN => 'root',
    HASH => (password_hash('111', HASH_ALG)),
    SALT => md5(md5(12311)),
  ],
  [
    LOGIN => 'user1',
    HASH => (password_hash('2121', HASH_ALG)),
    SALT => md5(md5(1231231)),
  ],
));
