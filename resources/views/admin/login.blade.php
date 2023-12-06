<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    " rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
       crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
     </style>
</head>
<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

              @if ($errors->has('email') )
              <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
               @endif
                   @if ($errors->has('password') )
                   <p class="alert alert-danger ">{{ $errors->first('password') }}</p>
               @endif

               @if (\Session::has('success'))
               <div class="alert alert-success " id="success-alert">
                   <p>{{ \Session::get('success') }}</p>
               </div>

               <script>
                   var milliseconds = 3500;
                   setTimeout(function () {
                   document.getElementById('success-alert').remove();
                   }, milliseconds);
                   </script>


           @endif

              <form id="login-form" action="{{ route('adminlogedd') }}" method="post" role="form">
               
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" required class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="email" />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" required id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password" />
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  {{-- <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div> --}}
                  {{-- <a href="#!" class="text-body">Forgot password?</a> --}}
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                 
                </div>
      
              </form>
            </div>
          </div>
        </div>
        
      </section>
    
</body>
</html>