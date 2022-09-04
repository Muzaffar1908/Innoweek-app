@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>Name uz</th>
                        <td>{{$menu->name_uz}}</td>
                    </tr>
                    <tr>
                        <th>Name ru</th>
                        <td>{{$menu->name_ru}}</td>
                    </tr>
                    <tr>
                        <th>Name en</th>
                        <td>{{$menu->name_en}}</td>
                    </tr>
                    <tr>
                        <th>Parent ID</th>
                        <td>{{$menu->parent_id}}</td>
                    </tr>
                    <tr>
                        <th>Is live</th>
                        <td>{{$menu->is_live}}</td>
                    </tr>
                    <tr>
                        <th>Live url</th>
                        <td>{{$menu->live_url}}</td>
                    </tr>
                    <tr>
                        <th>Is Active</th>
                        <td>{{$menu->is_active}}</td>
                    </tr>
                </table>
                <a href="{{route('admin.menu.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>
        </div>
    </div>

@endsection