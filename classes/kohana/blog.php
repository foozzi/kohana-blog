<?php
abstract class Kohana_Blog
{

  private $model = 0;
  private $data = array();

  const MODEL_RELATION_NAME = 'blog';

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
    $this->model = self::model();

    foreach($params as $paramMethod => $paramArgs)
    {
      call_user_func_array([$this->model, $paramMethod], $paramArgs);
    }

    if(!sizeof($query))
      return $this-> model-> find_all();

    foreach($query as $queryField => $queryValue)
    {
      $this->model->where($queryField, '=', $queryField);
    }


    $this-> model -> find();
    return $this->model->as_array();
  }

  private function checkExists()
  {
    return 0;
  }

  private function load()
  {
    $this->data = $this->find([], [
        'limit' => [10]
    ]);


    return $this->data;
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
