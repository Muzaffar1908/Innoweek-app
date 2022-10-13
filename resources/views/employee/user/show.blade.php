@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Firstname</th>
                        <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Lastname</th>
                        <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                        <th>Middlename</th>
                        <td>{{$user->middle_name}}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{$user->gender}}</td>
                    </tr>
                    <tr>
                        <th>Birth Date</th>
                        <td>{{$user->birth_date}}</td>
                    </tr>
                    <tr>
                        <th>User image</th>
                        <td>
                            <img src="{{ asset('/upload/config/'.$user->user_image) }}" alt="img" with="100px"
                                                    height="60px">
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                        <th>Balance</th>
                        <td>{{$user->balance}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone number</th>
                        <td>{{$user->phone}}</td>
                    </tr>
                    <tr>
                        <th>Provider name</th>
                        <td>{{$user->provider_name}}</td>
                    </tr>
                    <tr>
                        <th>Provider ID</th>
                        <td>{{$user->provider_id}}</td>
                    </tr>
                </table>
                <a href="{{route('admin.user.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
