<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>

<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($dbconnection, $query);
    if(!$result){
        die("Query failed: " . mysqli_error($dbconnection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<div class="container m-3">
    <form action="edit_employee.php?id=<?php echo $row['id']; ?>" method="post">
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $row['first_name']; ?>" >
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $row['last_name']; ?>">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" name="age" class="form-control" id="age" value="<?php echo $row['age']; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="update_employee_record">UPDATE</button>
    </form>
</div>

<?php include('footer.php'); ?>