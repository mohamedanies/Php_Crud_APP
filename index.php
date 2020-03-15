<?php 
   include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <!-- <link type="text/css" rel="stylesheet" media="screen" href="./assets/css/styles.css"/> -->
    <title>Crud App</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">CRUD APP</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </nav>

    <!-- container -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mt-3 text-primary">Test Crud Application With Php And Mysqli (S.ENG:Mohamed Anis)</h2>
                <hr />
                <?php if(isset($_SESSION['response'])){ ?>
                <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['response']; ?></b>
               </div>
                <?php } unset($_SESSION['response']); ?>
            </div>
        </div>
        <!-- Creating Form for user input details & informations to add to DB -->
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">Add Record</h3>
                <form action="action.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $id; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="<?= $name; ?>" placeholder="Enter Name Here" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email"  value="<?= $email; ?>" placeholder="Enter Email Here" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone"  value="<?= $phone; ?>" placeholder="Enter Your Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="oldimg" value="<?= $photo; ?>">
                        <input type="file" class="custom-file" name="image">
                        <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
                    </div>
                    <div class="form-group">
                        <?php if($update == true){ ?>
                            <input type="submit" class="btn btn-success btn-block" name="update" value="Update Record">
                            <?php } else {?>
                                         <input type="submit" class="btn btn-primary btn-block" name="add" value="Add Record">
                            <?php } ?>
                    </div>
                </form>
            </div>
            <!-- Showing data from DB in a table -->
            <div class="col-md-8">
                <?php 
                     $query= " SELECT * FROM crud";
                     $stmt=$conn->prepare($query);
                     $stmt->execute();
                     $result=$stmt->get_result();
                
                ?>
                <h3 class="text-center text-danger">Database Records</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                             while($row=$result->fetch_assoc()){
                        
                        ?>
                        <tr>
                            <td ><?= $row['id']; ?> </td>
                            <td><img src="<?= $row['photo']; ?> " alt="" width="25"></td>
                            <td><?= $row['name']; ?> </td>
                            <td><?= $row['email']; ?> </td>
                            <td><?= $row['phone']; ?> </td>
                            <td>
                                <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a> |
                                <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick=" return confirm('Do you really want to delete this record?')">Delete</a> |
                                <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
                            </td>
                        </tr>
                             <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./assets/js/jquery-3.3.1.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
</body>

</html>