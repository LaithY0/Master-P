@extends('admin.index')


@section('title' , 'Dashbord')


@section('body')

<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Photo</th>
        <th>Actions</th>
        {{-- <th>Delete</th> --}}
        {{-- <th>Add</th> --}}
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Trident</td>
        <td>Win 95+</td>
        <td> <img src="../img/pp.webp" width="30rem"></td>
        {{-- <td> <button type="button" class="btn btn-block btn-success btn-sm">Edit</button></td> --}}
        <td> <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
            <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
            <button type="button" class="btn btn-block btn-primary btn-sm">Add</button> </td>
        {{-- <td> <button type="button" class="btn btn-block btn-primary btn-sm">Add</button> </td> --}}
      </tr>
     
      </tfoot>
    </table>
  </div>

@endsection
    