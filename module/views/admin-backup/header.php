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
    <?php echo link_tag('themes/default/css/bootstrap.css'); ?>
    <?php echo link_tag('themes/default/css/hover.css'); ?>
    <?php echo link_tag('themes/default/css/font-awesome.min.css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo themes_url('css/admin.css'); ?>">
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

</head>


    </style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <a href="<?php echo base_url('admin'); ?>"><img src="<?php echo themes_url('images/logo.jpg'); ?>" class="img-responsive" /></a>
            </div>
            <div class="col-md-8 text-right" style="margin-top:20px;">
              <?php if ($this->session->userdata('thenetworkplus')): ?>
                <a href="<?php echo base_url('main/logout'); ?>" style="color:black;font-size:16px;font-family:Calibri,sans-serif;letter-spacing:2px;cursor:pointer;text-decoration:none;">Logout</a><br>
              <?php else: ?>
                  <a href="#" data-toggle="modal" data-target="#login-modal" style="color:black;font-size:16px;font-family:Calibri,sans-serif;letter-spacing:2px;cursor:pointer;text-decoration:none;">Login</a><br>
              <?php endif ?>
            </div>
        </div>
    </div>
</div>



