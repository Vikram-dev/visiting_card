<?php
session_start();
//echo md5("ratan@123$"); die;
require_once("config_db.php");
if($_POST['submit_k']){
	
}

?>

<html>
<head>
    <title>
        Visting Card
    </title>
    <style>
        .wrapper{
            width: 600px;
            position: absolute;
            right: 50%;
            border: solid grey 2px;
            border-radius: 5px;
            border-shadow: 10px 10px;
            border-spacing: 2px;
            box-shadow: 11px 13px 16px darkgrey;
        }
        .top_wrapper{
            height: 30px;
            padding: 5px;
        }
        .top_wrapper a{
            color: white;
            text-decoration-color: white;
            padding: 5px 30px;
        }
        .body_wrapper{
            width: 100%;
            display: block;
        }
        .body_wrapper .Logo{
            width: 20%;
            float: left;
        }
        .body_center{
            width: 50%;
            text-align: center;
            float: left;
            text-shadow: 2px 2px 4px yellow;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .body_wrapper .contact{
             width: 25%;
             float: right;
             padding-top: 5px;
             text-shadow: 2px 2px 4px yellow;
         }
        .footer_wrapper{
            clear: both;
            margin: 10px;
            padding-top: 10px;
        }
        .footer_wrapper .firm_address{
            margin-bottom: 5px;
            padding-top: 10px;
        }
        .footer_wrapper .website{
            margin-bottom: 5px;
            text-align: center;
        }
        .social_contact{
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .social_contact a{
            padding: 5px;
            margin:5px;
        }
    </style>
</head>
<body>

<form action="edit.php" method="post">
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