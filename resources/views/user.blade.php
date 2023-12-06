<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
     " rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <style>

body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

#name{
    color: white;
}

.editbtn{
    background-color: black;
    border-radius: 5rem;
    font-size: large;

}

#member{
    color: white;
    font-weight: bold;
    font-size: 1rem;
}

#edit{
    color: white;
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#282626), to(#302527));
    background: linear-gradient(to right, #2b2223, #9b3303);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

#page-content{
    margin-top: 5rem;
    margin-left: 3.5rem;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}



    </style>
</head>
<body>

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
    <div class="col-xl-6 col-md-12">
            
                                        @if (\Session::has('success'))
                                        <div class="alert alert-success " id="success-alert">
                                            <p>{{ \Session::get('success') }}</p>
                                        </div>

                                        <script>
                                            var milliseconds = 2500;
                                            setTimeout(function () {
                                            document.getElementById('success-alert').remove();
                                            }, milliseconds);
                                            </script>


                                    @endif
                                                    <div class="card user-card-full">
                                                        <div class="row m-l-0 m-r-0">
                                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                <div class="card-block text-center text-white">
                                                                    <div class="m-b-25">
                                                                        <img src="./assets/images/{{auth()->user()->photo}}" class="img-radius" width="110rem" alt="User-Profile-Image">
                                                                    </div>
                                                                    <h3 class="f-w-600" id="name"></h3>
                                                                    <p id="member">Member</p>
                                                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                                    <a href="/editmyprofile">  <button class="editbtn">  <i class="fa-solid fa-user-pen" id="edit"></i> </button></a>
                                                                    <a href="/"> <button class="editbtn"><i class="fa-solid fa-house" style="color: #ffffff;"></i></button></a>
                                                                 <a href="/logout"> <button class="editbtn"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></button></a>

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="card-block">
                                                                    

                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Name</p>
                                                                            <h6 class="text-muted f-w-400">{{auth()->user()->fname}} {{auth()->user()->lname}}</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Email</p>
                                                                            <h6 class="text-muted f-w-400">{{auth()->user()->email}}</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Phone</p>
                                                                            <h6 class="text-muted f-w-400">{{auth()->user()->phone}}</h6>
                                                                        </div>
                                                                    </div>
                                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Subscription</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Start in </p>
                                                                            <h6 class="text-muted f-w-400">{{auth()->user()->subscription_s}}</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">End in</p>
                                                                            <h6 class="text-muted f-w-400">{{auth()->user()->subscription_e}}</h6>
                                                                        </div>
                                                                    </div>
                                                        
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 </div>
                                                    </div>
                                                </div>
    
</body>
</html>