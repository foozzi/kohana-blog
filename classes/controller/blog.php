<?php

class Controller_Blog extends Controller
{
    public function action_index()
    {
      Blog::showPosts('posts_list', $this->request->query('page'));
    }


    public function action_show_post()
    {
       echo View::factory('single_post')->set('post', ODM::factory('blog')->get($this->request->param('id')));
    }

}
?>
