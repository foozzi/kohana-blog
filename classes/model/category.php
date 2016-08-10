<?php
class Model_Category extends ODM
{
  protected $_collection_name = 'categories';

  public $_schema = [
    '_id' => 'id',
    'parent_id' => 'int',
    'title' => 'string',
  ];

  protected $_rules = [
    'title' => [
      ['not_empty'],
      ['max_length', [':value', 100]],
      ['min_length', [':value', 5]]
    ]
  ];

  public function getErrors()
  {
    return $this->_validation;
  }

  public function get($id)
  {
    if(!$id)
      return 0;
    $cat = $this->where('_id','=',  new MongoId($id));

    $catContent = $cat->find();

    return $cat->loaded() ?  $catContent : 0;
  }

  public function add($data)
  {
    try
    {
      $this->values($data)->save();
    }
    catch(exception $e)
    {
      return 0;
    }
    return 1;
  }

}
?>
