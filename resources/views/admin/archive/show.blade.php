@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Year</th>
                        <td>{{$archive->year}}</td>
                    </tr>
                    <tr>
                        <th>Title uz</th>
                        <td>{{$archive->title_uz}}</td>
                    </tr>
                    <tr>
                        <th>Title ru</th>
                        <td>{{$archive->title_ru}}</td>
                    </tr>
                    <tr>
                        <th>Title en</th>
                        <td>{{$archive->title_en}}</td>
                    </tr>
                    <tr>
                        <th>Description uz</th>
                        <td>{{Str::limit(strip_tags($archive->description_uz))}}</td>
                    </tr>
                    <tr>
                        <th>Description ru</th>
                        <td>{{Str::limit(strip_tags($archive->description_ru))}}</td>
                    </tr>
                    <tr>
                        <th>Description en</th>
                        <td>{{Str::limit(strip_tags($archive->description_en))}}</td>
                    </tr>
                    <tr>
                        <th>Is Active</th>
                        <td>{{$archive->is_active}}</td>
                    </tr>
                </table>
                <a href="{{route('admin.archive.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection