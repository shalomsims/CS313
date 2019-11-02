<?php
require 'dbConnect.php';
//include('login.php');
$db = get_db();
if (isset($_SESSION['user_id'])){
    //header("location: login.php");
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="primary.css"> -->
    <title>Reminisce</title>
</head>
<body>
    <h1 class="login">Reminisce: <em>"Remember Well"</em></h1>
    <?php
    if (isset($_SESSION['user_id']))
    {
        header("location: profile.php");
    }
    else
    {
        header("location: login.php");
    }
        ?>
<?php
?>
</body>
</html>

<!--
\i ../db/create.sql
 echo htmlspecialchars($_SERVER['PHP_SELF']);
-->