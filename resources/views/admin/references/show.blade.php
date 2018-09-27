@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reference: {{ $reference->name }}</div>

                <table class="table">
                @foreach($reference->entries()->get() as $entry)
                    <tr>
                        <td><input name="name" type="text" value="{{ $entry->name }}" disabled></td>
                        <td><input name="slug" type="text" value="{{ $entry->slug }}" disabled></td>
                        <td><input name="description" type="text" value="{{ $entry->description }}" disabled></td>
                    </tr>
                @endforeach
                </table>

                <form action="{{ route('admin_entry_store') }}" method="post">
                    @csrf 
                    @method('PUT')

                    <input name="reference_id" type="hidden" value="{{ $reference->id }}" autocomplete="off">

                    <table class="table">
                        <tr>
                            <td><input name="name" type="text" value="" autocomplete="off"></td>
                            <td><input name="slug" type="text" value="" autocomplete="off"></td>
                            <td><input name="description" type="text" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="add">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
