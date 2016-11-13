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
        .btn{
            border-radius: 0px;
            background-color: #d12030;
            color: white;
        }

        .btn:hover{
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
                    <a href="#login" class="login pull-right"><button class="btn btn-signup">MY ACCOUNT</button></a>
                </div>
            </div>
    	</div>
        <hr/>

        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        <h2><i>We recommend you an upgrade MyDSLBiz 20.</i></h2>
        <button class="btn">PAYBILLS</button>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/jquery.canvasjs.min.js"></script>
    <script type="text/javascript">
    $(function () {
        //Better to construct options first and then pass it as a parameter
        var options = {
            title: {
                text: "Bandwidth Usage Chart"
            },
                    animationEnabled: true,
            data: [
            {
                type: "spline", //change it to line, area, column, pie, etc
                color: "darkgreen",
                dataPoints: [
                    { label: "November 01, 2016", x: 1, y: 10 },
                    { label: "November 02, 2016",x: 2, y: 12 },
                    { label: "November 03, 2016",x: 3, y: 8 },
                    { label: "November 04, 2016",x: 4, y: 14 },
                    { label: "November 05, 2016",x: 5, y: 6 },
                    { color: "red", label: "November 06, 2016",x: 6, y: 24 },
                    { label: "November 07, 2016",x: 7, y: 2 },
                    { label: "November 08, 2016",x: 8, y: 10 },
                    { label: "November 09, 2016", x: 9, y: 10 },
                    { label: "November 10, 2016",x: 10, y: 12 },
                    { label: "November 11, 2016",x: 11, y: 8 },
                    { color: "red", label: "November 12, 2016",x: 12, y: 23 },
                    { color: "red", label: "November 13, 2016",x: 13, y: 26 },
                    { color: "red", label: "November 14, 2016",x: 14, y: 24 },
                    { label: "November 15, 2016",x: 15, y: 2 },
                    { label: "November 16, 2016",x: 16, y: 10 },
                    { label: "November 17, 2016",x: 17, y: 12 },
                    { label: "November 18, 2016",x: 18, y: 8 },
                    { color: "red", label: "November 19, 2016",x: 19, y: 23 },
                    { label: "November 20, 2016",x: 20, y: 12 },
                    { color: "red", label: "November 21, 2016",x: 21, y: 24 },
                    { label: "November 22, 2016",x: 22, y: 2 },
                    { label: "November 23, 2016",x: 23, y: 10 },
                    { x: 23, y: 20},
                    { x: 0, y: 20}
                ]
            }
            ]
        };

        $("#chartContainer").CanvasJSChart(options);

    });
    </script>
  </body>
</html>

<?php
    /*
    $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => "639065536901",
        "shortcode" => "29290753888",
        "message_id" => "12345678901234567890123456789012",
        "message" => urlencode("Welcome to My Service!"),
        "client_id" => "249535773bc339d5f8bb28604591717676db9d161fe758ac7c284474f1b67c51",
        "secret_key" => "7a2681fe6e9c09edc6a673bffc257dc731382ed0d50e5859b206be138fa5857c"
    );

    echo httpPost("https://post.chikka.com/smsapi/request", $arr_post_body);

    function httpPost($url, $data)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }*/
?>