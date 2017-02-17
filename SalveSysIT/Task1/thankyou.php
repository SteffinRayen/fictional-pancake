<?php
   session_start();
   if (isset($_SESSION['success'])) {
         session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Website Design Questionaire</title>
      <!-- CSS -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/form-elements.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/ico/favicon.ico">
      <script>
         /* Wow you are reading the source!
         **
         ** Since you are really into details, you should know that this page was created as a follow up to thank you 
         ** for filling up the previous form. Really I find that you have achieved something right here... just to 
         ** get to this page :)
         **
         **
         ** If you are interested in recruiting me, be sure to mention this graffiti when you cantact me 
         ** (stefinrayen@gmail.com), that will get you my full attention.
         **
         **
         **     ___     _                 __      __     _                       ___             _  _                  
         **    / __|   | |_     ___      / _|    / _|   (_)    _ _       o O O  | _ \   __ _    | || |   ___    _ _    
         **    \__ \   |  _|   / -_)    |  _|   |  _|   | |   | ' \     o       |   /  / _` |    \_, |  / -_)  | ' \   
         **    |___/   _\__|   \___|   _|_|_   _|_|_   _|_|_  |_||_|   TS__[O]  |_|_\  \__,_|   _|__/   \___|  |_||_|  
         **  _|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""| {======|_|"""""|_|"""""|_| """"|_|"""""|_|"""""| 
         **  "`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-' 
         **
         **
         ** That btw was my name -_-
         */
      </script>
   </head>
   <body>
      <!-- Top content -->
      <div class="top-content">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-sm-offset-2 text" style="background-color: rgba(107,42,108,0.8);">
                  <h1><strong>Thank you</strong> for filling out our form!</h1>
                  <div class="description">
                     <p>
                        We will look over your message and get back to you by tomorrow! But if you think your project needs special and instant attention please feel free to drop a message at stefinrayen@gmail.com.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Javascript -->
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.backstretch.min.js"></script>
      <script src="assets/js/retina-1.1.0.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      <!--[if lt IE 10]>
      <script src="assets/js/placeholder.js"></script>
      <![endif]-->
   </body>
</html>
<?php
   } else {
   
   header("location: index.php");
   
   }
   ?>