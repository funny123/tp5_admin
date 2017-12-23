<?php

return array (
  0 => 
  array (
    'name' => 'avatar',
    'title' => '默认头像',
    'type' => 'image',
    'content' => 
    array (
    ),
    'value' => '/assets/img/avatar.png',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  1 => 
  array (
    'name' => 'level',
    'title' => '默认等级',
    'type' => 'number',
    'content' => 
    array (
    ),
    'value' => '1',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  2 => 
  array (
    'name' => 'score',
    'title' => '默认积分',
    'type' => 'number',
    'content' => 
    array (
    ),
    'value' => '0',
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
  3 => 
  array (
    'name' => 'rewrite',
    'title' => '伪静态',
    'type' => 'array',
    'content' => 
    array (
    ),
    'value' => 
    array (
      'index/index' => '/user$',
      'index/login' => '/user/login$',
      'index/register' => '/user/register$',
    ),
    'rule' => 'required',
    'msg' => '',
    'tip' => '',
    'ok' => '',
    'extend' => '',
  ),
);