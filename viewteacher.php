<html>
<head>
<link rel="stylesheet" type="text/css" href="table/tablecss.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a class="head" href="home.html">HOME</a>
<section>
<h1>Teachers Database</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="tbl-header">ID</th>
          <th class="tbl-header">Name</th>
            <th class="tbl-header">DOB</th>
            <th class="tbl-header">Address</th>
            <th class="tbl-header">Contact</th>
            
            <th class="tbl-header">Post</th>
            <th class="tbl-header">Date of join</th>
            <th class="tbl-header">Date of Retirment</th>
            <th class="tbl-header">Payment</th>
            <th class="tbl-header">Bank</th>
            <th class="tbl-header">A/C</th>
            <th class="tbl-header">IFSC</th>
            <th class="tbl-header">Adhar no</th>
            
            
          
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
$sql = 'SELECT * from customer';

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
   
    
     
    echo "<td>".$row['address']."</td>"  ;
   
    
    
    echo "<td>".$row['contact']."</td>"  ;
   
    
    
    echo "<td>".$row['email']."</td>"  ;
    
    
     
    echo "<td>".$row['doj']."</td>"  ;
    
    echo "<td>".$row['dor']."</td>"  ;
    
    echo "<td>".$row['payment']."</td>"  ;
    
    echo "<td>".$row['branch']."</td>"  ;
    
    echo "<td>".$row['bac']."</td>"  ;
    
    echo "<td>".$row['bifc']."</td>"  ;
    
    
    
    echo "<td>".$row['adhar']."</td>"  ;
    
   
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