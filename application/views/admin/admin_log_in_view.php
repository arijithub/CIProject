<!DOCTYPE html>
<html lang='en'>
<head>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<style>
@import url('https://fonts.googleapis.com/css?family=Lobster');
@import url('https://fonts.googleapis.com/css?family=Roboto');

body{
  margin: 0;
  padding: 0;
  height: 100vh;
  font-family: 'RobotoLight', sans-serif;
  border-bottom: 1px solid #FFFFF0;
  background: #00c6ff;
  background: -webkit-linear-gradient(to right, #0072ff, #00c6ff);
  background: linear-gradient(to right, #0072ff, #00c6ff);
  overflow: hidden;
}
button {
  text-decoration: none;
  border: none;
}
h1 {
	position: absolute;
  display: inline-table;
	top: 20%;
	left: 50%;
	transform: translate(-50%, -50%);
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: #FFFFF0;
}
h2 {
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%, -50%);
  font-size: 25px;
	text-align: center;
	color: #FFFFF0;
}
.popup-btn{
	position: absolute!important;
	top: 55%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.main-btn-rect,
.main-btn-circle{
	position: relative;
	margin: 0;
	font-family: 'Roboto', sans-serif;
	color: #FFFFF0;
	background-color: rgb(252, 79, 79);
	text-transform: uppercase;
	font-size: 25px;
	letter-spacing: 1px;	
	outline: none;
	cursor: pointer;
	z-index: 100;
}
.main-btn-rect {
	padding: 10px 80px;
	line-height: 30px;
}
.main-btn-rect:before, 
.main-btn-rect:after{
  position: absolute;
  content: '';
  top:0;
  width: 0%;
  height: 100%;
  background-color: rgba(255, 255, 240, 0.2);
  -webkit-transition: width 0.3s;
  -o-transition: width 0.3s;
  transition: width 0.3s;
}
.main-btn-rect:before {
  left: 0;
}
.main-btn-rect:after {
  right: 0;
}
.main-btn-rect:hover:before, 
.main-btn-rect:hover:after{
  width: 50%;
}
.main-btn-circle{
	height: 40px;
	width: 40px;
	-webkit-border-radius: 50%;
	border-radius: 100%;
	line-height: 40px;
  -webkit-transition: box-shadow 0.3s;
  -o-transition: box-shadow 0.3s;
  transition: box-shadow 0.3s;
}
.main-btn-circle:hover{   
  -webkit-box-shadow: inset 2px 1px 0px 20px rgba(255, 255, 240, 0.2);
  -moz-box-shadow: inset 2px 1px 0px 20px rgba(255, 255, 240, 0.2);
  box-shadow: inset 2px 1px 0px 20px rgba(255, 255, 240, 0.2);
}
.popup{
  position: fixed;
	top: 100%;
  width: 100%;
  height: 100%;
  z-index: 10001;
}
.popup.active{
  top:0;
  background-color: rgba(3, 3, 3, 0.98); 
  transition: background-color .6s ,opacity .6s;
}
.popup .main-btn-rect{
  padding: 10px 100px;
}
.popup .popup-content{
  position: absolute;
  top: 50%;
  left: 50%;
  max-height: 568px;
  min-width: 320px;
  margin-top: 150px;
  padding: 25px;
  background-color: #FFFFF0;
  color: #070000;
  -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  -ms-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -o-transform: translateX(-50%) translateY(-50%);
  transition: margin .6s;
  -webkit-transition: margin .6s;
  -moz-transition: margin .6s;
  -o-transition: margin .6s;
}
.popup.active .popup-content{
  margin-top: 0px;
}
.popup-content h6{
  display: table;
  font-size: 16px;
  text-align: center;
  margin: 10px auto;
  font-family: 'Roboto',sans-serif;
  text-transform: uppercase;
  font-weight: 100;  
}
.form-group{
	position: relative;
	width: 90%;
	margin: 0px auto;
}
form#send input, form#send textarea{
	position: relative;
	margin-bottom: 32px;
	width: 100%;
	height: 29px;
	font-family: 'RobotoLight', sans-serif;
	text-indent: 20px;
  background-color: transparent;
	outline: 0;
	border: none;
	border-bottom: 1px solid #070000;
	-webkit-transition: border 0.6s;
	-o-transition: border 0.6s;
	transition: border 0.6s;
}
form#send input:focus,
form#send textarea:focus{
	border-bottom: 1px solid rgb(63, 173, 168); 
}
form#send label{
	position: absolute;
	top: 0;
	line-height: 28px;
	-webkit-transition: color .5s;
	-o-transition: color .5s;
	transition: color .5s;
}
form#send input:focus + label,
form#send textarea:focus + label{
  color: rgb(63, 173, 168);
}
form#send .txt{
	line-height: 22px;
	left: 2px;
}
form#send .main-btn-rect {
	position: relative;
	display: block;
	padding: 12px 80px;
	margin: 0px auto;
	font-size: 14px;
}
form#send .main-btn-rect i {
	margin-right: 5px;
}
.popup .fade-out{
  position: absolute;
  top: -20px;
  right: -20px;
  text-align: center;
  font-size: 15px;
}
.share-wrap{
	position: absolute;
  display: inline-table;
	top: 67%;
	left: 50%;
	transform: translate(-50%, -50%);
  padding: 15px;
  text-align: center;
}
.share-btn{
  color: #FFFFF0;
  padding: 7px 25px;
  text-decoration: none;
  cursor: pointer;
  font-weight: 100;
  font-size: 14px;
  font-family:'Lobster', sans-serif;
  background-color: rgba(63, 173, 168, .8);
  text-transform: uppercase;
  border-radius: 5px;
  transition: background-color .5s;
  -webkit-transition: background-color .5s;
  -moz-transition: background-color .5s;
  -o-transition: background-color .5s;
}
.share-btn:hover{
  color: #FFFFF0;
  text-decoration: none;
  background-color: rgba(63, 173, 168, 1.0);
}

