<html>
<head>
<link rel="stylesheet" type="text/css" href="table/tablecss.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a class="head" href="home.html">HOME</a>
<section>
<h1>Childrens Database</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="tbl-header">ID</th>
          <th class="tbl-header">Name</th>
            <th class="tbl-header">DOB</th>
            <th class="tbl-header">Weight</th>
            <th class="tbl-header">Entered Date</th>
            <th class="tbl-header">Time</th>
            <th class="tbl-header">Children type</th>
            <th class="tbl-header">Health</th>
            <th class="tbl-header">Expens</th>
            <th class="tbl-header">Action</th>
            
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'deepak';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * from children';
$but='<form  method="get" action="delete.php" name="viewcustomer">
     <div >
  <input style="width:auto;" name="deletecustomer" value="delete" type="submit" ></div></form>';
mysql_select_db('ang');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    
    
    echo "<tr>";
    echo "<td>".$row['id']."</td>"  ;
   
    
    
    echo "<td>".$row['name']."</td>"  ;
   
    
    
    echo "<td>".$row['dob']."</td>"  ;
   
    
     
    echo "<td>".$row['weight']."</td>"  ;
   
    
    
    echo "<td>".$row['edate']."</td>"  ;
   
    
    
    echo "<td>".$row['itime']."</td>"  ;
    
    
     
    echo "<td>".$row['childtype']."</td>"  ;
    
    echo "<td>".$row['health']."</td>"  ;
    
    echo "<td>".$row['expens']."</td>"  ;
    
    echo "<td>".$but."</td>"  ;
    echo "</tr>";
         
} 

mysql_close($conn);
?>
  </tbody>
    </table>
  </div>
</section>


</body>
</html>