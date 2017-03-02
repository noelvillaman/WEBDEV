<!DOCTYPE html><html><head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="clickme" onclick="startAjax()">Click me</div>
    <script>
    function startAjax() {
      $("#clickme").text();
      $.ajax({
	  type: 'POST',
	  url: 'somefile.xml',
	  data: { postVar1: 'theValue1', postVar2: 'theValue2' },
	  beforeSend:function(){
		// this is where we append a loading image
		$('#ajax-panel').html('<div class="loading"><img src="http://people.oregonstate.edu/~villaman/img/ajax-loader.gif" alt="Loading..." /></div>');
	  },
	  success:function(data){
		// successful request; do something with the data
		$('#ajax-panel').empty();
		$(data).find('item').each(function(i){
		  $('#ajax-panel').append('<h4>' + $(this).find('title').text() + '</h4><p>' + $(this).find('link').text() + '</p>');
		});
	  },
	  error:function(){
		// failed request; give feedback to user
		$('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
	  }
});
      
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
