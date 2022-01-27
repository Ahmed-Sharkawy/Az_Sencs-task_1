<!-- Q1 -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];

    if ($age >= 18) {
        echo '<h1  style="text-align: center;"> Successfully Registered</h1>';
    } else {
        echo '<h1 style="text-align: center;"> We\'re sorry you haven\'t signed in because you are under 18 </h1>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(to left, #f38686, #dbb5b5);
        }

        input {
            min-width: 500px;
            height: 35px;
            margin: 20px auto;
            outline: none;
            display: block;
            border: 2px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <?php echo '<h1 style="text-align: center;">' . 'Q1' . '</h1>';?>
        <input type="number" name="age" id="">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<!-- Q2 -->

<?php

$films = ["Fast", "Predestination", "Persuit", "Prestige"];
$keyword = "Prestige";
echo '<h1 style="text-align: center;">' . 'Q2' . '</h1>';

    if (in_array($keyword, $films)) {
    
        echo '<h1>' . "Yes" . '</h1>';
    
    } else {

        echo '<h1>' . "No" . '</h1>';
    
    }

/* ======================================== */

// $x= 0;
// foreach ($films as $i){
//     $x++;
//     if ($i == $keyword) {
//         echo "Yes";
//         break;
//     }

//     if (count($films) == $x) {
//         echo "No";
//     }
// }

?>

<!-- Q3 -->

<?php
$tests = [5, 4, 9, 3, 1, 7, 5, 8, 6];
echo '<h1 style="text-align: center;">' . 'Q3' . '</h1>';
echo '<h1>' . max($tests) . '</h1>';
?>

<!-- Q4 -->

<?php

$films = array("avatar", "Prestige", "avatar", "Prestige");
$films_keyword = "avatar";
$y = 0;
for($i = 0 ; $i < count($films); $i++){
    if ($films[$i] == $films_keyword) {
        $y++;
    }
}
echo '<h1 style="text-align: center;">' . 'Q4' . '</h1>';
echo '<h1>' . $y . '</h1>';

?>