@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Archive title uz</th>
                        <td>{{$speaker->archiveTable->year}}</td>
                    </tr>
{{--                    {{dd($speaker->description_uz)}}--}}
                    <tr>
                        <th>Fullname</th>
                        <td>{{$speaker->fullname}}</td>
                    </tr>
                    <tr>
                        <th>Description uz</th>
                        <td>{!!$speaker->description_uz!!}</td>
                    </tr>
                        <th>Facebook url</th>
                        <td>{{$speaker->facebook_url}}</td>
                    </tr>
                    <tr>
                        <th>Instagram url</th>
                        <td>{{$speaker->instagram_url}}</td>
                    </tr>
                    <tr>
                        <th>Twitter url</th>
                        <td>{{$speaker->twitter_url}}</td>
                    </tr>
                    <tr>
                        <th>LinkedIn</th>
                        <td>{{$speaker->linkedin_url }}</td>
                    </tr>
                </table>
                <a href="{{route('admin.speaker.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
