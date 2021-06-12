<?php

include "database/config.php";

$sql="SELECT * FROM tbl_user";
$result=mysqli_query($conn,$sql) or die("Query Failed!");
$output="";

if(mysqli_num_rows($result)>0)
{
    $output='
    <table border="1" width="100%" cellspacing="1" cellpadding="1">
         <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Skill</th>
             <th>Action</th>
         </tr>';
         while ($row=mysqli_fetch_assoc($result))
         {
          $output.="
          <tr>
              <td>{$row["id"]}</td>
              <td>{$row["name"]}</td>
              <td>{$row["email"]}</td>
              <td>{$row["skill"]}</td>
              <td></td>
          </tr>
          ";
         }
         $output.='</table>';
    echo $output;     
}else{
    echo "<p style='color:red;'>No Data Found</p>";
}









?>