<?php return array (
  'mods' => 
  array (
    0 => 'album.cate',
  ),
  'data' => 
  array (
    'cate/{dirname}' => 
    array (
      'params' => 
      array (
        'app' => 'album',
        'm' => 'cate',
        'dirname' => '@@',
      ),
      'needreplace' => 
      array (
        0 => 'dirname',
      ),
      'regex' => '/^cate\\/([^\\/]+)$/i',
    ),
  ),
);