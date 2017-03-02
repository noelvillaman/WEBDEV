<!DOCTYPE html><html><head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="clickme" onclick="startAjax()">Click me</div>
    <script>
    function startAjax() {
      $("#clickme").text("Calling server");
      $.ajax({url:"somefile.xml",
         success:callbackFunction, error:errorFunction}
      );
    }
    function callbackFunction(data,info) {
      $("#clickme").text("result:"+data);
    }
    function errorFunction(data,info) {
      $("#clickme").text("error occurred:"+info);
    }
    </script>
</body>
</html>
