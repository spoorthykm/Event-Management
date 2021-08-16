<?php
include 'header.php';
mysql_connect("localhost","root","","password");
mysql_select_db("crud");


?>
<form action="searchgmail.php" method="post">
    <input type="text" name="search" >
    <input type="submit" value=">>" >

    <?php
if(isset($_POST['search'])){
    $searchq=$_POST['search'];
    $query=mysql_query("SELECT * FROM students WHERE email_address LIKE '%$searchq%'");
    $count=mysql_num_rows($query);
    if($count == 0)
    $output = 'therr no';
    else{
        while($row = mysql_fetch_array($query)){
            $sname=$row['student_name'];
            $sc=$row['country']; 

            $output .= '<div>'.$sname.' '.$sc.'</div>';      }
    }
}

    ?>

    <?php
print("$output");
    ?>