<?php
include 'header.php';
if (isset($_GET['id'])) {
    $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">View  details </a> 
        <h3>Update Details here  </h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($student_info['student_id'])) {
            echo $student_info['student_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="student_name" value="<?php if (isset($student_info['student_name'])) {
                   echo $student_info['student_name'];
        } ?>" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Email address:</label>
                <input type="email" class="form-control" value="<?php if (isset($student_info['email_address'])) {
            echo $student_info['email_address'];
        } ?>" name="email_address" id="email_address" required maxlength="50">
            </div>
            
             <div class="form-group">
                <label for="student_name">Address:</label>
                <input type="text" name="address" value="<?php if (isset($student_info['address'])) {
                   echo $student_info['address'];
        } ?>" id="address" class="form-control" required maxlength="50">
            </div>
            
            
             <div class="form-group">
                <label for="student_name">House Number:</label>
                <input type="text" name="house" value="<?php if (isset($student_info['house'])) {
                   echo $student_info['house'];
        } ?>" id="house" class="form-control" required maxlength="50">
            </div>
            
            
            
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" value="<?php if (isset($student_info['contact'])) {
            echo $student_info['contact'];
        } ?>" name="contact" id="contact"  maxlength="50">
            </div>
         
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" value="<?php if (isset($student_info['country'])) {
            echo $student_info['country'];
        } ?>" id="country" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="update_student" value="Update"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>
