<?=View::factory('admin/header')?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">


 	<div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class=""><?=($post ? 'Редактировать запись' : 'Создать запись')?></h3>

 	<form method="post">

	<div class="form-group">
    <label for="title">Заголовок</label>
    <input class="form-control" name="title" id="title" value="<?=$post ? htmlspecialchars($post->title) : NULL?>">
  </div>

	<div class="form-group">
			<label for="category">Категория</label>
			<select name="category">
			<?php foreach(ODM::factory('category')->find_all() as $key => $val):?>
					<option value="<?=$val->_id?>" <?=($val->_id === ($post ? $post->category_id : 0) ? 'selected="selected"' : NULL)?>><?=$val->title?></option>
			<?php endforeach; ?>
			</select>
	</div>

  <div class="form-group">
    <label for="content">Контент</label>
		<textarea name="content" id="content"><?=($post ? $post->content : NULL)?></textarea>
  </div>

	<input type="hidden" value="<?=($post ? $post->id : NULL)?>" name="id">



</div>

<div class="panel-footer">
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
	<button class="btn-primary btn" type="submit">Отправить</button>
</div>
</div>
</div>

</form>
</div>

</div>

<script>
    CKEDITOR.replace( 'content' );
</script>


<?=View::factory('admin/footer')?>
