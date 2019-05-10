<?php



$conn= mysqli_connect("localhost:3306","root","", "test");


if(isset($_POST["email"])) {
      $query = "SELECT * FROM userinfo WHERE Email='" . $_POST["email"] . "'";
     $result = mysqli_query($conn, $query);
     if(mysqli_num_rows($result) > 0) {
          echo "<span class='status-not-available'> This email address exists. You already has account</span>";
     }else{
          echo "<span class='status-available'> verified.</span>";
     } 
}

