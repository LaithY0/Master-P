@extends('admin.index')

<base href="/public">

@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>  
                <th>Name</th>
                <th>Email</th>
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

            <tr>
                <form action="/saveadmin" method="POST" enctype="multipart/form-data">
                    @csrf
                <td><input type="text" value="{{$admin->name}}" name="name" ></td>
                <td><input type="text" value="{{$admin->email}}" name="email" ></td>
                <input type="hidden" value="{{$admin->id}}" name="id" >
                
                <td>
                   <button type="submit" class="btn btn-block btn-primary btn-sm " id="openModal">Save</button>

                </td>
            </tr>
        </form>
        </tbody>
    </table>
</div>


@endsection
