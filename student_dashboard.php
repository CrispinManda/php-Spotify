<?php
include 'header.php';
include 'navbar.php';
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login"); // Redirect to login if not logged in
    exit();
}

?>




<div class="container">
    <div class="row">
        <div class="col">
            <p>welcome <?php echo $_SESSION['name'] . ' ' . $_SESSION['role'] ; ?></p>
        </div>
        <div class="col"> </div>
        <div class="col"><button class= "btn btn-primary" onclick="location.href='logout.php'">Logout</button></div>
    </div>
</div>
 

<?php include 'footer.php';?>


