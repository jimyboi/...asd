<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="col-md-12" style="margin-top:10em;">
  &nbsp;
</div>
<footer>
  <div class="footer navbar-fixed-bottom">
    <div class="col-lg-12 container-fluid" style="background-color:#232f85;">
      <div class="col-lg-12">
        <div class="container"><p style="padding:10px;color:#fff;text-align:left; margin-top: 20px;">&copy; <?php echo date("Y") ?> Woodland Hills Networking Group. All Rights Reserved</p></div>
      </div>
    </div>
  </div>
</div>
</footer>

<?php echo js_tag('js/jquery.js');?>
<?php echo js_tag('js/bootstrap.min.js');?>
<?php echo js_tag('js/bootstrap-filestyle.js');?>
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

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

  // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

</script>

