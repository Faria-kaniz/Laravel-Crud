<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modal Popup</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
		
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Form
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FORM-Table</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	<form id="myform">
		  <div class="form-group">
		    <label for="pname">Name</label>
		    <input type="text" class="form-control" id="pname"  placeholder="Enter Your Name" name="name">
		    <h5 id="checkName"></h5>		    
		  </div>
		  <div class="form-group">
		    <label for="p_age">Age</label>
		    <input type="number" class="form-control" id="p_age" placeholder="Enter Your Age" min="5" name="age">
		    <h5 id="checkAge"></h5>
		  </div>
		  
		</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="subBtn"  value="send">Save changes</button>
      </div>
    </div>
  </div>

  <div >
  	<center >
  		
  			<table id="table_show">
  				<tr><td>Name</td><td id="p1"></td></tr>
  				<tr><td>Age</td><td id="p2"></td></tr>

  			</table>
  		
  	</center>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script >
	// $(document).ready(function(){
	// 	$('#subBtn').click(function(){

	// 		var name = $('#pname').val();
	// 		var age = $('#p_age').val();
	// 		alert(name + ' is '+age+' years old.');
	// 		//
	// 	});



	// });

	$(document).ready(function(){
		$('#checkName').hide();
		$('#checkAge').hide();

		var user_err = true;
		var age_err = true;

		

		// var name = $('#pname').val();
		// var age = $('#p_age').val();

		$('#pname').keyup(function(){
			name_Check();
			
		});

		function name_Check(){

			var name = $('#pname').val();

			if(name.length == ''){
				$('#checkName').show();
				$('#checkName').html("** Fill the UserName");
				user_err = false;
				return false;
			}
			else{
				$('#checkName').hide();
			}


			if((name.length <3) || (name.length >6)){
				$('#checkName').show();
				$('#checkName').html("** Length should be between 3 and 6");
				user_err = false;
				return false;
			}

			else{
				$('#checkName').hide();
			}

		}


		$('#p_age').keyup(function(){
			age_Check();
		});

		function age_Check(){
			var age = $('#p_age').val();

			if(age.length == ''){
				$('#checkAge').show();
				$('#checkAge').html("** Fill the Age");
				age_err = false;
				return false;
			}
			else{
				$('#checkAge').hide();
			}
		}

			$('#subBtn').click(function(){
				var age = $('#p_age').val();
				var name = $('#pname').val();

			    user_err = true;
				 age_err = true;


					name_Check();
					age_Check();

					if((user_err == true) && (age_err == true) ){
						$('#p1').html(name);
					    $('#p2').html(age);

						// /;;
						$('#table_show').focusin();

						
					}
					else {
						return false;
					}

					
	});








	});

</script>
</body>
</html>