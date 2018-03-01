<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
  
<footer style="margin-top:10em;">
<div class="footer">



<div class="container">
<div class="col-md-12">
<div class="col-md-6">



    <p style="font-family:Georgia,sans-serif;float:left;font-style:italic;font-size:17px;color:black;">
Sign up for our Newsletter: &nbsp;&nbsp;
    </p><input  type="text" placeholder="enter email" style="width:100px;border:0;font-family:Georgia,sans-serif;float:left;font-style:italic;font-size:17px; ">
    <input class="btn btn-success" type="submit" value="Sign Up" style="font-family:Georgia,sans-serif;width:75px;height:35px;">
</div>

<div class="col-md-6">
<div class="row">
      <a href="<?php echo base_url(''); ?>" class="pull-right "><img src="<?php echo themes_url('images/social-fb.png');?>"  class="img-respponsive" style="margin:15px;"/></a>
     <a href="<?php echo base_url(''); ?>" class="pull-right "><img src="<?php echo themes_url('images/social-tw.png'); ?>"  class="img-respponsive" style="margin:15px;"/></a>
     <a href="<?php echo base_url(''); ?>" class="pull-right "><img src="<?php echo themes_url('images/social-in.png'); ?>" class="img-respponsive" style="margin:15px"/></a>
     <a href="<?php echo base_url(''); ?>" class="pull-right "><img src="<?php echo themes_url('images/social-yt.png'); ?>"  class="img-respponsive" style="margin:15px;"/></a>
</div>
</div>
</div>
    
</div>
</div>
  <div class="col-lg-12 container-fluid" style="background-color:#232f85;">
  <div class="col-lg-12">
    <div class="container"><p style="padding:10px;color:#fff;text-align:left; margin-top: 20px;">&copy; 2015 The NetworkingPlus Inc. All Rights Reserved.</p></div>
    </div>
  </div>
</div>
</footer>

<?php echo js_tag('js/jquery.js');?>
<?php echo js_tag('js/bootstrap.min.js');?>
<?php echo js_tag('js/slick.js');?>
<?php echo js_tag('js/log.js');?>


<?php
  if ( ! empty($js))
  {
    foreach($js as $javascript)
    {
      echo '<script type="text/javascript" src='.themes_url("js/".$javascript.".js").'></script>';
    }
  }
?>

</body>
</html>