.resp-sharing-button__link,
.resp-sharing-button__icon {
  display: inline-block
}
.resp-sharing-button__link {
  text-decoration: none;
  color: #fff;
  margin: 2px;
}
.resp-sharing-button {
  border-radius: 5px;
  transition: 25ms ease-out;
  padding: 6px 9px;
  transition: background-color .5s;
  -webkit-transition: background-color .5s;
  -moz-transition: background-color .5s;
  -o-transition: background-color .5s;
}

.resp-sharing-button__icon,
.resp-sharing-button__icon--solid,
.resp-sharing-button__icon--solidcircle {
  fill: #fff;
  stroke: none
}
.resp-sharing-button--facebook {
  background-color: #3b5998;
  border-color: #3b5998;
}
.resp-sharing-button--facebook:hover,
.resp-sharing-button--facebook:active {
  background-color: #2d4373;
  border-color: #2d4373;
}
.resp-sharing-button--twitter {
  background-color: #55acee;
  border-color: #55acee;
}
.resp-sharing-button--twitter:hover,
.resp-sharing-button--twitter:active {
  background-color: #2795e9;
  border-color: #2795e9;
}
.resp-sharing-button--linkedin {
  background-color: #0077b5;
  border-color: #0077b5;
}
.resp-sharing-button--linkedin:hover,
.resp-sharing-button--linkedin:active {
  background-color: #046293;
  border-color: #046293;
}
@media only screen and (max-width: 768px){
  h1 {font-size: 25px;}
  h2 {font-size: 14px;}
  form#send .main-btn-rect {padding: 7px 60px; font-size: 14px;}
  .popup-btn{padding: 7px 60px; font-size: 14px;}
}</style></head><body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<h1>Take a chance</h1>
<h2>"Because you will never know how absolutely perfect something could turn out to be"</h2>
<button type="button" class="main-btn-rect popup-btn" data-popup="popup-reg">Click me</button>
<div id="popup-reg" class="popup">
  <div class="popup-content">
    <div class="event-header">
      <h6>Don't be shy, say hi!</h6>
    </div>
      <form id="send" class="send-form" action="<?php echo base_url('admin/loginCheckMethod') ?>" method="post" >
        <div class="form-group">
          <input type="email" placeholder="Enter Email..." id="name" name="y_email" required="required">
          <label for="name">
            <i class="fa fa-user"></i>
          </label>
        </div>
        <div class="form-group">
          <input type="password" placeholder="Enter Password..." id="phone" name="y_password" required="required">
          <label for="phone">
            <i class="fa fa-phone"></i>
          </label>
        </div>
        <!-- <div class="form-group">
          <input type="email" placeholder="Enter mail..." id="mail" name="mail" required="required">
          <label for="mail">
            <i class="fa fa-envelope"></i>
          </label>
        </div>
        <div class="form-group">
          <textarea placeholder="Enter message..." name="text" id="text"></textarea>
          <label for="text" class="txt">
            <i class="fa fa-commenting"></i>
          </label>
        </div> -->
        <button type="submit" class="main-btn-rect" name="text" value="Send">
          <i class="fa fa-paper-plane"></i>Login</button>
      </form>
    <span class="fade-out main-btn-circle">╳</span>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script >
  $(document).ready(function(){
    $('.popup-btn').click(function(){ 
      var popupBlock = $('#'+$(this).data('popup'));
      popupBlock.addClass('active')
        .find('.fade-out').click(function(){
          popupBlock.css('opacity','0').find('.popup-content').css('margin-top','350px');        
          setTimeout(function(){
            $('.popup').removeClass('active');
            popupBlock.css('opacity','').find('.popup-content').css('margin-top','');
          }, 600);
        });
    });
  });
</script>
</body>
</html>