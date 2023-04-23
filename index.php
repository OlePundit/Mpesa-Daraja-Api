<?php

?>
<!doctype html>
<html lang="en">

    <head>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8P5TL50Q5P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8P5TL50Q5P');
</script>

        <meta charset="utf-8" />
        <title>MPESA APP | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="shortcut icon" href="assets/images/favicon.png">

       

        <!-- jvectormap -->
        <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            font-weight:800;
        }
    </style>    

    </head>

    <body data-topbar="colored">
        <form method="post" action="stkpush.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group name">
                        <label>Amount</label>
                        <input type="text" name="amount" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group name">
                        <label>Phone</label>
                        <input type="tel" name="phone" class="form-control">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="send-bn">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </div>
                           

            </div>
        <form>
    <script src="assets/js/bootstrap.min.js"></script>        
    </body>
</html>    