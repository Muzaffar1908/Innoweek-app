@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>User name</th>
                        <td>{{$userticket->usersTable->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Archive year</th>
                        <td>{{$userticket->archiveTable->year}}</td>
                    </tr>

                    <tr>
                        <th>Ticket image</th>
                        <td>
                            {{$userticket->ticket_id}}
                        </td>
                    </tr>
                </table>
                <a href="{{route('admin.userticket.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection
