@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <p>User list</p>
                    
                    <table class="table table-bordered">
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        
                        @if($user->joinas != 'admin')
                            <td>
                                
                                @if($user->active)
                                    <span class="text-success">Активна</span>
                                @else
                                    <span class="text-danger">Не активна</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('update_user', $user->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    
                                    @if($user->active)
                                        <input type="submit" value="OFF">
                                        <input type="hidden" name="active" value="0">
                                    @else
                                        <input type="submit" value="ON">
                                        <input type="hidden" name="active" value="1">
                                    @endif
                                </form>
                            </td>
                            <td><a href="{{ route('tutor_page', $user->id) }}" target="_blank">view</a></td>
                        @else
                            <td></td>
                            <td></td>
                            <td></td>
                        @endif
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

