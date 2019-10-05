<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Nathan Birch">
        <title>Order Confirmation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="birch-week3.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="birch-week3.js"></script>
        <script>
            // prevents refresh from submitting form and clears out unneeded variables
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
    <body>
        <?php include '../shared/header.php';?><br><br>
        <?php 
            session_start();
            // input processing
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $address = htmlspecialchars($_POST["address"]);
            $city = htmlspecialchars($_POST["city"]);
            $state = htmlspecialchars($_POST["state"]);
            $zip = htmlspecialchars($_POST["zip"]);

            //set up reset
            if(isset($_POST['reset'])){
                for($i = 0; $i < count($_SESSION["items"])-1; $i++) {
                    if($_SESSION["items"][$i]["inCartCount"] > 0) {
                        $_SESSION["items"][$i]["inCartCount"] = 0;
                    }
                }
                header("Location: /cs313/web/week3/shopping.php");
                exit;
            }
        ?>
        <div class="container">

            <h2>
                Order Confirmation
                <form method="post"><button type="submit" class="btn btn-primary" name="reset" style="float:right">Shop some more</button></form>
            </h2>
            Your receipt has been sent to <?php echo $email; ?>
            <h4>Items Purchased</h4>
            <table class="table table-striped">
                <?php for ($i = 0; $i < count($_SESSION["items"])-1; $i++) { ?>
                    <?php if($_SESSION['items'][$i]['inCartCount'] > 0) : ?>
                        <tr>
                          <td>
                              <img src="<?php echo $_SESSION['items'][$i]['url']; ?>" style="width:50px">
                              <span class="description"><?php echo $_SESSION['items'][$i]['name']; ?></span>
                          </td>
                          <td><span>Quantity: <?php echo $_SESSION['items'][$i]['inCartCount']; ?></span></td>
                        </tr>
                    <?php else : ?>  
                    <?php endif; ?>
                <?php } ?>
            </table>
            <h4>Shipping Information</h4>
            <?php echo $name."<br>".$address."<br>".$city.", ".$state." ".$zip; ?><br>
        </div>
        <?php include '../shared/footer.php';?><br><br>
    </body>
</html>