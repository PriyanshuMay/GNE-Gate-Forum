<?php  session_start(); ?>
<?php 
  include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,gne,gndec">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Question</title>
<link href="forum.css" rel="stylesheet" type="text/css">
<style>

.abt { 
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 850px;
    height: 525px;
    position: absolute;
    bottom: initial;
    margin: auto;
    overflow-y: hidden;
    top: 10%;
}
</style>
</head>
<body background="img/back.jpg">
  <?php
  echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:20%;\">
      <img class=\"img-circle\" style=\"position: absolute; top:2%;left:8%;\" src=\"img/IIT_B.png\"  width=\"170px\" height=\"130px\" />
      </center>
      <img class=\"img-circle\" style=\"position: absolute; top:3%;left:40%;\" src=\"img/IITD.png\"  width=\"170px\" height=\"130px\" />
      </center>
      <img class=\"img-circle\" style=\"position: absolute; top:3%;right:8%;\" src=\"img/IITM.png\"  width=\"160px\" height=\"130px\" />
      </center>
      <h1 style=\"position:absolute;top:26%; color:#333; left:9%;font-family:courier;\" class=\"heading\"><center>GRADUATE APTITUDE TEST IN ENGINEERING</center></h1>
      <h style=\"position:absolute;top:38%; left: 3%;right: 3%;\" class=\"sub\">GATE is a computer-based exam conducted at the national level with an aim to examine the understanding of various Engineering and Science UG subjects.GATE exam consists of 65 MCQs and numerical question over a 3 hour duration.GATE 2020 is being conducted by IIT-D in Febuary.GATE score is valid for 3 years and enables students to gain admission to various PG programs such as ME,BE and PhD in IITs,IISc and several other prestigious universities.Top rank holders also get direct interview calls for prestigious government jobs in PSUs</h>
      <img class=\"img-circle\" style=\"position: absolute; bottom:2%;left:5%;\" src=\"img/PSU.png\"  width=\"750px\" height=\"220px\" />
    </div>";
?>
</body>
</html>