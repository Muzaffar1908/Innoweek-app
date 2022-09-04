@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>User name</th>
                        <td>{{$userticket->userTable->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Ticket serial</th>
                        <td>{{$userticket->ticket_serial}}</td>
                    </tr>
                    <tr>
                        <th>Ticket url</th>
                        <td>{{$userticket->ticket_url}}</td>
                    </tr>
                    <tr>
                        <th>Ticket image</th>
                        <td>
                            <img src="{{asset('uploads/ticket_image/' .$userticket->ticket_image)}}" alt="img" with="100px" height="60px">
                        </td>
                    </tr>
                </table>
                <a href="{{route('admin.userticket.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
