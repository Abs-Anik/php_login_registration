<?php include('header.php'); ?>
    <?php include('dbconn.php'); ?>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
    ?>
    <div class="d-flex justify-content-end mt-2">
      <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crudAppModal" style="margin-right: 20px!important;">Add Employee</a>
      <a href="logout.php" class="btn btn-primary" style="margin-right: 20px!important;">Logout</a>
    </div>
    <div class="container mt-3">
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>SL</td>
            <td>Name</td>
            <td>Age</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM students";
        $result = mysqli_query($dbconnection, $query);
        if(!$result){
            die("Query failed: " . mysqli_error($dbconnection));
        } else {
            while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name'] . " ". $row['last_name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td>
                        <a href="update_employee.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="delete_employee.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

        <?php }
        }
        
        ?>
    </tbody>
    </table>
    </div>

    <div class="container">
    <?php
    if (isset($_GET['message'])) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>" . htmlspecialchars($_GET['message']) . "</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    ?>
    </div>

<!-- Modal -->
<form action="add_employee.php" method="post">
<div class="modal fade" id="crudAppModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD EMPLOYEE</h1>
      </div>
      <div class="modal-body">
        
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="age">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add_employee_record">ADD</button>
      </div>
    </div>
  </div>
</div>
</form
<?php include('footer.php'); ?>
