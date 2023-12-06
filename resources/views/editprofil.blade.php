<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/edit.css">
  
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <script src="https://kit.fontawesome.com/2276507d5d.js" crossorigin="anonymous"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{asset('dist/css/popup.css')}}">
</head>
<body>
    

    

<div class="container-xl px-4 mt-4">
  
  
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="./assets/images/{{auth()->user()->photo}}" alt="">
                    <!-- Profile picture help block-->
                    <div  class="small font-italic text-muted mb-4 namediv">{{auth()->user()->fname}} {{auth()->user()->lname}}</div>

                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Your Details</div>
                <div class="card-body">

                    @if ($errors->has('first_name') )
                    <p class="alert alert-danger ">{{ $errors->first('first_name') }}</p>
                     @endif
                         @if ($errors->has('last_name') )
                         <p class="alert alert-danger ">{{ $errors->first('last_name') }}</p>
                     @endif
                         @if ($errors->has('phone') )
                         <p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
                     @endif
                         @if ($errors->has('photo') )
                         <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
                     @endif
                     @if ($errors->has('email') )
                         <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
                     @endif
                     @if ($errors->has('password') )
                         <p class="alert alert-danger ">{{ $errors->first('password') }}</p>
                     @endif
                     @if ($errors->has('c_password') )
                         <p class="alert alert-danger ">{{ $errors->first('c_password') }}</p>
                     @endif

                                            
                        @if (\Session::has('success'))
                        <div class="alert alert-success " style="width: 50%;" id="success-alert">
                            <p>{{ \Session::get('success') }}</p>
                        </div>

                        <script>
                        var milliseconds = 2500;
                        setTimeout(function () {
                        document.getElementById('success-alert').remove();
                        }, milliseconds);
                        </script>

                        @endif
        
                    <form  action="{{ route('saveprofileedit') }}"  method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$user->id}}" name="id" >

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name :</label>
                                <input class="form-control" id="inputFirstName" name="first_name" type="text" value="{{$user->fname}}">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name :</label>
                                <input class="form-control" id="inputLastName" name="last_name" type="text" value="{{$user->lname}}">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Email :</label>
                                <input class="form-control" id="inputFirstName" name="email" type="text" value="{{$user->email}}">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Phone :</label>
                                <input class="form-control" id="inputLastName" name="phone" type="text" value="{{$user->phone}}">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">New passwoed </label>
                                <input class="form-control" id="inputFirstName" name="password" type="password">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Confirm new password</label>
                                <input class="form-control" id="inputLastName" name="c_password" type="password" >
                            </div>
                        </div>
                       
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputPhone">New image</label>
                                <input class="form-control" id="inputPhone" type="file" name="photo"  value="{{$user->photo}}">
                            </div>
                            
                        <button style="margin-top: 1rem; margin-left:1rem;" class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>