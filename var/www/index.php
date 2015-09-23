<html>
<head>
<title>WallHaven Ripper</title>
</head>
<body>
Please enter your query and your email below. We will email you a download link when your download is ready. <br/>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>"> 

Query: <input type="text" name="query">  <br/>
Email: <input type="text" name="email">  <br/>

<input type="submit" value="Submit"> </form> 

</body>
</html>
<?php
if( isset($_POST['query']) && isset($_POST['email']) ) {
$query = escapeshellarg($_POST['query']);
$email = escapeshellarg($_POST['email']);
shell_exec("wallprocess " . $email . " " . $query . " > /dev/null & ");
echo "Thank you.. we will email you when your request is complete..";
} else { echo "Please enter a query and your email."; } 
?>
