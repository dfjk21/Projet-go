<!DOCTYPE html>
<html>
  <head>
  	<script>
		function test(){
 

			document.getElementById('ssss').textContent = '<circle cx="50" cy="50" r="10" stroke="green" stroke-width="4" />';
	  }
	</script>
  </head>
  <body onload="test()">

  <h1>My first SVG</h1>

  <svg width="100" height="100">
     <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" id="ssss" />
     Sorry, your browser does not support inline SVG.
  </svg> 

  </body>
</html>
