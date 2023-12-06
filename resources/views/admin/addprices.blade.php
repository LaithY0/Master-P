@extends('admin.index')


@section('title', 'Dashboard')

@section('body')
<div class="card-body table-responsive">

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
            @if ($errors->has('months') )
            <p class="alert alert-danger ">{{ $errors->first('months') }}</p>
        @endif
            @if ($errors->has('price') )
            <p class="alert alert-danger ">{{ $errors->first('price') }}</p>
        @endif
            @if ($errors->has('details1') )
            <p class="alert alert-danger ">{{ $errors->first('details1') }}</p>
        @endif
            @if ($errors->has('details2') )
            <p class="alert alert-danger ">{{ $errors->first('details2') }}</p>
        @endif
        @if ($errors->has('details3') )
            <p class="alert alert-danger ">{{ $errors->first('details3') }}</p>
        @endif
           

            <tr>
                <form action="/saveprice" method="POST" enctype="multipart/form-data">
                    @csrf
                <td><input type="text" name="months" > </td>
                <td><input type="number" name="price"> </td>
                <td><input type="number" name="months_num"> </td>
                <td><input type="text" name="details1" ></td>
                <td><input type="text" name="details2" ></td>
                <td><input type="text" name="details3" ></td>
                
                <td>
                   <button type="submit" class="btn btn-block btn-primary btn-sm " id="openModal">Add</button>

                </td>
            </tr>
        </form>
        </tbody>
    </table>
</div>


@endsection
