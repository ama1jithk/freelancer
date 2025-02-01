<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "freelancer";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
    
$email = isset($_POST['email']) ? trim($_POST['email']) : null;
$password = isset($_POST['password']) ? trim($_POST['password']) : null;




$sql_query = "select * from user where email='$email' and password='$password'"; 

$result=$conn->query($sql_query);   

                                                      
    if($result->num_rows>0)
			{
             
               
				while ($row=$result->fetch_assoc()) {
                    session_start();
                    $_SESSION['email']=$row['email'];
                    $_SESSION['password']=$row['password'];
                    header("location:index.html");
                    return;
                  
				}
            }

 
 else{

echo "<script type='text/javascript'>
alert('Wrong username and password!');window.location.href='signin.html';
</script>";

 }
 $conn->close();

?>