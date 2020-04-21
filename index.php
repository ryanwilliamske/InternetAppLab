<?php
include_once "DBconnect.php";
include_once "User.php";

$con = new DBconnect();
if(isset($_POST['btn_save'])){
    $first_n = $_POST['first_name'];
    $last_n = $_POST['last_name'];
    $city = $_POST['user_city'];

    $user = new User($first_n,$last_n,$city);
    $res = $user->save();
    if($res){
        echo "Success";
    }else{
        echo "Error";
    }
    $con->closeDB();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IAPLab</title>
</head>
<body>
<form method="post">
    <table class="table">
        <tr>
            <td><input type="text" name="first_name" required placeholder="First name"></td>
        </tr>
        <tr>
            <td><input type="text" name="last_name" placeholder="Last Name"> </td>
        </tr>
        <tr>
            <td><input type="text" name="user_city" placeholder="City"> </td>
        </tr>
        <tr>
            <td><button class="button" type="submit" name="btn_save"><strong>Save</strong></button></td>
        </tr>
    </table>
</form>
<form method="post" class="form">
    <button type="submit" class="btn btn-dark" name="read_all">Read All</button>

<table class="table">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['read_all'])){
        $conn = new DBconnect();
        $stmt = "SELECT * FROM `users`";
        $res = mysqli_query($conn->conn,$stmt);
        foreach ($res as $u){
            echo "<tr class='row'>";
            echo "<td>";
            echo $u['first_name'];
            echo "</td>";
            echo "<td>";
            echo $u['last_name'];
            echo "</td>";

            echo "</tr>";
        }
        $conn->closeDB();
    }
    ?>
    </tbody>

</table>
</form>
</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
