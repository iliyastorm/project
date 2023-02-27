<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> session </title>
</head>
<br>
<body>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['n99'];
    $_SESSION['login'] = $name;
    $surname = $_POST['n98'];
    $_SESSION['login2'] = $surname;


    if (isset($_FILES['file'])) {
        $nn = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        if (move_uploaded_file($tmp, "pictures/$nn")) {
            $_SESSION['file'] = $nn;
        }
    }
    header("Location: /profile.php");
}

?>

<form method="post" enctype="multipart/form-data">
    <label> نام </label> <br>
    <input type="text" name="n99"/> <br>
    <label> نام خانوادگی </label> <br>
    <input type="text" name="n98"/> <br>
    <input type="file" name="file"/>
    <input type="submit" name="submit" value="upload"/>

</form>
</body>
</html>
