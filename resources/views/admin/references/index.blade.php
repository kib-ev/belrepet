@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">References</div>

                @foreach($references as $reference)
                    <p><a href="{{ route('admin_show_reference', $reference->id) }}">{{ $reference->name }}</a></p>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
