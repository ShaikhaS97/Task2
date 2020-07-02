<?php
echo "<style> body { background:linear-gradient(to right,#FFB833, #FFD485); } </style>";

$con= new mysqli("localhost","root","","db");
if($con->connect_error){
  die("Coneection failed:".$con->connect_error);
}


if (isset($_POST['Forward'])) {
$Forward =$_POST['Forward'];
$sql="INSERT INTO cont (F) VALUES ('$Forward')"; 
if($con->query($sql)===TRUE){
  echo "<p style='color:green; font-size:50px; text-align:center;'>$Forward</p>";
   header("Refresh: 2;task1.html"); } 
   else{
  echo "ERORR"; }}

else if (isset($_POST['Backward'])) {
$Backward =$_POST['Backward'];	
$sql="INSERT INTO cont (B) VALUES ('$Backward')"; 
if($con->query($sql)===TRUE){
  echo "<p style='color:green; font-size:50px; text-align:center;'>$Backward</p>"; 
   header("Refresh: 2;task1.html");  }
    else{  echo "ERORR"; }}


else if (isset($_POST['Right'])) {
$Right = $_POST['Right'];
$sql="INSERT INTO cont (R) VALUES ('$Right')"; 
if($con->query($sql)===TRUE){
  echo "<p style='color:green; font-size:50px; text-align:center;'>$Right</p>";
   header("Refresh: 2;task1.html"); }
       else{  echo "ERORR"; }}


else if (isset($_POST['Left']))  {
$Left = $_POST['Left'];	
$sql="INSERT INTO cont (L) VALUES ('$Left')";
if($con->query($sql)===TRUE){
  echo "<p style='color:green; font-size:50px; text-align:center;'>$Left</p>";  
   header("Refresh: 2;task1.html"); }    else{  echo "ERORR"; } }


else if (isset($_POST['Stop']))  {
$Stop =$_POST['Stop'];	
$sql="INSERT INTO cont (S) VALUES ('$Stop')"; 
if($con->query($sql)===TRUE){
  echo "<p style='color:green; font-size:50px; text-align:center;'>$Stop</p>"; 
   header("Refresh: 2;task1.html");  }   else{  echo "ERORR"; } }


  ?>