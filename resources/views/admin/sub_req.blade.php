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
    
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Photo</th>
                <th>Subscription type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->fname}} {{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td> <img src="./assets/images/{{$user->photo}}" alt="User photo" height="50rem"></td>
                <td>{{$user->subtype}}</td>
                <td>
                    
                 <a href="{{ route('accecpt', $user->id ) }}"> <button type="button" class="btn btn-block btn-success btn-sm">Accept</button></a>
                    <button type="button" class="btn btn-block btn-danger btn-sm">Reject</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
