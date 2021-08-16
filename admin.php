<?php
include 'header.php';

?>

<div class="container"> 
    <div class="row content">
       
        <h1>ADMIN LOGIN</h1>
        <hr/>
        <form method="post" action="">
           
            <div class="form-group">
                <label for="email_address">Email address:</label>
                <input type="email" class="form-control" name="email_address" id="email_address" required maxlength="50">
            </div>
           
            <div class="form-group">
                <label for="country">Password:</label>
                <input type="password" name="country" id="country" class="form-control"  maxlength="50">
            </div>
            <a  href="index.php"  class="button button-purple mt-12 pull-right">Submit</a> 
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

