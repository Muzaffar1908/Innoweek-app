@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Username</th>
                        <td>{{$conference->conferenceTable->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Archive Year</th>
                        <td>{{$conference->archiveTable->year}}</td>
                    </tr>
                    <tr>
                        <th>Started At</th>
                        <td>{{$conference->started_at}}</td>
                    </tr>
                    <tr>
                        <th>Title uz</th>
                        <td>{{$conference->title_uz}}</td>
                    </tr>
                    <tr>
                        <th>Title ru</th>
                        <td>{{$conference->title_ru}}</td>
                    </tr>
                    <tr>
                        <th>Title en</th>
                        <td>{{$conference->title_en}}</td>
                    </tr>
                    <tr>
                        <th>User Image</th>
                        <td>
                            <img src="{{asset('uploads/conference/' .$conference->user_image)}}" alt="img" with="100px" height="60px">
                        </td>
                    </tr>
                    <tr>
                        <th>Description uz</th>
                        <td>{!! $conference->description_uz !!}</td>
                    </tr>
                    <tr>
                        <th>Description ru</th>
                        <td>{!! $conference->description_ru !!}</td>
                    </tr>
                    <tr>
                        <th>Description en</th>
                        <td>{!! $conference->description_en !!}</td>
                    </tr>
                    <tr>
                        <th>Is Active</th>
                        <td>{{$conference->is_active}}</td>
                    </tr>
                </table>
                <a href="{{route('admin.conference.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
