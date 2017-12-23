<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'login_init' => 
    array (
      0 => 'loginbg',
    ),
  ),
  'route' => 
  array (
    '/user$' => 'user/index/index',
    '/user/login$' => 'user/index/login',
    '/user/register$' => 'user/index/register',
  ),
);