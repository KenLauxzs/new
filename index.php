<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<style type="text/css">
	body, html{ 
		height: 100%;
		margin: 0;
	}
    .blur{
    	background-image: url(BB.jpg);
    	filter: blur(8px);
    	-webkit-filter: blur(8px);
    	height: 100%;
    	background-size: cover;
    	background-repeat: no-repeat;
    }
	form{
  width: 20%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 2;
  padding: 20px;
  text-align: center;
  background-color: rgba(0,0,0,0.4);
}
form h2{
	color: white;
	font-family: cursive;
}
input[type="text"]{
	width: 80%;
}
input[type="submit"]{
	font-family: arial;
	}
</style>
<body>
	<div class="blur"></div>

<form action="Portfolio.html" method="GET">
	<h2>Name</h2>
	<input type="text" name="name" required><br><br>
	<input type="submit">
</form>

</body>
</html>
