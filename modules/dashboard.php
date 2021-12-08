<?php
include("dbConn.php");
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT *  FROM tbl_student where DATE(dateInserted)=CURDATE()";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;
        
  }else{
    return $row=[];
  }
}


$fetchData= fetch_data();
show_data($fetchData);


function show_data($fetchData){
 echo '
 <table border="1">
        <thead class="text-warning">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year</th>
        </tr>
     </thead>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
        


  echo "<tr>

          <td>".$sn."</td>
          <td>".$data['lastname'] . " ".$data['firstname']. " ".$data['midname']."</td>
          <td>".$data['course']."</td>
          <td>".$data['year']."</td>
          
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='9'>No Data</td>
       </tr>"; 
}
  echo "</table>";
}



?>