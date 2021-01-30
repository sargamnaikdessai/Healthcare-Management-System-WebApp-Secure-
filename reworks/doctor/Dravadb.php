<?php
  $connect=mysqli_connect("localhost", "root", "", "spec_db");
  if(isset($_POST ["query"])){
    $output = '';
    $query = "SELECT * FROM spec_table WHERE specialization LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($connect,$query);
    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_array($result)) {
        $output .= '<li>'.$row["specialization"].'</li>';
      }
    }
    else{
      $output .= '<li>Specialization Not Found!</li>';  
    }
    $output .= '</ul>';
    echo $output;
  }
?>