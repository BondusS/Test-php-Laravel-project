<!DOCTYPE html>
<html>
<title>
@yield('title_content')
</title>
<style type = "text/css">
header{
	background-color: red;
	color: white;
}
body{
	background-color: black;
	text-align: center;
}
h1{
	color: red;
}
h2{
	color: yellow;
}
h3{
	color: yellow;
}
hid{
	display: none;
}
a{
    font-size: 150%;
    color: yellow;
}
er{
	background-color: red;
	color: white;
}
footer{
	text-align: left;
}
</style>
<header>	
</header>
<body>
@yield('body_content')
</body>
<footer>
@yield('footer_content')
</footer>
</html>