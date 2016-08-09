<?php

class Controller_Blog extends Controller
{
    public function action_index()
    {
      echo View::factory('posts_list')->set('posts', Blog::factory()
        ->getPosts()
      );
    }
}
?>
