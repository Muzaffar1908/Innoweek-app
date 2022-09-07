@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Username</th>
                        <td>{{$news->usersTable->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Categoryname</th>
                        <td>{{$news->newsTable->title_uz}}</td>
                    </tr>
                    <tr>
                        <th>Title uz</th>
                        <td>{{$news->title_uz}}</td>
                    </tr>
                    <tr>
                        <th>Title ru</th>
                        <td>{{$news->title_ru}}</td>
                    </tr>
                    <tr>
                        <th>Title en</th>
                        <td>{{$news->title_en}}</td>
                    </tr>
                    <tr>
                        <th>User image</th>
                        <td>
                            <img src="{{asset('uploads/news/' .$news->user_image.'-d.png')}}" alt="img" with="100px" height="60px">
                        </td>
                    </tr>
                    <tr>
                        <th>Description uz</th>
                        <td>{!! $news->description_uz !!}</td>
                    </tr>
                    <tr>
                        <th>Description ru</th>
                        <td>{!! $news->description_ru !!}</td>
                    </tr>
                    <tr>
                        <th>Description en</th>
                        <td>{!! $news->description_en !!}</td>
                    </tr>
                    <tr>
                        <th>Is Active</th>
                        <td>{{$news->is_active}}</td>
                    </tr>
                    <tr>
                        <th>Tags</th>
                        <td>{{$news->tags}}</td>
                    </tr>

                </table>
                <a href="{{route('admin.news.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
