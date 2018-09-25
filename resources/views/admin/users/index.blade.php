@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <p>User list</p>
                    
                    <ul>
                    @foreach($users as $user)
                    <li>{{$user->firstname}} {{$user->lastname}} ({{$user->email}})</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

