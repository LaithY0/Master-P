@extends('admin.index')


@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>  
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($errors->has('photo') )
            <p class="alert alert-danger ">{{ $errors->first('photo') }}</p>
        @endif
           

            <tr>
                <form action="/saveslider" method="POST" enctype="multipart/form-data">
                    @csrf
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
