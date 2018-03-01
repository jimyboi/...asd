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
    <?php echo link_tag('themes/default/css/style.css'); ?>
    <?php echo link_tag('themes/default/css/font-awesome.min.css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo themes_url('css/admin.css'); ?>">
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
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <nav class="navbar navbar-inverse" style="background:#fff;border:2px solid #00334E !important;border-radius:0px;">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                             <a href="<?php echo base_url('admin'); ?>" class="navbar-brand" style="padding:3px 15px;"><img src="<?php echo themes_url('images/logoa.png'); ?>" class="img-responsive" style="width:180px;" /></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <?php if ($this->session->userdata('thenetworkplusadmin')): ?>
                            <ul class="nav navbar-nav">
                                <li class="<?php echo (isset($menu) ? $menu == 'home' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/'); ?>" class="hvr-underline-reveal">Home</a></li>
                                <li class="<?php echo (isset($menu) ? $menu == 'directory' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/directory'); ?>" class="hvr-underline-reveal">Directory</a></li>
                                <li class="<?php echo (isset($menu) ? $menu == 'charity' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/charity'); ?>" class="hvr-underline-reveal">Charity</a></li>
                                <li class="<?php echo (isset($menu) ? $menu == 'calendar' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/calendar'); ?>" class="hvr-underline-reveal">Calendar</a></li>
                                <li class="<?php echo (isset($menu) ? $menu == 'activities' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/activities'); ?>" class="hvr-underline-reveal">Activities</a></li>
                                <li class="<?php echo (isset($menu) ? $menu == 'contact' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/contact'); ?>" class="hvr-underline-reveal">Contact</a></li>
                                <li class="<?php echo (isset($menu) ? $menu == 'category' : '') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/category'); ?>" class="hvr-underline-reveal">Open Categories</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url('admin/logout'); ?>" class="hvr-underline-reveal">Logout</a></li>
                            </ul>
                        <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>


