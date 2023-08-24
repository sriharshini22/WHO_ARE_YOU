<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="latestCss.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <center>
    <!-- Body of Form starts -->
  	<div class="container">
      <form action="login_insert_latest.php" method="post" autocomplete="on">
    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->



    		<!---Submit Button------>
    		<div class="box" >
    				<input type="Submit" style="background-color: #ff6600 "  name="Submit" id="submit" class="submit" value="SUBMIT">
					<script type="text/javascript">
    						document.getElementById("submit").onclick = function () {
        						location.href = "WAY2.html";
    };
</script>
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
</center>
  </body>
</html>
