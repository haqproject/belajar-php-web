<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $file_name = $_FILES["upload_file"]["name"];
    $file_size = $_FILES["upload_file"]["size"];
    $file_type = $_FILES["upload_file"]["type"];
    $file_tmp_name = $_FILES["upload_file"]["tmp_name"];
    $file_error = $_FILES["upload_file"]["error"];

    //memindahkan file dari direktori temporari ke folder file 
    move_uploaded_file($file_tmp_name, __DIR__ . "/files/" . $file_name);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ ?>
    <h1>Upload File Info</h1>
    <table border="1px">
        <tr>
            <td>File Name</td>
            <td><?= $file_name ?></td>
        </tr>
        <tr>
            <td>File Type</td>
            <td><?=$file_type ?></td>
        </tr>
        <tr>
            <td>File Size</td>
            <td><?=$file_size ?></td>
        </tr>
        <tr>
            <td>File Temp Name</td>
            <td><?=$file_tmp_name ?></td>
        </tr>
        <tr>
            <td>File Error</td>
            <td><?= $file_error ?></td>
        </tr>
    </table>
<?php } ?>
    <h1>Form Upload File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">
            File: 
            <input type="file" name="upload_file" id="">
        </label>
        <input type="submit" value="Upload">
    </form>

</body>
</html>