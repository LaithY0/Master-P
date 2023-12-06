@extends('admin.index')


@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>  
                <th>Class</th>
                <th>Class name</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($errors->has('class') )
            <p class="alert alert-danger ">{{ $errors->first('class') }}</p>
        @endif
            @if ($errors->has('class_name') )
            <p class="alert alert-danger ">{{ $errors->first('class_name') }}</p>
        @endif
            @if ($errors->has('photo') )
            <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
        @endif
           

            <tr>
                <form action="/saveclass" method="POST" enctype="multipart/form-data">
                    @csrf
                <td><input type="text" name="class" > </td>
                <td><input type="text" name="class_name"> </td>
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
