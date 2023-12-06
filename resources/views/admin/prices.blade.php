@extends('admin.index')


@section('title' , 'Dashbord')


@section('body')

<div class="card-body table-responsive">

  @if (\Session::has('success'))
                <div class="alert alert-success " id="success-alert">
                    <p>{{ \Session::get('success') }}</p>
                </div>

                <script>
                    var milliseconds = 2500;
                    setTimeout(function () {
                    document.getElementById('success-alert').remove();
                    }, milliseconds);
                    </script>
 

            @endif
  <div style="width: 98%;display:flex; justify-content:end;">
    <a href="/addprice" > <button type="button" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button></a>
</div>

    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Months</th>
        <th>Price</th>
        <th>Months number</th>
        <th>Details -1</th>
        <th>Details -2</th>
        <th>Details -3</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>

        @foreach ($prices as $prices)
            
       
      <tr>
        <td>{{$prices->months}}</td>
        <td>{{$prices->price}} JD</td>
        <td>{{$prices->months_num}}</td>
        <td>{{$prices->details_1}}</td>
        <td>{{$prices->details_2}}</td>
        <td>{{$prices->details_3}}</td>
        <td>
                    
          <a href="{{ route('editprice', $prices->id ) }}">  <i class="fa-regular fa-pen-to-square"></i> </a>
        
            <a href="{{ route('deleteprice', $prices->id ) }}" style="margin-left: 1rem;"><i class="fa-solid fa-trash" style="color: #dd2727;"></i></i></a>
        
        </td> 
      </tr>
      @endforeach
      </tfoot>
    </table>
  </div>

@endsection
    