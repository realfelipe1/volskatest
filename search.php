<?php 

include("db.php");


//if($connection) {
//
//echo "Yes it is";
//
//}

$search = $_POST['search'];


if(!empty($search)) {

$query = "SELECT * FROM cars WHERE car LIKE '$search%' ";
$search_query = mysqli_query($connection,$query);
$count = mysqli_num_rows($search_query);    

    
   if(!$search_query) {
   
   die('QUERY FAILED' . mysqli_error($connection));
   
   
   }
    
    
    if($count <= 0) {
    
     echo "Sorry we don't have that car available, please visit the dealership. We might have it there or else contact us.";
   
    
    } else {
    
    
    
     while($row = mysqli_fetch_array($search_query)) {
    
        $brand = $row['car'];
        
        ?>
        
        <ul class='list-unstyled'>
            
        <?php
            
            echo "<li>{$brand} in stock</li>";
            
            
            
            
          ?>  
        </ul>
        
        
        
    
    
    
  <?php  }
    
    
    
    
    
    }
    
   
    







}
















?>