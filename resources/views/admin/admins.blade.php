@extends('admin.index')


@section('title' , 'Dashbord')


@section('body')


    @if (\Session::has('success'))
    <div class="alert alert-success " style="width: 50%;" id="success-alert">
        <p>{{ \Session::get('success') }}</p>
    </div>

    <script>
      var milliseconds = 2500;
      setTimeout(function () {
      document.getElementById('success-alert').remove();
      }, milliseconds);
      </script>

    @endif


    <div class="card-body">
      <div style="width: 98%;display:flex; justify-content:end;">
        <a href="/addadmin" > <button type="button" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button></a>
    </div>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($admins as $admins)
          <tr>
            <td>{{$admins->name}}</td>
            <td>{{$admins->email}}</td>
           
            <td>
               <a href="{{ route('editadmin', $admins->id ) }}">  <i class="fa-regular fa-pen-to-square"></i> </a>
                    
             <a href="{{ route('deleteadmin', $admins->id ) }}" style="margin-left: 1.5rem;"><i class="fa-solid fa-trash" style="color: #dd2727;"></i></i></a>
            </td>
              
          </tr>
        @endforeach
          </tfoot>
        </table>
      </div>

@endsection
    