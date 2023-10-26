<html>
<head>
<title>Form</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
     <div class="container">
	   <div class="col-sm-6 mx-auto mt-4 border border-danger">
	     <form  class="mt-3">
		   <div class="col-sm-10 mt-3">
		     <div class="row">
			   <div class="col-sm-4">
			     <label for="email">Email:</label>
			   </div>
			   <div class="col-sm-8">
			     <input type="text" id="email" name="email">
			   </div>
			 </div>
		   </div>
		   
		   <div class="col-sm-10 mt-3">
		     <div class="row">
			   <div class="col-sm-4">
			     <label for="password">Password:</label>
			   </div>
			   <div class="col-sm-8">
			     <input type="text" id="password" name="password">
			   </div>
			 </div>
		   </div>
		   <div class="row mt-3">
		     <input type="submit" value="submit"  id="btn" class="btn btn-primary mx-auto">
		   </div>
		 </form>
	   </div>
	 </div>
    <div id="div1">
	</div>
</body>
     <script>
     $(document).ready(function(){
      $("#btn").click(function(){
		  var eml= $("#email").val();
		  var pasd= $("#password").val();
       $.ajax({
		   url: "db.php",
           type:"POST",
           data: {x: eml,y: pasd,type:2},	   
		   success: function(result){
     alert(result);
    }});
  });
});
</script>
</html>