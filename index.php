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
                    <a href="#login" class="login pull-right"><button class="btn btn-signup">SIGNUP</button></a>
                    <a href="#login" class="login pull-right"><button class="btn btn-login">LOG IN</button></a>
                </div>
            </div>
    	</div>
        <hr/>
        <img src="img/banner.png" class="banner" />
        <h1 class="text-center lead quote">Customer experience is our business</h1>
        <img src="img/journey.png" class="journey" />
        <h2 class="plan">Discover the right plan for you</h2>
        <div class="row items">
            <div class="col-md-4" id="light">
                <h3><input type="radio" id="in-light" /> LIGHT</h3>
                <div class="row list-node">
                    <ul class="list-group">
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> E-mail or Web</li>
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Browsing</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" id="moderate">
                <h3><input type="radio" id="in-moderate" /> MODERATE</h3>
                <div class="row list-node">
                    <ul class="list-group">
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Some File Downloads</li>
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Streaming Music/Video</li>
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Cloud</li>
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> VOIP</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" id="heavy">
                <h3><input type="radio" id="in-heavy" /> HEAVY</h3>
                <div class="row list-node">
                    <ul class="list-group">
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Large File Downloads</li>
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Gaming</li>
                      <li class="list-group-item"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Web Conferencing</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <h4 class="text-center">ESTIMATED NUMBER OF USERS</h4>
            <input type="text" class="form-control number-users">
            <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Business
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="drop">
                <li><a>Personal</a></li>
                <li><a>Business</a></li>
            </ul>
            </div>
            <button class="btn btn-discover" id="discover">DISCOVER</button>
            <button class="btn btn-apply" id="apply">APPLY</button>
            <img src="img/biz15.png" class="img rev" id="best" hidden>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>