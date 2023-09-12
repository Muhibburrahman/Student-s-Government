<?php  
define('HOST', 'localhost');  
define('USER', 'root');  
define('PASS', '');  
define('DB', 'myproject_aa');  
class DB  
  
{  
    function __construct() {  
        $con = mysql_connect(HOST, USER, PASS) or die('Connection Error! '.mysql_error());  
        mysql_select_db(DB, $con) or die('DB Connection Error: ->'.mysql_error());  
    }  
} 


$con=mysqli_connect('localhost','root','','myproject_aa');
$conn = new PDO('mysql:host=localhost;dbname=myproject_aa', 'root', '');

date_default_timezone_set('Asia/Kolkata');
$today_date=date('Y-m-d');
$today_time=date('h:i:s A');
$url = 'http://localhost/student/public/modal/';
?>