<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<style>
body {
    font-family: 'Arsenal', sans-serif; 
	background:#fff; 
	background: url(Login/images/login.jpg)repeat 0px 0px;  
	background-attachment: fixed;
}
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: block;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
.aside {
    background-color: #E36846;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: #0099cc;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}
/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;background: }
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

body{
    background: url(images/TrangDau.jpg);
    padding: 15px;
}



input[type=submit]{
  margin-left: 0.5em;
  height: 2.5em;
  padding: 0.2em 1em 0.2em 2.25em;
  font-size: 1em;
  font-weight: bold;
  font-family: "Open Sans";
  text-transform: uppercase;
  color: #696666;
  background: url(https://i.imgur.com/Th606mh.png) no-repeat scroll 0.75em 0.07em transparent;
  background-size: 54px 204px;
  border-radius: 2em;
  border: 0.15em solid #F9C23C;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}
input[type="submit"]:hover {
    color: #fff;
    background-color: #EAA502;
    border-color: #EAA502;
    background-position: 0.75em bottom;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
input[type="submit"]:focus {
    background-position: 2em -4em;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
/* Webfonts */

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://themes.googleusercontent.com/static/fonts/opensans/v8/k3k702ZOKiLJc3WVjuplzHhCUOGz7vYGh680lGh-uXM.woff) format('woff');
}
		
@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>TrangDau</title>
</head>

<body style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
<div class="col-12" align="center">
  <h1 style="color: aliceblue">CHÀO MÙNG BẠN ĐẾN VỚI Á ÂU</h1>
</div>
<div class="col-6">
  <div class="aside">
    <h2>BẠN LÀ KHÁCH VÃNG LAI</h2>
		<a href="vanglai.php" style="background-color: #E49A62" class="btn btn-info" role="button">Vào trang chủ<i style="padding-left: 10px" class="glyphicon glyphicon-user"></i></a>	
  </div>
</div>
<div class="col-6">
  <div class="aside">
    <h2>BẠN LÀ QUẢN TRỊ VIÊN</h2>
  <a href="web/login1.php"
			 style="background-color: #E49A62" class="btn btn-info" role="button">Vào trang chủ<i style="padding-left: 10px" class="glyphicon glyphicon-tasks"></i></a></div>
</div>

</body>
</html>