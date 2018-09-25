@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
                   @foreach($news as $item)
                   <div class="news-item"><a href="/admin/news/{{ $item->id }}/edit">{{ $item->name }}</a></div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
