<?php

class Model_Blog extends ODM
{
  protected $_collection_name = 'posts';

  public $_schema = [
      'id' => 'int',
      'author_id' => 'int',
      'category_id' => 'id',
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

  const SLUG_MAX_LENGTH = 60;
  const POST_DEFAULT_THUMBNAIL = '/images/toster1.png';

  public function get($id)
  {
    return $this->where('id','=',  $id)->find();
  }


  public function getThumbnail()
  {
    if(!$this->loaded())
      return 0;

    preg_match('/<img(.*)src\=\"([^"]+)\"/Us', $this->content, $matches);

    return isset($matches[2]) ? $matches[2] : self::POST_DEFAULT_THUMBNAIL;
  }


  public function getLink($post)
  {
      return '/news/'. $post->id. '-'. $this->getSlug($post);
  }

  public function getSlug($post)
  {
    return substr(Helper::rus2translit($post->title), 0, self::SLUG_MAX_LENGTH);
  }

  public function getErrors()
  {
    return $this->_validation;
  }

  public function add($values)
  {
    try
    {
      $values = array_merge($values, array('id' => $this->sId('id')));
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
