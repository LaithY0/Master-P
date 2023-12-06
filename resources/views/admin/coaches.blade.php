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
        <a href="/addcoach" > <button type="button" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button></a>
    </div>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Position</th>
            <th>Phone</th>
            <th>Photo</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($data as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->position}}</td>
            <td>{{$user->phone}}</td>
            <td> <img src="./assets/images/{{$user->photo}}" width="30rem"></td>
            <td>
              <a href="{{ route('editcoach', $user->id ) }}">  <i class="fa-regular fa-pen-to-square"></i> </a>
                    
              <a href="{{ route('deletecoach', $user->id ) }}" style="margin-left: 1.5rem;"><i class="fa-solid fa-trash" style="color: #dd2727;"></i></i></a>
            </td>
              
          </tr>
        @endforeach
          </tfoot>
        </table>
      </div>

@endsection
    