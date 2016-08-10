<?=View::factory('admin/header')?>
<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-main">
<div class="inbox-mail">
<div class="col-md-12 tab-content tab-content-in">

<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
		<h3>Записи</h3>

            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">

               </div>
                <table class="table">
                    <tbody>
<?php foreach($posts as $post):?>
                      <tr class="table-row">
                          <td class="table-img">
                             <img src="/" alt="" />
                          </td>
                          <td class="table-text">
                            <h6><?=htmlspecialchars($post->title)?></h6>
                          </td>
                          <td>
                          <a style="text-decoration:none" href="/admin/edit?id=<?=(isset($post->id) ? $post->id : 0)?>"><span class="fam">Ред</span></a>
													<a style="text-decoration:none" href="/admin/post_del?id=<?=(isset($post->id) ? $post->id : 0)?>"><span class="fam" style="background:red">Удал.</span></a>
                        </td>

                           <td >


                          </td>
                      </tr>
<?php endforeach; ?>


</tbody>
                </table>
               </div>
            </div>

<?=$pagination?>

</div>

<div class="clearfix"> </div>
   </div>

</div>

<?=View::factory('admin/footer')?>
