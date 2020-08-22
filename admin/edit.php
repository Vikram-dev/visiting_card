<?php
session_start();
//echo md5("ratan@123$"); die;
require_once("config_db.php");
if($_POST['submit_k']){
	if(empty($_POST['param'])){
		$user_id = $_POST['param'];
		$firm = $_POST['firm_name'];
		$firm_add = $_POST['firm_address'];
		$owner = $_POST['owner_name'];
		$phone1 = $_POST['phone1'];
		
	$query = "Insert into userdata (`id`, `user_id`, `firm_name`, `firm_address`, `owner_name`, `phone1`, `alternate_contact`, `email`, `website`, `whatsapp`, `twitter`, `instagram`, `photo`, `logo`, `paytm`, `payu`, `phone_pay`, `amazon_pay`)"
	."VALUES(NULL, '".$user_id."', '".$firm."', '".$firm_address."', '".$owner."', '".$phone1."', '7895759798', 'aga.ratan@gmail.com', 'https://www.bigbasket.com', '8439401498', '@aga.ratam', NULL, 'testrinomials.png', NULL, '8439401498', '8439401498', '8439401498', '8439401498')";
	$sql=$mysqli->query($query);
		if($sql){
			
		}
	}else{
		$query = "update userdata set "
		."where username='".$_SESSION['username']."'";
		$sql=$mysqli->query($query);
	}
}
if(!empty($_SESSION['username'])){
	$query = "Select * from userdata where username='".$_SESSION['username']."' limit 0,1";
	$sql=$mysqli->query($query);
	if($sql){
		
	}else{
		$user_id = "";
	}
}
?>

<html>
<head>
    <title>
        Visting Card
    </title>
    <link src="../css/sample1.css" type="media"></link>
</head>
<body>

<form action="edit.php" method="post">
	<input type="hidden" value="<?=$user_id?>" name="param"/>
	<label>Firm name</label>
	<input type="text" name="firm_name"/>
	<label>Firm Address</label>
	<input type="text" name="firm_address"/>
	<label>Owner name</label>
	<input type="text" name="owner_name"/>
	<label>Contact No.</label>
	<input type="text" name="phone1"/>
	<label>Alternate contact</label>
	<input type="text" name="alternate_contact"/>
	<label>Email</label>
	<input type="text" name="email"/>
	<label>Website</label>
	<input type="text" name="website"/>
	<label>Whats app no</label>
	<input type="text" name="whatsapp"/>
	<label>Twitter handle</label>
	<input type="text" name="twitter"/>
	<label>instagram</label>
	<input type="text" name="instagram"/>
	<label>Photo</label>
	<input type="file" name="photo"/>
	<label>logo</label>
	<input type="file" name="logo"/>
	<!-- Payment -->
	<fieldset>
		<legend>Payment</legend>
		<label>Paytm</label>
		<input type="text" name="paytm"/>
		<label>Payu money</label>
		<input type="text" name="payu"/>
		<label>Phone Pay</label>
		<input type="text" name="phone_pay"/>
		<label>Amazon Pay</label>
		<input type="text" name="amazon_pay"/>
	</fieldset>
</form>


<!-- sample -->
<div class="wrapper">
    <div class="top_wrapper" style="background-color:#df1c31; color: #ffffff; text-align: center;">
        <a href="https://www.google.com/maps/dir/28.8208821,77.5581804/Aggarwal+general+store,+Anand+Vihar,+Modinagar,+Uttar+Pradesh+201204/@28.8244974,77.556704,16z/data=!3m1!4b1!4m13!4m12!1m1!4e1!1m5!1m1!1s0x390c8b6f5b6d973d:0x28add7f173e64100!2m2!1d77.5647449!2d28.8250441!2m2!1b1!2b1!3e0" class="Location">
            Drive location
        </a>
        <span class="tag_text">We are having all general store Items !!</span>
        <a href="https://goo.gl/maps/BAGJtC6LKRxJfNNa7" class="Location">
            Map location
        </a>
    </div>
    <div class="body_wrapper">
        <div class="Logo"> &nbsp;
            <img class="logo_image" src="img/testrinomials.jpg"/>

            <span class="logo_line"></span>
        </div>
        <div class="body_center">
            <div class="Firm_name"><span>Aggarwal General Agencies</span></div>
            <div class="propwriter_name"><span>Ratan Lal Aggarwal</span></div>
        </div>
        <div class="contact">
            <a href="tel:8439401498">8439401498</a>
        </div>
    </div>
    <div class="footer_wrapper">
        <div class="website">
            <a href="https://www.bigbasket.com">https://www.bigbasket.com</a>
        </div>
        <div class="firm_address">Near Goyal Puri, Lowar Bazar, Modinagar (GHZB) - 201204</div>
        <div class="social_contact">
            <a class="email" href="mailto:aga.ratan@gmail.com">Aga.ratan@gmail.com</a>
            <a class="whatsapp" href="https://wa.me/8439401498">Whatsapp</a>
            <a class="facebook" href="https://facebook.com/dashing.vipul/">Facebook</a>
            <a class="twitter" href="https://twitter.com/dashing.vipul/">@dasing.vipul</a>
            <a class="instagram" href="">Instagram</a>
        </div>
    </div>
</div>

<!-- sample QR code -->


</body>
</html>