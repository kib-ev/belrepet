@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
                    @if (isset($news))
                    <form action="" method="post">

                        {{ method_field('patch') }}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="" for="title">Заголовок</label>
                            <input class="form-control" name="name" type="text" placeholder="Заголовок" value="{{ $news->name }}">
                        </div>
                        <input class="form-control" name="title" type="text" placeholder="Slug" value="{{ $news->title }}">
                        <input class="form-control" name="slug" type="text" placeholder="Slug" value="{{ $news->slug }}">
                        <input class="form-control" name="image" type="text" placeholder="image 1170x400" value="{{ $news->image }}">
                        <input class="form-control" name="preview" type="text" placeholder="preview 570x250" value="{{ $news->preview }}">
                        <input class="form-control" name="tags" type="text" placeholder="tags" value="{{ $news->tags }}">
                        <textarea class="form-control" name="excerpt" placeholder="excerpt">{{ $news->excerpt }}</textarea>
                        <textarea class="form-control" name="content" placeholder="content">{{ $news->content }}</textarea>

                        <input type="submit" value="save">
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
