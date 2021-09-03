﻿<!DOCTYPE html>
<html>
<head>
  <title>~ოზბე~</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="style.css" rel="stylesheet" type="text/css" >

   <link rel = "icon" type = "image/jpg" href = "image/N.jpg">
   <style type="text/css">
   form {
  text-align: center;
}
center{

  color: aqua;
}
.right{
  text-align: right;
}
.left{
  text-align: left;
}
.echo{
    color:white;
}
</style>
<script>

$(document).ready(function(){ 

$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();

}); 

</script>

<style>

img[src*="000webhost"]{

display: none !important;

}

</style>
</head>

<body>
  <div id="first"><p id="cnt"><b>
  
    <div class="row"> 
      <ul class="main-nav">
        <li class="active"> <a href="index.html"> მთავარი </a> </li>
        <li class="active"> <a href="bio.html" > ბიოგრაფია </a> </li>
        <li class="active"> <a href="images.html" > გალერია </a> </li>
        <li class="active"> <a href="video.html" > ვიდეო </a> </li>
        <li class="active"> <a href="contact.php" > კონტაქტი </a> </li>
      </ul>
    </div>
 <br><br><br><br><br>
  </b></p></div>
 <form method="POST" action="" >  
<h2 style="color: aqua;" >თქვენი მეილი:</h2>  
<input type="text" name="mail" required size="40" >   <br><br>  
<h2 style="color: aqua;" >თქვენი შეტყობინება:</h2>  
<textarea rows =7 cols=40 name="comments"></textarea><br><br>  
<input type="submit" name="submit" value="გაგზავნა">  
</form>  
<?php
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

if(isset($_POST['mail'])&&isset($_POST['comments'])){
      $name=$_POST['mail'];
      $comments=$_POST['comments'];
     if (preg_match($regex, $name)){
     
      
$to = "ninoozbetelashvili23@gmail.com";
$subject = "წერილი საიტიდან";
$txt = $comments;
$headers = "From: ".$name."". "\r\n";

mail($to,$subject,$txt,$headers);
echo "<center>წერილი წარმატებით გაიგზავნა</center>";
}
else echo "<center>მეილის ფორმატი არასწორია</center>";
    }
    
?>
<br><br><br><br><hr>
  <div id="fifth"><p id="cnt">
    <marquee><b> საიტი შექმნილია ნინო ოზბეთელაშვილის მიერ</b> </marquee>
  </p></div>
</body>
</html>
