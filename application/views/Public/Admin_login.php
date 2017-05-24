<?php include('public_header.php') ?>
<?php echo form_open('index.php/Login/admin_login',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Admin Login</legend>
    <div class="form-group">


      <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
      <div class="col-lg-10">
      <?php $data=array('name' => 'username',
                        'class' => 'form-control',
                        'placeholder' => 'usernaae');
        echo form_input($data);                 ?>
    <!--   <input class="form-control" id="inputEmail" placeholder="Email" type="text">-->
      </div>
    </div>

      <?php echo form_error('usernane'); ?>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php
            $data=array('name' => 'password' ,
                        'class' => 'form-control',
                        'placeholder' => 'Password' );
            echo form_password($data);
         ?>
         <?php echo form_error('password'); ?>
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
         <?php echo form_submit(['name' =>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>

      </div>
    </div>
  </fieldset>
</form>
<?php //echo validation_errors(); ?>
<?php include('public_footer.php') ?>
