
<?php 

//connecting to db
$dsn = 'mysql:host=localhost;dbname=db_todolist';
$username = 'gaurav';
$password = 'insertpassword';

$db=new PDO($dsn,$username,$password);

// get the data from the form
$task = $_POST["task"];
$member=$_POST["member"];


// calculate the discount
$query=" INSERT INTO list (task,member) values('$task','$member')";
$insert_count = $db->exec($query);
 
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<html>
<head> 
<title>Product Discount Calculator</title> 
</head> 
<body>

<!--To include the file again-->
<?php include 'index.html';?>

<!--To generate alert to user-->
<script>
alert("Hello World");
</script>

</body> 
</html>
