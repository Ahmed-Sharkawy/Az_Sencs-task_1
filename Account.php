<?php
session_start();
include "templates/header.php";

// الجزء الخاص با السيشن هل مسجل ولا لا 

if (isset($_SESSION['username'])) {
    header('location:allproduct.php');
    exit();
}

//  الجزء الحاص ب تسجيل الدخول

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = sha1($_POST['pass']);

    $stmt = " SELECT * FROM user WHERE name = '$user' AND password = '$pass' ";
    $result = $mysqli->query($stmt);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header('location:allproduct.php');
        exit();
    } else {
        $ss = "sd";
    }
}

?>


<form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2 class="text-center">Admin Login </h2>
    <?php if (!empty($ss)) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            الرجاء التاكد من ان <strong> البريد الإلكتروني وكلمة المرور </strong> الذي ادخلتة صحيح
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <input class="form-control" type="text" name="user" placeholder="username" required>
    <input class="form-control" type="password" name="pass" placeholder="password" required>
    <input class="btn btn-primary btn-block" type="submit" value="Login">
</form>

<?php

include "templates/footr.php";

?>