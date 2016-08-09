<?php

class Model_Blog extends ODM
{
  protected $_collection_name = 'posts';

  public $_schema = [
      '_id' => 'int',
      'author_id' => 'int',
      'category_id' => 'int',
      'title' => 'string',
      'content' => 'string',
      'short_content' => 'string',
      'image' => 'string',
      'date' => 'int',
      'type' => 'string',
  ];

  protected $_rules = [
    'title' => [
      ['not_empty'],
      ['min_length', [':value', 4]],
      ['max_length', [':value', 120]]
    ],
    'content' => [
      ['not_empty'],
      ['min_length', [':value',10]],
      ['max_length', [':value', (10*1000)]]
    ],
    'image' => [
      ['url'],
    ],
    'type' => [
      ['in_array', [':value', ['post']]]
    ]
  ]
  ;

  public function getErrors()
  {
    return $this->_validation;
  }

  public function add($values)
  {
    try
    {
        $this->values($values)->save();
    }
    catch(exception $e)
    {
      return 0;
    }
    return 1;
  }

}

?>
