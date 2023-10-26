<html>
<head>
<title>Form</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>





</head>
<body>
      <div class="container">
	    <div class="col-sm-6 mx-auto mt-5 border border-danger">
		
		  <form id="myform" class="mt-3">
		   <p id="m" class="text-center"> </p>
		    <h1>Singnup Form</h1>
			<div class="col-sm-10 mt-3">
			  <div class="row">
			    <div class="col-sm-4">
				  <label for="name">Name:</label>
				</div>
				<div class="col-sm-8">
				  <input type="text" name="name">
				</div>
			  </div>
			</div>
			
			<div class="col-sm-10 mt-3">
			  <div class="row">
			    <div class="col-sm-4">
				  <label for="mobile">Mobile:</label>
				</div>
				<div class="col-sm-8">
				  <input type="text" name="mobile">
				</div>
			  </div>
			</div>
			
			<div class="col-sm-10 mt-3">
			  <div class="row">
			    <div class="col-sm-4">
				  <label for="email">Email:</label>
				</div>
				<div class="col-sm-8">
				  <input type="text" name="email">
				</div>
			  </div>
			</div>
			
			<div class="col-sm-10 mt-3">
			  <div class="row">
			    <div class="col-sm-4">
				  <label for="password">Password:</label>
				</div>
				<div class="col-sm-8">
				  <input type="text" name="password">
				</div>
			  </div>
			</div>
			<div class="row mt-3">
			  <input type="submit" value="Submit" class="btn btn-primary mx-auto">
			</div>
		  </form>
		</div>

 <div id="xyz">
 
 </div>
</div>

</body>
</html>

	  </div>
</body>

  <script>
   $(document).ready(function(){
      $("#myform").on('submit',function(){
       $.ajax({
		   url: "db.php",
           type:"POST",
           data: $(this).serialize(), 	   
		   success: function(result){
		if(jQuery.trim(result)== 'ok')
		{
			 $("#m").text("You have Signup Succesfully !");
			 $('#myform').trigger('reset');
			 getdata();
		}
		else
		{
            $("#m").text("There is something Wrong Please Try again !!");
		}
	  }
    });
	
	//getdata
	function getdata()
	{
		$.ajax({
		   url: "getdata.php",	   
		   success: function(result){
		$('#xyz').html(result);
	  }
     });
	}
	
	 return false;
  });
});
  
  </script>
  
</html>