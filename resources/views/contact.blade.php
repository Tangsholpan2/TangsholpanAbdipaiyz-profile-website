<!DOCTYPE html>
<html>
<head>
<title>Contact me</title>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
</head>
<body>
<style>
html,body{
	margin:0;
	padding:0;
	width:100%;
	overflow-x:hidden;
}
.main{
	background:#949A98;
	width:100%;
	text-align:center;
	border-bottom:3px solid white;
}
input{
	border:0;
	border-radius:30px;
	padding:18px;
	margin:10px;
	width:60%;
}
#textme{
    border:0;
	border-radius:30px;
	padding:60px 18px;;
	margin:10px;
	width:60%;
}
button{
	padding:15px 20px;
	font-size:35px;
	margin:50px;
	border:0;
	border-radius:30px;
	font-family: 'Dancing Script', cursive;
	
}
.abme{
	margin:0;
	font-size:50px;
	font-family: 'Dancing Script', cursive;
	padding:30px;
}
</style>

<div class="main" id="contact">
<div class="inside"><div data-aos="slide-up"><h1 class="abme">Contact</h1></div></div>
<div class="footer">
<div data-aos="fade-up-right"><input type="text" placeholder="First name"/></br></div>
<div data-aos="fade-up-left"><input type="text" placeholder="Last Name"/></br></div>
<div data-aos="fade-up-left"><input type="text" placeholder="Mobile Number"/></br></div>
<div data-aos="fade-up-right"><input type="text" placeholder="Text me" id="textme"/></br></div>
<button id="send">SEND</button>
</div>
</div>
</body>
</html>