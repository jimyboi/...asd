<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header",'layout'); ?>
<body>  
<style type="text/css">
    #return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #00843d !important;
    background: #00843d !important;
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    z-index:1;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}
a
{
    color: #280071 !important;
}
a:hover,a:active,a:focus
{
    text-decoration: none;
}
</style>
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<div class="container" >
    <div class="row">
        <div class="col-md-12" style="border-top:1px solid #202f80;border-bottom:1px solid #202f80;padding-top:2em;">
            <!--div class="col-md-12" style="padding-bottom:3em;">
                <div class="col-md-4">
                    <div class="row">
                        <h4 style="color:#202f80;font-weight:bold;">Members</h4>
                    </div>
                </div>
                <div class="col-md-8">
                    
                </div>
            </div-->
                <?php 
                    $act_conquery =  $this->QModel->sf('open_category');
                    $act_concc = $this->QModel->c($act_conquery);
                                    
                    if( ! $act_concc):
            ?>
                    <td colspan="7" style="text-align:center;">No Record Found</td>
            <?php 
                        else:
                        $i = 1;
                        $counter = 0;
                        foreach ($this->QModel->g($act_conquery, TRUE) as $get) :
                            $category_description = $get['category_name'];
                            $category_id = $get['category_id'];
             ?>
                    
            
                <?php if(($counter + 1) % 3 == 0 && ($counter + 1) % 4 == 0): ?>
                                    <div class="col-md-3" >
                                        <a target="___blank" href="javascript:void(0);">
                                            <p><?php echo $category_description; ?></p>
                                        </a>
                                        <hr>
                                    </div>
                                    
                                    <div class="clearfix visible-md-block visible-lg-block"></div>
                                    <div class="clearfix visible-sm-block"></div>
                                <?php elseif(($counter + 1) % 3 == 0): ?>
                                    <div class="col-md-3" >
                                        <a target="___blank" href="javascript:void(0);">
                                            <p><?php echo $category_description; ?></p>
                                        </a>
                                        <hr>
                                    </div>
                                    <div class="clearfix visible-sm-block"></div>
                                <?php elseif(($counter + 1) % 4 == 0): ?>
                                    <div class="col-md-3">
                                        <a target="___blank" href="javascript:void(0);">
                                            <p><?php echo $category_description; ?></p>
                                        </a>
                                        <hr>
                                    </div>
                                    <div class="clearfix visible-md-block visible-lg-block"></div>
                                <?php else: ?>
                                    <div class="col-md-3">
                                        <a target="___blank" href="javascript:void(0);">
                                            <p><?php echo $category_description; ?></p>
                                        </a>
                                        <hr>
                                    </div>  
                                <?php endif; ?>
                                <?php $counter++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?> 
        </div>
    </div>  
</div>  

</body>
<?php get_footer("footer"); ?>
<script type="text/javascript">
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