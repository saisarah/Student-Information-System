<?php
include("dbConn.php");
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * FROM tbl_professor";
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
 echo '<table border="1">
        <thead class="text-warning">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Department</th>
            <th>Username</th>
            <th>Password</th>
            <th>Account Status</th>
            <th>Action</th>

        </tr>
     </thead>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
        


  echo "<tr>

          <td>".$sn."</td>
          <td>".$data['lastname'] . " ".$data['firstname']. "</td>
          <td>".$data['department']."</td>
          <td>".$data['username']."</td>
          <td>".$data['password']."</td>
          <td>".$data['status']."</td>
          
          <td>
          <a class='btn btn-success' data-toggle='modal' data-target='#staticBackdrop' id='update_modal<?php echo ".$data['id']."?>'><i class='fas fa-edit'></i></a>
          <a class='btn btn-danger' href ='deleteStud.php?deleteStudents&id='".$data["id"]."><i class='far fa-trash-alt'></i></a>


          </td>
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