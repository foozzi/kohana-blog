<?php

Route::set('blog', '/news')->defaults([
  'directory' => 'blog',
  'controller' => 'blog',
  'action' => 'main'
]);

?>
