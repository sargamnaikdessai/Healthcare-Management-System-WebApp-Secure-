<?php
  $connect=mysqli_connect("localhost", "root", "", "spec_db");
  if(isset($_POST ["query"])){
    $output = '';
    $query = "SELECT * FROM hosp_list WHERE hname LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($connect,$query);
    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_array($result)) {
        $output .= '<li>'.$row["hname"].'</li>';
      }
    }
    else{
      $output .= '<li>Invalid name!</li>';  
    }
    $output .= '</ul>';
    echo $output;
  }
?>