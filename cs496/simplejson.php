<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Simple JSOn</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="jquery-1.11.1.min.js"></script>
</head>

<body>
<div id="clickme" onclick="startAjax()">Click me</div>
<script>
function startAjax() {
  $("#clickme").text("Calling server");
  $.ajax({url:"somefile.json",
      success:callbackFunction,error:errorFunction,
      dataType: 'json'} /* request json -> JS object */
  );
}
function callbackFunction(data,info) {
  $("#clickme").text("result:"+data); /*data is JS object */
}
function errorFunction(data,info) {
  $("#clickme").text("error occurred:"+info);
}

</body>
</html>