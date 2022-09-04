@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Category name</th>
                        <td>{{$news->categoryTable->name_uz}}</td>
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
                        <th>Image</th>
                        <td>
                            <img src="{{asset('uploads/news/' .$news->image)}}" alt="img" with="100px" height="60px">
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

                </table>
                <a href="{{route('admin.news.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
