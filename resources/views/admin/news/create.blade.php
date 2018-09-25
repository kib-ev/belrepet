@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
                    <form action="" method="post">

                        {{ method_field('put') }}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="" for="name">Заголовок</label>
                            <input class="form-control" name="name" type="text" placeholder="Заголовок">
                        </div>
                        <input class="form-control" name="title" type="text" placeholder="title">
                        
                        <input class="form-control" name="slug" type="text" placeholder="Slug">
                        <input class="form-control" name="image" type="text" placeholder="/images/news/1170x400.jpg">
                        <input class="form-control" name="preview" type="text" placeholder="/images/news/570x250.jpg">
                        <textarea class="form-control" name="excerpt" placeholder="excerpt"></textarea>
                        <textarea class="form-control" name="content" placeholder="content"></textarea>

                        <input type="submit" value="add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
