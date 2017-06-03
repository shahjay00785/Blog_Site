<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Article Admin Panel</title>
  <!--  <link rel="stylesheet" href=-->
  <?= link_tag('assets/css/boostrap.min.css') ?>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Admin Panel</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

        <ul class="nav navbar-nav navbar-right">

            <?= anchor('Login/admin_logout','Logout',['class'=>'btn btn-lg btn-primary pull right']); ?>
        </ul>
      </div>
    </div>
  </nav>
  *
