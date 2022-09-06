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
                    <tr>
                        <th>User</th>
                        <td>{{$speaker->usersTable->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Fullname</th>
                        <td>{{$speaker->full_name}}</td>
                    </tr>
                    <tr>
                        <th>Job</th>
                        <td>{{$speaker->job}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{asset('uploads/speaker/' .$speaker->image)}}" alt="img" with="100px" height="60px">
                        </td>
                    </tr>
                    <tr>
                        <th>Description uz</th>
                        <td>{!!$speaker->description_uz!!}</td>
                    </tr>
                        <th>Facebook url</th>
                        <td>{{$speaker->facebook_ur}}</td>
                    </tr>
                    <tr>
                        <th>Youtube url</th>
                        <td>{{$speaker->youtube_url}}</td>
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
                <a href="{{route('admin.speakers.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
