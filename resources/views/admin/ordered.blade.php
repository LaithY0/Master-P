@extends('admin.index')


@section('title' , 'Dashbord')


@section('body')

<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Products</th>
        <th>Total price</th>
        <th>Adress</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Laith Yaseen</td>
        <td>Whey protein</td>
        <td>80</td>
        <td>Aqaba</td>
        <td> 
            <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
         </td>
      </tr>
     
      </tfoot>
    </table>
  </div>

@endsection
    