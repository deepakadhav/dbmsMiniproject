<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
<?php
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['date'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$posst=$_POST['posst'];
$doj=$_POST['doj'];
$dor=$_POST['dor'];
$payment=$_POST['payment'];
$bac=$_POST['bac'];
$bifc=$_POST['bifc'];
$branch=$_POST['branch'];
$adhar=$_POST['adhar'];

$con=@mysql_connect("localhost","root","deepak") or die(mysql_error());
$db=@mysql_select_db("ang",$con)or die(mysql_error());
$str="insert into customer values('$id','$name','$dob','$address','$contact','$posst','$doj','$dor','$payment','$bac','$bifc','$branch','$adhar','$email')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>User added !!<br>';
}

?>

<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
