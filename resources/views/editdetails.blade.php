<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud</title>
</head>



<body style="max-width: 960px; margin: auto; ">

  @if(Session::has('updated'))
  <span>{{Session::get('updated')}}</span>
  @endif
	<div  class="container">
	<div class="reg-container justify-content-center" > <br>
	
	     <div class="col-lg-12 m-auto d-block" style="text-align:center;">
			<h1 class="text-success text-center justify-content-center ">Admission-Form</h1>

		 <form name="Course" action="{{route('updated')}}" method="post" enctype="multipart/form-data" style="background-color: rgb(222,184,135); padding: 50px; align:center; display: inline-block;"> 
		 {{csrf_field()}}
     <input type="hidden" name="id" value="{{$lists->id}}">

		<div class="form-group row col-md-4 col-form-label text-md-right" >
         Name: <br> <input type="text" name="name" value="{{$lists->name}}"> <br>
        </div>

        <div class="form-group row col-md-4 col-form-label text-md-right" >
	       
         Description: <br> <textarea name="description" id="" cols="30" rows="10">"{{$lists->description}}"</textarea> 


         </div>

         <br>

         
         <div class="form-group row col-md-4 col-form-label text-md-right">
         	Gender: <br>  <input type="radio" name="gender" id="male" value="{{$lists->gender}}"> 
                       <label for="m">Male</label>
    
                      <input type="radio" name="gender" id="female" value="{{$lists->gender}}"> 
                      <label for="f">Female</label>
                      <br>

         </div> <br><br>
       
       <div class="form-group row col-md-4 col-form-label text-md-right">
       	  Topics: 
       	  {{-- <input type="text" name="check" value="{{$lists->check}}"> --}}
             <select name="check" >

                <option selected disabled></option>
                <option>HTML</option>
                <option>CSS</option>
                <option>Php</option>
                <option>Laravel</option>
            </select>


       </div> <br><br>


        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success" >
                                	Submit here
                                </button>
                            </div>
                        </div>

	</form>
	


	</div>


</body>
</html>