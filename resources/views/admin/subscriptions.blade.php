@extends('admin.index')


@section('title', 'Dashboard')

@section('body')

<div class="card-body table-responsive">

    <div>
        @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
    </div>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User name</th>
                <th>Phone number</th>
                <th>Subscription start</th>
                <th>Subscription end</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($subscriptions as $subscription)
        
            <tr>
            <td>
                
                    @foreach ($users->where('id', $subscription->user_id) as $user)
                    {{$user->fname}} {{$user->lname}}
                     @endforeach
            </td>
            <td>
                @foreach ($users->where('id', $subscription->user_id) as $user)
                {{$user->phone}}
                 @endforeach
            </td>
                <td>
                    @foreach ($users->where('id', $subscription->user_id) as $user)
                        {{$user->subscription_s	}}
                 @endforeach
                </td>
                <td>
                    @foreach ($users->where('id', $subscription->user_id) as $user)
                        {{$user->subscription_e	}}
                 @endforeach
                </td>
                <td>@foreach ($users->where('id', $subscription->user_id) as $user)
                    {{$user->sub_price	}}
             @endforeach
             </td> 
                <td>
                                    
                 <a href="{{ route('deletesubscriptions', $subscription->id ) }}" style="margin-left: 1rem;"> <i class="fa-solid fa-trash" style="color: #dd2727;"></i></i></a> 
                
                </td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
</div>


@endsection
