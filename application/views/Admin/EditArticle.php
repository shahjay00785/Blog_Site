<?php include('Admin_header.php') ?>

<?php echo form_open("Admin/update_article/{$article->id}",['class'=>'form-horizontal']); ?>

<?php //echo form_hidden('article_id',$this->session->userdata('user_id')); ?>
<?php //echo form_hidden('article_id',$article->id); ?>
<fieldset>
  <legend>EdirArticle </legend>



  <div class="row">
    <div class="form-group">


      <label for="inputEmail" class="col-lg-2 control-label">Article Name</label>
      <div class="col-lg-10">
        <?php $data=array('name' => 'title',
        'class' => 'form-control',
        'placeholder' => 'title',
          'value'=>set_value('title',$article->title));
        echo form_input($data);                 ?>
        <!--   <input class="form-control" id="inputEmail" placeholder="Email" type="text">-->
      </div>
    </div>

    <?php echo form_error('title');?>

  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-lg-2 control-label">Article body</label>
    <div class="col-lg-10">
      <?php
      $data=array('name' => 'body' ,
      'class' => 'form-control',
      'placeholder' => 'Password',
       'value'=>set_value('body',$article->body));
      echo form_textarea($data);
      ?>
      <?php echo form_error('body'); ?>
      <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
      <div class="checkbox">
        <label>
          <input type="checkbox"> Checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
      <!--        <button type="reset" class="btn btn-default">Cancel</button> -->
      <!--        <button type="submit" class="btn btn-primary">Submit</button>-->
      <?php echo form_reset(['name' =>'reset','value'=>'reset','class'=>'btn btn-primary']); ?>
      <?php echo form_submit(['name' =>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>

    </div>
  </div>
</fieldset>
</form>
<?php //echo validation_errors(); ?>
<?php include_once('Admin_footer.php') ?>
