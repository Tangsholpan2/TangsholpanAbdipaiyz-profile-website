<!DOCTYPE html>
<html>
<head>
<title>About me</title>
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
	margin:40px 0;
}

.abme{
	margin:0;
	font-size:50px;
	font-family: 'Dancing Script', cursive;
	padding:30px;
}
.mm{
	display:flex;
	justify-content:center;
}
.mmi{

	font-size:20px;
	font-family: 'Dancing Script', cursive;
	margin:10px;
	border-bottom:3px solid;
}
.mmi:hover{
	background:white;
	border-radius:40px;
	transition:1s all;
}

img{
width:500px;
border-radius:50%;
}
.header{
	width:100%;
}

.headi{
	top:0;
	display:flex;
	justify-content:space-around;
	width:100%;
	background:rgba(0,0,0, .5);
	padding:22px;
	text-align:center;
}
.head-item{
	font-size:30px;
	color:white;
	font-family: 'Dancing Script', cursive;
	text-align:center;
	transition:0.5s all;
}
.head-item:hover{
	font-size:35px;
	border:3px solid white;
	cursor:pointer;
}
</style>
<div class="header">
<div class="headi">
<div data-aos="slide-up"><div class="head-item" onclick="window.location.reload();">MAIN</div></div>
<div data-aos="slide-up"><div class="head-item" id="ame">ABOUT ME</div></div>
<div data-aos="slide-up"><div class="head-item" id="hob">HOBBY</div></div>
<a href="contact.html"><div class="head-item" id="con">CONTACT</div></a>
</div>
</div>
<div class="main">
<div class="inside"><div data-aos="slide-up"><h1 class="abme">About me</h1></div></div>

<div class="mm">
<div class="mmi"><div data-aos="slide-up"><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et.</h2></div></div>
<div class="mmi"><div data-aos="slide-up"><img src="img/1.jpg"></div></div>
<div class="mmi"><div data-aos="slide-up"><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et.</h2></div></div>
</div>
</div>
</body>
</html>