@extends('admin.index')


@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>  
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($errors->has('name') )
            <p class="alert alert-danger ">{{ $errors->first('name') }}</p>
        @endif
            @if ($errors->has('email') )
            <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
        @endif
            @if ($errors->has('password') )
            <p class="alert alert-danger ">{{ $errors->first('password') }}</p>
        @endif
           

            <tr>
                <form action="/addnewadmin" method="POST" enctype="multipart/form-data">
                    @csrf
                <td><input type="text" required name="name" > </td>
                <td><input type="email" required name="email"> </td>
                <td><input type="password" required name="password"> </td>
                
                <td>
                   <button type="submit" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button>

                </td>
            </tr>
        </form>
        </tbody>
    </table>
</div>


@endsection
