<?php
//Associative Array Database connection.
$db=array(
'hostname'=>'localhost',
'username'=>'root',
'password'=>'',
'database'=>'internship',
);

$dbSucces=false;
$databaseConnected = mysql_connect($db['hostname'],$db['username'],$db['password']);
if($databaseConnected)
{
	echo'<h1>Database Connected</h1>';
	$databaseSelected=mysql_select_db($db['database'],$databaseConnected);
	if($databaseSelected)
	{
		$dbSucces=True;
	}
}
if($dbSucces)
{
	$first=$_POST['FNAME'];
	
	
	$insertdata_SQL = "INSERT INTO subscribers (phonenumber)
						VALUES ('".$first."')";
						if(empty($first))
						{
							echo'Cannot add Empty Box.';
						}
						else
						{
							if (mysql_query($insertdata_SQL)) 
							{
							echo "New record added successfully.";
							} 
							else 
							{
							   echo"New record adding Failed.";
							}
						}
	
	
}

echo"<a href='HomePage.php'>Go Back</a> ";
?>