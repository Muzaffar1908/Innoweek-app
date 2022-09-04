@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Name uz</th>
                        <td>{{$category->name_uz}}</td>
                    </tr>
                    <tr>
                        <th>Name_ru</th>
                        <td>{{$category->name_ru}}</td>
                    </tr>
                    <tr>
                        <th>Name_en</th>
                        <td>{{$category->name_en}}</td>
                    </tr>
                    <tr>
                        <th>Is Active</th>
                        <td>{{$category->is_active}}</td>
                    </tr>
                </table>
                <a href="{{route('admin.category.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection