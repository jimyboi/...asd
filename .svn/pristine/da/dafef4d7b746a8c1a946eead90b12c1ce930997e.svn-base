<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml" class="no-js">
<head>
    <?php $last_update = time() - 60; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php echo meta('viewport', 'width=device-width, initial-scale=1'); ?>
    <?php $this->output->set_header("HTTP/1.0 200 OK"); ?>
    <?php $this->output->set_header("HTTP/1.1 200 OK"); ?>
    <?php $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT'); ?>
    <?php $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate"); ?>
    <?php $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false); ?>
    <?php $this->output->set_header("Pragma: no-cache"); ?>
    <?php echo header('Content-Type: text/html; charset=UTF-8'); ?>
    <?php echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
    <?php echo meta('description', 'Creation Eyed v3.2'); ?>
    <?php echo meta('keywords', 'Creation Eyed v3.2'); ?>
    <?php echo meta('robots', 'noodp,noydir'); ?>
    <?php echo link_tag('themes/default/images/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>
    <?php echo link_tag('themes/default/images/favicon.ico', 'icon', 'image/x-icon'); ?>
    <?php echo link_tag('themes/default/css/layout.css'); ?>
    <?php echo link_tag('themes/default/css/bootstrap.css'); ?>
    <?php echo link_tag('themes/default/css/slick.css'); ?>
    <?php echo link_tag('themes/default/css/slick-theme.css'); ?>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

    <?php
        if ( ! empty($css))
        {
            foreach($css as $stylesheet)
            {
                echo link_tag(themes_url('css/'.$stylesheet.".css"));
            }
        }
    ?>
    
    <title><?php echo $title; ?></title>


    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, '');
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>


    </style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <a href="<?php echo base_url(''); ?>"><img src="<?php echo themes_url('images/logo.jpg'); ?>" class="img-responsive" /></a>
                    </div>
                         <div class="col-md-8">
                                 <div class="text-right"> 
                                        <br>
                                             
<?php if ($this->session->userdata('thenetworkplus')): ?>
    <a href="<?php echo base_url('main/logout'); ?>" style="color:black;  text-align:right;font-size:16px;font-family:Calibri,sans-serif;letter-spacing:2px;cursor:pointer;text-decoration:none;">Logout</a><br>
<?php else: ?>
    <a href="#" data-toggle="modal" data-target="#login-modal" style="color:black;  text-align:right;font-size:16px;font-family:Calibri,sans-serif;letter-spacing:2px;cursor:pointer;text-decoration:none;">Login</a><br>
<?php endif ?>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog1">
                <div class="loginmodal-container">
                   
                  <form method="POST">  
                  <div class="form-group">  <div class="form-group">
                  <label class="pull-left" style="font-family:Calibri,sans-serif;font-size: 16px; font-weight:500 ;!important;">Username:</label><br>
                  <input type="text" name="username"  ></div>
                    <span><?php echo isset($username_response) ? $username_response : ''; ?></span>




                    <div class="form-group"> 
                    <label class="pull-left" style="font-family:Calibri,sans-serif;font-size: 16px;font-weight:500 ;!important;">Password:</label> <br>
                     <input type="password" name="password" > </div>
                    <span><?php echo isset($password_response) ? $password_response : ''; ?></span>

             <div class="checkbox"> <input type="checkbox"> Remember Me </div> </div>
             <div class="form-group">
                    <input type="submit" name="submit" class="login loginmodal-submit" value="Login" style="width:290px !important;height:33px !important;" >
               </div> </form>
                  
                  <div class="login-help">
               <a href="#">Forgot Password</a>
                <div class="text-center" data-dismiss="modal" style="cursor:pointer;">X Close</div>
                  </div>
                </div>
            </div>
          </div>

        <?php if ($this->session->userdata('thenetworkplus')): ?>
              <input  type="text" placeholder="Enter Company or Category" style="width:185px;border:0;font-family:Times New Roman;font-style:italic;font-size:16px; ">|&nbsp;<img src="<?php echo themes_url('images/search.png'); ?>"  >
         <?php endif ?> 
                </div>





<br><br>
        <nav class="navbar navbar-default">
  
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
          
            </div>
            <div class="collapse navbar-collapse" style="padding-right:0px;padding-left;0px;" id="myNavbar" >
              <ul class="nav navbar-nav navbar-right">
             
                <li><a href="<?php echo Base_Url('before'); ?>">Directory</a></li>
                <li><a href="<?php echo Base_Url('charity'); ?>">Charity</a></li> 
                <li><a href="#">Calendar</a></li> 
                <li><a href="<?php echo Base_Url('activity'); ?>">Activities</a></li> 
                <li><a href="<?php echo Base_Url('contact'); ?>">Contact</a></li> 
              </ul>
     
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>