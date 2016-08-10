<?=View::factory('admin/header')?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">


 	<div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class=""><?=($category ? 'Редактировать категорию': 'Создать категорию')?></h3>

 	<form method="post">

	<div class="form-group">
    <label for="title">Заголовок</label>
    <input class="form-control" name="title" id="title" value="<?=($category ? htmlspecialchars($category->title) : NULL )?>">
  </div>

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
