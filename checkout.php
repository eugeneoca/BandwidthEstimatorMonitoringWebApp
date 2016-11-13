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
    <link rel="stylesheet" type="text/css" href="css/checkout.css">

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
                    <!--<a href="#login" class="login pull-right"><button class="btn btn-signup">SIGNUP</button></a>-->
                    <a href="#login" class="login pull-right"><button class="btn btn-login">MY ACCOUNT</button></a>
                </div>
            </div>
    	</div>

        <div class="row">
            <div class="col-md-4">
                <img src="img/biz10.png" class="img">
                <button class="btn btn-apply" id="apply">Apply</button>
            </div>
            <div class="col-md-4">
                <img src="img/biz15.png" class="img rev">
                <button class="btn btn-apply" id="apply-a">Apply</button>
            </div>
            <div class="col-md-4">
                <img src="img/biz20.png" class="img">
                <button class="btn btn-apply" id="apply-b">Apply</button>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script type="text/javascript">
    $("#apply,#apply-a,#apply-b").click(function(){
        window.location.href = "payment.php"
    });
    </script>
  </body>
</html>