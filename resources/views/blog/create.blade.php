<!DOCTYPE html>
<html>
<head>
<title>Create Post</title>
</head>
<body>
<form method="POST" action="{{route('add-post')}}">
@csrf
<input type="text" name="id" placeholder="id"/>
<input type="text" name="title" placeholder="title"/>
<input type="text" name="body" placeholder="body"/>
<button>Create</button>
</form>
</body>
</html>
