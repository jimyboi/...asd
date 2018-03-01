<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php get_header("admin/header"); ?>


<body>
		<div>
			<h3 style="padding-left: 50px;"> WHNG ADMIN
			<a href="" style="float:right;color:#00334E;font-size: 14px;">Logout</a></h3>
		</div>

		<hr style="border: 1px solid gray;">

	<div class="col-12">
			<div class="col-md-4" style="padding-left: 60px;">

				<div style="height:70px;"></div>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Home
				</div></a>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Members
				</div></a>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Calendar Events
				</div></a>

				<a href="<?php echo base_url("");?>" style="text-decoration: none;">
				<div class="menu">Notification
				</div></a>
			</div>

			<div href="" class="col-md-8">
					<div>
						<h5 style="color:#00334E;""> Members
						<a href="<?php echo base_url("member_directory?id=2");?>" style="float: right;color:#00334E;">Add Member</a></h5>
						<h6 style="padding-left: 10px;">Total:</h6>
						<br>
					</div>


					<div class="member_info">
							
						<?php
							$conn = mysqli_connect("localhost", "root", "", "whng");
							if ($conn-> connect_error){
								die ("Connection failed:". $conn->connect_error);	
							}
							
							$sql = "SELECT * FROM members";
							$result = $conn-> query($sql);
							


							if($result-> num_rows > 0){
								while ($row = $result-> fetch_assoc()){
								echo "<div>".$row['member_category']."<div>";
								echo "<div>".$row['business_name']."<div>";
								echo "<div>".$row['contact_name']."<div>";
								}
							}
							else {
								echo "No record";
							}
							$conn-> close();
						?>


					</div>

			</div>	

	</div>






</body>


<style>
body{
	width:900px;
	margin: auto;
	border: 0px solid black;
}
.member_info{
	margin-left: 50px;
	background:linear-gradient(to bottom, #B1F0F3 , #73C3C7);
	border-radius: 10px;
	height: 80px;
	width: 500px;
	padding-left: 30px;
	padding-top: 10px;
	line-height: 20px;
	opacity: 0.9;
	border: 1px solid #90c6c8;
	border-top: 3px solid #458A8C;
}
.member_info:hover{
	opacity: 1;
	transform: scale(1.1);
}
.form-control {
    width: 70%;
}
.form-group{
	height: 60px;
}
.menu{
	font-style: tahoma;
	height: 50px;
	line-height: 50px;
	color: #00334E;
	padding-left: 15px;
}
.menu:hover{
	background-color: #EBEBEB
}
.title {
    font-size: 140%;
    text-align: left;
    font-weight: bold;
    float: left;
}
</style>