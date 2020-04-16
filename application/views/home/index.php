<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Posts</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('auth/logout');?>">Sign Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
 
        <div class="jumbotron">
          <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
        </div>
 
      </div>
    </div>
 
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  </body>
</html>