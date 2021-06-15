<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<style>


.card{
    float:left;
    margin-top: 100px;
    border-spacing: 15px;
    
 }

.box{
    vertical-align: top;
    height:200px;
    width:250px;
    padding: 5px;
    font-size:20px;
    text-align:center;
   
}

a:link {
  color: blue;
    
  text-decoration: none;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

a:active {
  color: blue;
 
  text-decoration:none;
}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image
{background-color:rgb(157, 205, 255);
 background-image:url(https://wallpapertag.com/wallpaper/full/b/9/6/350851-download-free-website-background-1920x1080-for-mobile-hd.jpg);
 background-repeat:no-repeat;
 background-position: center;
 background-size:cover;
 filter: blur(2px);
 -webkit-filter: blur(2px);
 height: 100%; 
}
.bg-text
{ 
  top: 40%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 100%;
  
}
.button3 {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.2s;
  cursor: pointer;
}

.button4 {
  background-color: white; 
  color: black; 
  border: 3px solid #000000;
}

.button4:hover {
  background-color: #00BFFF;
  color: white;
}



</style>
<?php
include "connection.php";
?>
<body>
<div class="bg-image " ></div>
<div class="bg-text" >
	
<div style="color:white; font-size:350%; text-align:left">
<center><p style=" padding:25px;">
Vivekanad Education Society's Institute of Technology</p></center>
</div>
<marquee style=" color:yellow; font-size:200%">Welcome  To VESIT  Attendance Manager</marquee>

<center>
        <table>
            <tr class="card">
                <td class="button3 button4" style="margin-right:50px;">
                    <a href="admin_login.php"><img src="https://th.bing.com/th/id/OIP.XKdZgJT9MaVBqYDg-5JlvgAAAA?pid=ImgDet&rs=1"; height="200px" width="200px">
                    <p style="font-size:200%;">Admin Login</p></a> 
                </td>
                <td class="button3 button4" style="margin-right:50px;">
                    <a href="teacher_login.php"><img src="https://th.bing.com/th/id/OIP.cZLK93UktXieAm98mZ7-RgHaFe?pid=ImgDet&rs=1"; height="200px" width="200px">
                    <p style="font-size:200%;">Teacher Login</p></a>
                </td>
               
            </tr>
        </table>
</center>
</body>


</html>
