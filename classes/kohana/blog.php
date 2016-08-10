<?php
abstract class Kohana_Blog
{

  private $model = 0;
  private $data = array();
  private $currentPaginationPage = 0 ;
  private $paginationTemplate;
  public static $last_pagination;

  const MODEL_RELATION_NAME = 'blog';
  const SHOW_PER_PAGE = 10;

  public static function factory()
  {
    return new static();
  }

  public static function model()
  {
    return ODM::factory(static::MODEL_RELATION_NAME);
  }

  function __construct()
  {}

  public function find($query = [], $params = [])
  {
    if(!$this->model)
      $this->model = self::model();

    foreach($params as $paramMethod => $paramArgs)
    {
      call_user_func_array([$this->model, $paramMethod], $paramArgs);
    }

    if(!sizeof($query))
      return $this-> model -> find_all();

    foreach($query as $queryField => $queryValue)
    {
      $this->model->where($queryField, '=', $queryField);
    }


    $this-> model -> find();


    return $this->model->as_array();
  }

  public static function showPosts($template, $currentPage)
  {
    echo View::factory($template)
      ->set('posts',
            Arr::get(Blog::factory($template)
            ->setPaginationTemplate('news_pagination')
            ->setCurrentPaginationPage($currentPage)
            ->getPosts(),
          'data',[])
    )
    ->set('pagination', Blog::$last_pagination);
  }

  private function load()
  {
    if(!$this->model)
      $this->model = self::model();

    $pagination = Magination::factory($this->find([], [])->count(), self::SHOW_PER_PAGE);
    $pagination->setTemplate($this->paginationTemplate);
    $pagination->setCurrentPage($this->currentPaginationPage);

    $this->data = $this->find([], [
        'limit' => [10],
        'sort' => ['id',-1],
        'skip' => [$pagination->getCurrentSkip()]
    ]);

    $html = $pagination->getHtml();
    static:: $last_pagination = $html;

    return array(
        'data' => $this->data,
        'pagination' => $html
    );
  }

  public function setPaginationTemplate($template)
  {
    $this->paginationTemplate = $template;
    return $this;
  }

  public function setCurrentPaginationPage($page)
  {
    $this->currentPaginationPage = $page;
    return $this;
  }

  public function getPosts()
  {
    return $this->load();
  }

  public function getModel()
  {
    return $this->model;
  }

  public function add($data = array())
  {
    $this->model = self::model();
    if(!$this->model->add($data))
      return 0;
    return 1;
  }


}
?>
