<?php include('Admin_header.php'); ?>

<?php

//print_r($articles);

?>
<div class="container">

  <div class="row">
    <div class="col-lg-6">

      <?= anchor('Admin/store_article','Add articles',['class'=>'btn btn-lg btn-primary pull right']); ?>
      <!--<a href="<?= base_url('') ?>" class="btn btn-lg btn-primary pull right">Add <article class="">-->

      </article></a>
    </div>
  </div>
<?php if( $feedback = $this->session->flashdata('login failed')): ?>
<div class="row">
  <div class="col-log-6">
    <div class="alert alert-dismissible alert-danger">
      <?= $feedback ?>
    </div>
  </div>
</div>
<?php endif; ?>
  <table class="table">
    <thead>
      <th>Sr.no</th>
      <th>Title</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php if( count($articles)): ?>
        <?php foreach($articles as $article): ?>
          <tr>
            <td> 1 </td>
            <td>
              <?= $article->title ?>
            </td>
            <td>
              <?= anchor("Admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-default']); ?>
              <?php //anchor("Admin/edit_article/". $article->id); ?>
            <!--  <a href="#" class="btn btn-default">edit</a>-->
            <!--  <a href="#" class="btn btn-danger">delete</a>-->


              <?= anchor("Admin/delete_article/{$article->id}",'Delete',['class'=>'btn btn-default']); ?>

            <?php
              /*  form_open('Admin/delete_article');
                form_hidden('article_id',$article->id);
                form_submit(['name'=>'Submit','value'=>'delete','class'=>'btn btn-danger']);
                form_close();
                */
            ?>


            </td>
          <?php endforeach;  ?>
        <?php else: ?>
          <tr>
            <td colspan="3"> No Record found </td>

          </tr>
        <?php endif; ?>
      </tr>
    </tbody>
  </table>
</div>



<?php include('Admin_footer.php'); ?>
