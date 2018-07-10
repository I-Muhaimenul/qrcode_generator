<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Generate QR Code</title>

    <style>
        body, html {
            height: 100%;
            width: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg"), repeating-linear-gradient(red, yellow 10%, green 20%);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .main-div {
            background-color: white;
            margin-top: 20px; 
            padding: 20px; 
            box-shadow: 10px 10px 5px #888;
        }
    </style>
  </head>
  <body class="bg">
    <div class="container" id="card">
        <div class="row">
            <div class="col-md-6 offset-md-3 main-div">
                <div class="card-header">   
                    <h1>Generate QR-Code in PHP</h1>

                <div id="qrbox" style="text-align: center;">
                    <img src="qrcode.php?inputText=<?php echo $_GET['inputText'] ?>" alt="<?php echo $_GET['inputText'] ?>">
                </div>
                <hr>
                <a class="btn btn-block btn-success" href="index.php">Generate One More</a>
            </div>
        </div>
    <!-- Content here -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>