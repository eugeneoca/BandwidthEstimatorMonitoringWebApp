<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PLDT88 | Hackathon</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style type="text/css">
      .num{
        font-size: 30px;
        width: 600px;
        margin: 0px auto;
      }

      .btn{
        margin-left: 530px;
        margin-top: 20px;
        font-size: 30px;
      }

      .btn:hover{
        background-color: #d12030;
        color: white;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="top">
                <a href="#" class="logo"><img src="img/logo.png"/></a>
                <div class="nav-wrapper">
                    <!--<a href="#login" class="login pull-right"><button class="btn btn-signup">SIGNUP</button></a>
                    <a href="#login" class="login pull-right"><button class="btn btn-login">LOG IN</button></a>-->
                </div>
            </div>
      </div>
      <hr/>
      <div class="row">
        <input type="text" placeholder="Please provide your PayMaya Number" class="num form-control" value="09169669108">
        <button class="btn" id="btn">Confirm</button>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script type="text/javascript">
      $("#btn").click(function(){
        window.location.href = "thankyoupage.php"
      });
    </script>
  </body>
</html>