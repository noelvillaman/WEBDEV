

<!DOCTYPE html> <html> <head> 	<title>Your page title</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="jquery.validate.js"></script>

    <script>
      $(document).bind('pageinit', function() {
  var myCanvas = $("#canvas1").get(0);
  var context = myCanvas.getContext("2d");
  context.fillStyle = "#00ff00";
  context.fillRect(10, 40, 100, 200); // x, y, width, height
  context.strokeStyle = "#ff0000";
  context.moveTo(200, 300); // x, y
  context.lineTo(350, 350); // x, y
  context.stroke();  
      });
    </script>

<link href="style.css" type="text/css" rel="stylesheet" />
</head> <body> <div data-role="page"><div data-role="header"><h1>Some page title</h1></div><div data-role="content">

            <canvas id="canvas1" height="400" width="400" ></canvas>
