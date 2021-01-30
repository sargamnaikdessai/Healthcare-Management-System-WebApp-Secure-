<?php
  $connect=mysqli_connect("localhost", "root", "", "hms");
  if(isset($_POST ["query"])){
    $output = '';
    $query = "SELECT * FROM hospital WHERE hospital_name LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($connect,$query);
    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_array($result)) {
        $output .= '<li>'.$row["hospital_name"].'</li>';
      }
    }
    else{
      $output .= '<li>Hospital Not Found!</li>';  
    }
    $output .= '</ul>';
    echo $output;
  }
?>