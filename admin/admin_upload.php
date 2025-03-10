<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "photography");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $_SESSION['status'] = "File is not an image.";
        $_SESSION['status_code'] = "error";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $_SESSION['status'] = "Sorry, your file is too large.";
        $_SESSION['status_code'] = "error";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $_SESSION['status_code'] = "error";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['status'] = "Sorry, your file was not uploaded.";
        $_SESSION['status_code'] = "error";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $category = $_POST['category'];
            $imagePath = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
            $sql = "INSERT INTO images (category, path) VALUES ('$category', '$imagePath')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['status'] = "IMAGE INSERTED SUCCESSFULLY";
                $_SESSION['status_code'] = "success";
                header('Location: admin_upload.php');
                exit();
            } else {
                $_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;
                $_SESSION['status_code'] = "error";
            }
        } else {
            $_SESSION['status'] = "Sorry, there was an error uploading your file.";
            $_SESSION['status_code'] = "error";
        }
    }
}

// Handle delete request
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "SELECT path FROM images WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        unlink('../' . $row['path']); // Delete the file from server
        $sql = "DELETE FROM images WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['status'] = "IMAGE DELETED SUCCESSFULLY";
            $_SESSION['status_code'] = "success";
            header('Location: admin_upload.php');
            exit();
        } else {
            $_SESSION['status'] = "Error deleting record: " . $conn->error;
            $_SESSION['status_code'] = "error";
        }
    }
}

// Handle update request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $sql = "UPDATE images SET category='$category' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "CATEGORY UPDATED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";
        header('Location: admin_upload.php');
        exit();
    } else {
        $_SESSION['status'] = "Error updating record: " . $conn->error;
        $_SESSION['status_code'] = "error";
    }
}

// Handle update request for category and image
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_image'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $_SESSION['status'] = "File is not an image.";
        $_SESSION['status_code'] = "error";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $_SESSION['status'] = "Sorry, your file is too large.";
        $_SESSION['status_code'] = "error";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $_SESSION['status'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $_SESSION['status_code'] = "error";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['status'] = "Sorry, your file was not uploaded.";
        $_SESSION['status_code'] = "error";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Delete the old image file
            $sql = "SELECT path FROM images WHERE id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                unlink('../' . $row['path']); // Delete the old file from server
            }

            // Update the image and category
            $imagePath = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
            $sql = "UPDATE images SET category='$category', path='$imagePath' WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['status'] = "IMAGE UPDATED SUCCESSFULLY";
                $_SESSION['status_code'] = "success";
                header('Location: admin_upload.php');
                exit();
            } else {
                $_SESSION['status'] = "Error updating record: " . $conn->error;
                $_SESSION['status_code'] = "error";
            }
        } else {
            $_SESSION['status'] = "Sorry, there was an error uploading your file.";
            $_SESSION['status_code'] = "error";
        }
    }
}

// Fetch all images
$sql = "SELECT * FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upload</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="card">
        <div class="card-header">
            <h4>
                Upload New Image
            </h4>
        </div>
        <div class="card-body">
            <form action="admin_upload.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                </div>
                <div class="mb-3">
                    <select name="category" id="category">
                        <option value="BabyPhotoshoot">Baby Photoshoot</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Festivals">Festivals</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Model">Model</option>
                    </select>
                </div><br><br>
                <div class="mb-3">
                    <label for="fileToUpload" class="form-label">Select image to upload:</label>
                </div>
                <div class="mb-3">
                    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary">
                </div><br><br>
                <div class="mb-3">
                    <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>
                Manage Uploaded Images
            </h4>
        </div>
        <div class="card-body">
            <?php if ($result->num_rows > 0): ?>
                <table class="table table-primary table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><img src="../<?php echo $row['path']; ?>" alt="" width="100"></td>
                                <td>
                                    <a href="admin_upload.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    <form action="admin_upload.php" method="post" style="display:inline-block;">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <select name="category">
                                            <option value="BabyPhotoshoot" <?php if($row['category'] == 'BabyPhotoshoot') echo 'selected'; ?>>Baby Photoshoot</option>
                                            <option value="Birthday" <?php if($row['category'] == 'Birthday') echo 'selected'; ?>>Birthday</option>
                                            <option value="Festivals" <?php if($row['category'] == 'Festivals') echo 'selected'; ?>>Festivals</option>
                                            <option value="Wedding" <?php if($row['category'] == 'Wedding') echo 'selected'; ?>>Wedding</option>
                                            <option value="Model" <?php if($row['category'] == 'Model') echo 'selected'; ?>>Model</option>
                                        </select>
                                        <button type="submit" name="update" class="btn btn-primary">Update Category</button>
                                    </form>
                                    <form action="admin_upload.php" method="post" enctype="multipart/form-data" style="display:inline-block;">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="file" name="fileToUpload" class="btn btn-primary">
                                        <button type="submit" name="update_image" class="btn btn-primary">Update Image</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No images found.</p>
            <?php endif; ?>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>

<?php
$conn->close();
?>
