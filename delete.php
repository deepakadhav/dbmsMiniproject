<?php
session_start()
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add New Customer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<body >
<a class="head" href="home.html">HOME</a> 
 <h2 style="padding:100px;text-align:center;color:#fff;">Enter ID of customer which you want to delete</h2>
<?php

   
    $del=' <div class="user"><form class="form"  method="post" action="deletee.php">
        <div class="form__group">
            <input type="text" name="num" placeholder="ID" class="form__input" />
        </div>
        
        
        
        <input class="btn" value="Delete" name="submit" type="submit">
    </form> </div>';
    
    
    

    
    echo $del;

?>



</body></html>
