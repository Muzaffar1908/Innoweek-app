@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Username</th>
                        <td>{{$news_category->usersTable->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Parent ID</th>
                        <td>{{$news_category->parent_id}}</td>
                    </tr>
                    <tr>
                        <th>Title uz</th>
                        <td>{{$news_category->title_uz}}</td>
                    </tr>
                    <tr>
                        <th>Title en</th>
                        <td>{{$news_category->title_en}}</td>
                    </tr>
                    <tr>
                        <th>Title ru</th>
                        <td>{{$news_category->title_ru}}</td>
                    </tr>
                    <tr>
                        <th>Is Active</th>
                        <td>{{$news_category->is_active}}</td>
                    </tr>
                </table>
                <a href="{{route('admin.news_category.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection