                                  <!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title></title>   
	  	<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>   
		 <script src="http://static.crowdcomputer.org/CC-JS-Generator/?type=send_all_to_crowdcomputer" type="text/javascript"></script>
	   <script>  
		var prmstr = window.location.search.substr(1);
		var prmarr = prmstr.split ("&");
		var params = {};

		for ( var i = 0; i < prmarr.length; i++) {
		    var tmparr = prmarr[i].split("=");
		    params[tmparr[0]] = unescape(tmparr[1]);
		}
		</script>
	</head>
	<body>
		<div>        
			 <?=$_POST["name"][0]?>  <?=$_POST["lastname"][0]?>  <?=$_POST["birthday"][0]?>     
		</div>
		<form method="post" id="review" action="post1.php" name="mturk_form">
			<input type="radio" name="validation" value="false">No<br>
			<input type="radio" name="validation" value="true">Yes<br>
			<input id="submitButton" type="submit" name="Submit" value="...">
		</form>
		 
		 
	</body>
</html>
