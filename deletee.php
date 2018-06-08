<?php
$uid=$_POST['num'];
if($uid!=0){
$con=@mysql_connect("localhost","root","deepak") or die(mysql_error());
$db=@mysql_select_db("ang",$con)or die(mysql_error());
$str="DELETE FROM children WHERE id=$uid";
$res=@mysql_query($str)or die(mysql_error());
if($res>0)
{
 $flag=0;
echo'<br><br><b>Customer Deleted !!<br>';
}
$flag=1;
}

?>
<html>
<body>
    
    <br>
<a href="viewchild.php"><b>Click here to return </b></a>
    </body>

</html>