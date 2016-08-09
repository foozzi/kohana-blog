<?php
class Model_Category extends ODM
{
  protected $_collection_name = 'categories';

  public $_schema = [
    '_id' => 'id',
    'post_id' => 'int',
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
    return $this->where('_id','=',  new MongoId($id))->find();
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
