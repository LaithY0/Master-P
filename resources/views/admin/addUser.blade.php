@extends('admin.index')


@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                {{-- <th>Subscription : start </th>
                <th>Subscription : end </th> --}}
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($errors->has('fname') )
            <p class="alert alert-danger ">{{ $errors->first('fname') }}</p>
        @endif
            @if ($errors->has('lname') )
            <p class="alert alert-danger ">{{ $errors->first('lname') }}</p>
        @endif
            @if ($errors->has('email') )
            <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
        @endif
            @if ($errors->has('phone') )
            <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
        @endif
            @if ($errors->has('password') )
            <p class="alert alert-danger ">{{ $errors->first('password') }}</p>
        @endif
            @if ($errors->has('photo') )
            <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
        @endif

            <tr>
                <form action="/add" method="POST" enctype="multipart/form-data">
                    @csrf
                <td><input type="text" name="fname" > </td>
                <td><input type="text" name="lname"> </td>
                <td><input type="text" name="email" ></td>
                <td><input type="number" name="phone"> </td>
                <td><input type="password" name="password" ></td>
                {{-- <td><input type="date" name="subscription_s"> </td>
                <td><input type="date" name="subscription_e"> </td> --}}
                <td><input type="file" name="photo" ></td>
                
                <td>
                   <button type="submit" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button>

                </td>
            </tr>
        </form>
        </tbody>
    </table>
</div>


@endsection
