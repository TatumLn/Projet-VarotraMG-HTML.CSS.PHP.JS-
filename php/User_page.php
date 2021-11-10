<?php

session_start();

if (!isset($_SESSION['utilisateur'])) {
    $_SESSION['msg'] = "You must login first";
    header("location: Login & Register.php");

    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['utilisateur']);
      header('location: ../index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>E-VarotraMG | Ecommerce Website</title>
        <link rel="stylesheet" href="../css/style00.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @font-face {
                font-family: Capriola-Regular;
                src: url("");
                }
            @font-face {
                font-family: OpenSansCondensed-Light;
                src: url(".");
                }
            @font-face {
                font-family: ZenTokyoZoo-Regular;
                src: url(".");
                }
        </style>
    </head>

    <body>
   <div class="header">
    <h2>Navigation>Page</h2>
   </div>
    
     <div class="content">
       <?php if (isset($_SESSION['succcess'])) :?> 
       	  
       	  <div class="error success">
          <h3>
     <?php  
    echo $_SESSION['success'];
    unset($_SESSION['success']);

      ?>
          </h3>
       	  </div>
       <?php endif ?>

       <?php if (isset($_SESSION['utilisateur'])) :?>
        <p> bienvenue! <strong><?php echo $_SESSION['utilisateur'];?></strong></p>
        <p><a href="../index.php" style="color:red">Logout</a></p>

    <?php endif ?>
     </div>
  </body>
</html>
