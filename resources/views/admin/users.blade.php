@extends('admin.index')


@section('title', 'Dashboard')

@section('body')

<div class="card-body table-responsive">

    <div>
        @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
    </div>

    <div style="width: 98%;display:flex; justify-content:end;">
        <a href="/adduser" > <button type="button" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button></a>
    </div>
    
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subscription</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td> Start in : {{$user->subscription_s}} - End in :  {{$user->subscription_e}}</td>
                <td> <img src="./assets/images/{{$user->photo}}" alt="User photo" height="50rem"></td>
                <td>
                    
                  <a href="{{ route('edituser', $user->id ) }}">  <i class="fa-regular fa-pen-to-square"></i> </a>
                
                    <a href="{{ route('deleteuser', $user->id ) }}" style="margin-left: 1rem;"><i class="fa-solid fa-trash" style="color: #dd2727;"></i></i></a>
                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
