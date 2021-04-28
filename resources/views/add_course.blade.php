


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud</title>

  <style>
    .container {
    background-color: black;
  }
  </style>
 {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>



<body style="max-width: 960px; margin: auto; ">


<div class="col-md-12" style="margin-top: 10px;">
  @include('Include.header')
</div>



  @if(Session::has('course.student'))
  <span>{{Session::get('course.student')}}</span>
  @endif
	<div  class="container">
	<div class="reg-container justify-content-center" > <br>
	
	     <div class="col-lg-12 m-auto d-block  justify-content-center" style="text-align:center;">
			

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Click Here
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  justify-content-center" id="staticBackdropLabel" >Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> --}}
      <form name="Course" action="{{url('/addpost')}}" method="post" enctype="multipart/form-data" style="background-color: rgb(222,184,135); padding: 50px; align:center; display: inline-block;"> 
     {{csrf_field()}}

    <div class="form-group row col-md-10 col-form-label text-md-right" >
         Name: &nbsp;
          <br> <input type="text" name="name" value="">
           </div><br>

        <div class="form-group row col-md-10 col-form-label text-md-right" >
         
         Description: <br> <textarea name="description" id="" cols="25" rows="5"></textarea> 


         </div>

         <br> 

         
         <div class="form-group row col-md-12 col-form-label ">
          Gender: &nbsp; <br>
          <div class="col-md-6" style="text-align: left;" > 
                 <input type="radio" name="gender"  value="Male" >
                    <label>Male</label><br>
                  <input type="radio" name="gender"  value="Female"> 
                    <label>Female</label></div>
         </div> <br>
       
       <div class="form-group row col-md-4 col-form-label text-md-right">
          Topics: 
         {{--   <input type="text" name="check"> --}}
                <select name="check">
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
    <br><br>
      </div>
      {{-- <div class="modal-footer">
      
        <button type="button" class="btn btn-primary">Understood</button>
      </div> --}}
   {{--  </div> --}}
  </div>
</div>















    {{-- <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> --}}
      
      
    
    {{-- </div> --}}
  </div>
</div>

     
<div>@include('Include.footer')</div>
  
	


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>
 --}}
</body>
</html>