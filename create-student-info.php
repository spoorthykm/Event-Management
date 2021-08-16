<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
    header( "Location: thanks.php" );
}
?>

<div class="container"> 
    <div class="row content">
        
        <h1>Book Your Event</h1>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Address where u want the event:</label>
                <input type="text" class="form-control" name="email_address" id="email_address" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="number" class="form-control" name="contact" id="contact" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="gender">Select ur Event:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Birthdayparty" >Birthday party</option>
                    <option value="Marrage" >Marrage</option>
                    <option value="namingcermony" >Naming cermony</option>
                    <option value="engagement" >Engagment</option>

                </select>
            </div> 
            <div class="form-group">
                <label for="country">Date of Event:</label>
                <input type="text" name="country" id="country" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit"/>
        </form> 

    </div>
</div>

<hr/>
<?php
include 'footer.php';
?>

