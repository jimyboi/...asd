<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("header",array('style')); ?>
<?php /*
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="border-top:1px solid black;">
			<div class="container">
			<div class="col-md-3"><div class="berskill slide-text">
				<p style=" font-style:italic;font-size:14px;margin:30px;text-align:center" >What members<br>
				say...</p></center>
				</div></div>
					<div class="col-md-9">
						<div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' class="slider responsive">
					    <div><img src="<?php echo themes_url('images/1.jpg'); ?>" class="img-reponsive"  /></div>
					    <div><img src="<?php echo themes_url('images/2.jpg'); ?>" class="img-reponsive"  /></div>
					    <div><img src="<?php echo themes_url('images/3.jpg'); ?>" class="img-reponsive"  /></div>
					    <div><img src="<?php echo themes_url('images/4.jpg'); ?>" class="img-reponsive" /></div>
					    <div><img src="<?php echo themes_url('images/1.jpg'); ?>" class="img-reponsive"  /></div>
					    <div><img src="<?php echo themes_url('images/2.jpg'); ?>" class="img-reponsive" /></div>
					    <div><img src="<?php echo themes_url('images/3.jpg'); ?>" class="img-reponsive" /></div>
					    <div><img src="<?php echo themes_url('images/4.jpg'); ?>" class="img-reponsive" /></div>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>	
<style type="text/css">
	.myimage{
		 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: 100%;
		  
		}
</style>
*/ ?>
<div class="container-fluid bgimage">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p style="font-style:italic;font-size:190%;margin-top:100px;color:#232f85;margin-bottom:50px;" class="text-center">
						<b>W</b>oodland <b>H</b>ills is a "one person per business category" networking group that focuses on business referrals, social events, and fundraising for local charities. <br>
					<!--Our goals are to promote business for our members, exchange leads, and encourage <br>-->
					We concentrate on promoting business for our members, exchanging leads, <br>
					and goodwill and mutual respect towards all of our members.
					<!--goodwill and mutual respect towards all of our members.-->
					<br /><br />
					</p>
				</div>
			<?php /*	<div class="col-md-12 text-center">
					<div class="col-md-4">
						<a href="" class="btn btn-selection" style="padding:10px 50px;">Networking Group</a>
					</div>
					<div class="col-md-4">
						<a href="" class="btn btn-selection" style="padding:10px 50px;">Fundraising</a>
					</div>
					<div class="col-md-4">
						<a href="" class="btn btn-selection" style="padding:10px 50px;">Social Events</a>
					</div>*/ ?>
				
				
			</div>
		</div>
	</div>
</div>

				<div class="container">
					<div class="col-md-12">
						<div style="margin:40px;">
							<h4>Welcome To The Woodland Hills Networking Group</h4>
							<p>We are a bi-weekly, non-pressure leads group located in Woodland Hills, CA. Our meetings are	held at fobulous Woodland Hills Country Club every other Wednesday from 12pm - 1pm.</p><br/ >
							<h4>Make Your Working Lunch Work For You </h4>
							<p>Come see what we're all abount and get a FREE lunch your first visit. We'd love to meet you and	expand your network. Please check our calendar for details on our next meeting and RSVP to	Craig Phelps at 888-257-8200 or cphelps@searchlightinsurance.com.</p><br/ >
							<h4>Get Connected Today</h4>
							<p>Browse our online member directory to discover what our members have to offer. Whether you	are looking for a specific service or a strategic referral partner, our members will take good care	of you.</p>
						</div>	
					</div>
				</div>

	
<style>
.bgimage{
	background: url('<?php echo themes_url("images/back.jpg"); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>

<?php get_footer("footer"); ?>

    <script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
         dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    });
  </script>