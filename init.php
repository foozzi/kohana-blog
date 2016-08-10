<?php

Route::set('news', 'news')
  ->defaults(array(
    'controller' => 'blog',
    'action'     => 'index',
  ));

  Route::set('news_post', 'news/<id>-<slug>', array('id' => '[0-9]+', 'slug' => '.*'))
    ->defaults(array(
      'controller' => 'blog',
      'action'     => 'show_post',
    ));

?>
