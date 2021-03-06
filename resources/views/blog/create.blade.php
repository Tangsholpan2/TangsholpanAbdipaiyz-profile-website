<!DOCTYPE html>
<html>
<head>
<title>Create Post</title>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
</head>
<style>
body{
background:pink;
font-family: 'Dancing Script', cursive;
}
div{
text-align:center;
font-size:40px;
}
.f{
text-align:center;
}
input{
font-family: 'Dancing Script', cursive;
border-radius:20px;
width:50%;
padding:8px;
margin:5px;
font-size:25px;
}
button{
font-family: 'Dancing Script', cursive;
border-radius:20px;
width:15%;
padding:8px;
margin:20px;
font-size:25px;
}
</style>
<body>
<div class="header"><h1>Welcome to our page!</h1></div>
<form method="POST" action="{{route('add-post')}}">
@csrf
<div class="f">
<input type="text" name="id" placeholder="id"/></br>
<input type="text" name="title" placeholder="title"/></br>
<input type="text" name="body" placeholder="body"/></br>
<button>Create</button>
</div>
</form>
</body>
</html>
