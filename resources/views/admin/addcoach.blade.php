@extends('admin.index')


@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>  
                <th>Name</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($errors->has('name') )
            <p class="alert alert-danger ">{{ $errors->first('name') }}</p>
        @endif
            @if ($errors->has('position') )
            <p class="alert alert-danger ">{{ $errors->first('position') }}</p>
        @endif
            @if ($errors->has('phone') )
            <p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
        @endif
            @if ($errors->has('photo') )
            <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
        @endif
           

            <tr>
                <form action="/addcoaches" method="POST" enctype="multipart/form-data">
                    @csrf
                <td><input type="text" name="name" > </td>
                <td><input type="text" name="position"> </td>
                <td><input type="number" name="phone"> </td>
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
