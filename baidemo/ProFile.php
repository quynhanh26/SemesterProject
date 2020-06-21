<?php
session_start();
require_once '../BUS/AccountBUS.php';
$IdAccount = $_SESSION["id"];
$ProFile = AccountBUS::ShowProFile($IdAccount);

if (isset($_POST['btnSave'])) {
    $FullName = $_POST['name'];
    $Email = $_POST['email'];
    $Phonenumber = $_POST['phone'];
    $EditProFile = AccountBUS::EditProFile($FullName, $Email, $Phonenumber, $IdAccount);
    header('Refresh: 0');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="Description" content="Enter your description here" />
    <link rel="shortcut icon" type="image/jpg" href="Images/logo.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="Css/ProFile.css">
    <title>Customer Information</title>
</head>

<body>

    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <?php if ($ProFile['Gender'] === 'female') { ?>
                            <img src="Images/avatar-Female.jpg" alt="" />
                        <?php } else { ?>
                            <img src="Images/avatar-Male.jpg" alt="" />
                        <?php } ?>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h3>
                            <?= $ProFile['FullName'] ?>
                        </h3>
                        <p class="proile-rating">ID : <span><?= $ProFile['IdAccount'] ?></span></p>
                        <p class="proile-rating">EMAIL : <span><?= $ProFile['Email'] ?></span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <span class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="button" class="profile-edit-btn" name="btnAddMore" id="myBtn" value="Edit Profile" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>Information</p>
                        <span><?= $ProFile['FullName'] ?></span><br />
                        <span href=""><?= $ProFile['Email'] ?></span>
                        <p>SKILLS</p>
                        <a href="Index.php">Home Page</a><br />
                        <a href="Cart.php">Cart</a><br />
                        <a href="Contact.php">Contact</a><br />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?= $ProFile['IdAccount'] ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Customer Name:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $ProFile['FullName'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $ProFile['Email'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone number:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $ProFile['Phonenumber'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of birth: </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $ProFile['DoB'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- The Modal -->
    <form method="post">
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h2>EDIT PROFILE</h2>
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <tr>
                            <td>Name: </td>
                            <td>
                                <input type="text" name="name" value="<?= $ProFile['FullName'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td>
                                <input type="email" name="email" value="<?= $ProFile['Email'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Phone number: </td>
                            <td>
                                <input type="text" name="phone" value="<?= $ProFile['Phonenumber'] ?>">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="footer">
                    <input type="submit" value="Save" name="btnSave" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
    <script>

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>