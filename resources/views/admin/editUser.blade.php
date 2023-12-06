@extends('admin.index');


<base href="/public">
@section('title' , 'Edit');

@section('body')


<div class="container-xl px-4 mt-4">
  
  
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="./assets/images/{{$user->photo}}" alt="">
                    <!-- Profile picture help block-->
                    <div  class="small font-italic text-muted mb-4 namediv">{{$user->fname}} {{$user->lname}}</div>
                    <div  class="small font-italic text-muted mb-4 namediv"> User id : {{$user->id}}</div>

                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Coatch Details</div>
                <div class="card-body">

                    @if ($errors->has('fname') )
                    <p class="alert alert-danger ">{{ $errors->first('fname') }}</p>
                     @endif
                         @if ($errors->has('lname') )
                         <p class="alert alert-danger ">{{ $errors->first('lname') }}</p>
                     @endif
                         @if ($errors->has('phone') )
                         <p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
                     @endif
                         @if ($errors->has('photo') )
                         <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
                     @endif
        
                    <form  action="{{ route('saveedit') }}"  method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$user->id}}" name="id" >
                        {{-- <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">First name</label>
                            <input class="form-control" name="name" id="inputUsername" type="text" value="{{$user->name}}">
                        </div> --}}
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name :</label>
                                <input class="form-control" id="inputFirstName" name="fname" type="text" value="{{$user->fname}}">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name :</label>
                                <input class="form-control" id="inputLastName" name="lname" type="text" value="{{$user->lname}}">
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
                                <label class="small mb-1" for="inputFirstName">Subscriptions start : </label>
                                <input class="form-control" id="inputFirstName" name="subscription_s" type="date" value="{{$user->subscription_s}}">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Subscriptions end :</label>
                                <input class="form-control" id="inputLastName" name="subscription_e" type="date" value="{{$user->subscription_e}}">
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


@endsection


