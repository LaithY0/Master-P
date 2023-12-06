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
                <div class="card-header">Class picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="./assets/images/{{$class->photo}}" alt="">
                    <!-- Profile picture help block-->
                    <div style="font-weight: bold;" class="small font-italic text-muted mb-4">{{$class->class}} : {{$class->class_name}}</div>
                    <!-- Profile picture upload button-->
                  
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Class details</div>
                <div class="card-body">

                    @if ($errors->has('class') )
                    <p class="alert alert-danger ">{{ $errors->first('class') }}</p>
                     @endif
                         @if ($errors->has('class_name') )
                         <p class="alert alert-danger ">{{ $errors->first('class_name') }}</p>
                     @endif
                         @if ($errors->has('photo') )
                         <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
                     @endif
        
                    <form  action="{{ route('editclasses') }}"  method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$class->id}}" name="id" >
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Class  </label>
                            <input class="form-control" name="class" id="inputUsername" type="text" value="{{$class->class}}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Class name </label>
                                <input class="form-control" id="inputFirstName" name="class_name" type="text" value="{{$class->class_name}}">
                            </div>
                        </div>
                       
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputPhone">New image</label>
                                <input class="form-control" id="inputPhone" type="file" name="photo"  value="{{$class->photo}}">
                            </div>
                            
                        <button style="margin-top: 1rem; margin-left:1rem;" class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


