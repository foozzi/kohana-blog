<?php

class Controller_Admin extends Controller
{
  public function action_index()
  {
    $this->action_posts();
  }

  public function action_posts()
  {
      Blog::showPosts('admin/posts', $this->request->query('page'));
  }

  public function action_categories()
  {
    echo View::factory('admin/categories')->set('categories', ODM::factory('category')->find_all());
  }

  public function action_category_edit()
  {
    $id = HTML::chars($this->request->query('id'));

    $category = ODM::factory('category')->get($id);

    if($this->request->post('title'))
    {
      $category->title = HTML::chars($this->request->post('title'));
      $category->save();
    }

    echo View::factory('admin/category-edit')->set('category', $category);

    return ;
  }


  public function action_category_del()
  {
    $id = HTML::chars($this->request->query('id'));

    $category = ODM::factory('category')->get($id);

    $category->remove();

    $this->redirect('/admin/categories');

    return ;
  }


  public function action_post_del()
  {
    $id = HTML::chars($this->request->query('id'));

    $post = ODM::factory('blog')->get($id);


    $post->remove();

    $this->redirect('/admin/posts');

    return ;
  }


  public function action_create_category()
  {
    if($this->request->post('title'))
    {
      $category = ODM::factory('category');

      $category->add([
        'title' => HTML::chars($this->request->post('title')),
        'parent_id' => 0,
      ]);
      $this->redirect('/admin/category_edit?id='. $category->_id);
    }

    echo View::factory('admin/category-edit')->set('category', 0);

    return ;
  }


  public function action_create_post()
  {
    if($this->request->post('title'))
    {
      $post = ODM::factory('blog');



      $is_added = $post->add([
        'author_id' => 0,
        'category_id' => new MongoId($this->request->post('category')),
        'title' =>  HTML::chars($this->request->post('title')),
        'content' => HTML::chars($this->request->post('content')),
        'short_content' =>  HTML::chars($this->request->post('content')),
        'image' => 'http://toster.ru/img.jpeg',
        'date' =>  time(),
        'type' => 'post',
      ]);

      $this->redirect('/admin/edit?id='. $post->id);
    }

    echo View::factory('admin/post-edit')->set('post', 0);

    return ;
  }

  public function action_edit()
  {
    $id = HTML::chars($this->request->query('id'));
    $post = ODM::factory('blog')->get($id);

    if($this->request->post('title'))
    {
      $post->title = HTML::chars($this->request->post('title'));
      $post->content = HTML::chars($this->request->post('content'));
      if(ODM::factory('category')->get($this->request->post('category')))
        $post->category_id = new MongoId($this->request->post('category'));


      $post->save();
    }

    if(!$post->loaded())
    {
      //404. You need replace this to our 404 page url. Good luck
      $this->redirect(Kohana::$config->load('url')->FootOfRemDigga);
      exit;
    }

    echo View::factory('admin/post-edit')
      ->set('post', $post);
    return ;
  }


}

?>
