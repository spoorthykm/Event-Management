<?php
include 'header.php';
$student_list = $student_obj->student_list();
?>

<div class="container " > 
    <div class="row content">
        
        <h1>Check Your Status</h1>
        <br>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Event Address</th>
                    <th>Contact</th>
                    <th>Event Name</th>
                    <th>Date Of Event</th>
                    <th>Datebooked</th>
                   
                </tr>
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["student_name"] ?></td>
                <td><?php echo $row["email_address"] ?></td>
                <td><?php echo $row["contact"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["country"] ?></td>
                <td><?php echo $row["datetime"] ?></td>
               
            </tr>
    <?php
    }
}
?>