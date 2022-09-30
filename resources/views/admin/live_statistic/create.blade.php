@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.live_statistic.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('warning'))
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <div class="alert-body">
                                <div class="alert-title">Error</div>
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif


            <div class="card-body">
                <div class="basic-form">
                <form action="{{route('admin.live_statistic.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{old('id')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_1">INNOWEEK SAYTGA TASHRIFLAR</label>
                        <input type="number" name="titlenumber_1" class="form-control" id="titlenumber_1" placeholder="Title number 1 enter" value="{{old('titlenumber_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_2">VIRTUAL KO'RISH</label>
                        <input type="number" name="titlenumber_2" class="form-control" id="titlenumber_2" placeholder="Title number 2 enter" value="{{old('titlenumber_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_3">KOMPANIYALAR ISHTIROKI SONI</label>
                        <input type="number" name="titlenumber_3" class="form-control" id="titlenumber_3" placeholder="Title number 3 enter" value="{{old('titlenumber_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_1">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI UZB</label>
                        <input type="number" name="countryname_1" class="form-control" id="countryname_1" placeholder="Country name 1 enter" value="{{old('countryname_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_2">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI TURK</label>
                        <input type="number" name="countryname_2" class="form-control" id="countryname_2" placeholder="Country name 2 enter" value="{{old('countryname_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_3">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI RUS</label>
                        <input type="number" name="countryname_3" class="form-control" id="countryname_3" placeholder="Country name 3 enter" value="{{old('countryname_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_4">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI TATAR</label>
                        <input type="number" name="countryname_4" class="form-control" id="countryname_4" placeholder="Country name 4 enter" value="{{old('countryname_4')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_5">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI AZERBAYJAN</label>
                        <input type="number" name="countryname_5" class="form-control" id="countryname_5" placeholder="Country name 5 enter" value="{{old('countryname_5')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_all">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI</label>
                        <input type="number" name="countryname_all" class="form-control" id="countryname_all" placeholder="Country name all enter" value="{{old('countryname_all')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_1">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI UZB</label>
                        <input type="number" name="countryson_1" class="form-control" id="countryson_1" placeholder="Country son 1 enter" value="{{old('countryson_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_2">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI TURK</label>
                        <input type="number" name="countryson_2" class="form-control" id="countryson_2" placeholder="Country son 2 enter" value="{{old('countryson_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_3">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI RUS</label>
                        <input type="number" name="countryson_3" class="form-control" id="countryson_3" placeholder="Country son 3 enter" value="{{old('countryson_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_4">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI TATAR</label>
                        <input type="number" name="countryson_4" class="form-control" id="countryson_4" placeholder="Country son 4 enter" value="{{old('countryson_4')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_5">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI AZERBAYJAN</label>
                        <input type="number" name="countryson_5" class="form-control" id="countryson_5" placeholder="Country son 5 enter" value="{{old('countryson_5')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_all">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI</label>
                        <input type="number" name="countryson_all" class="form-control" id="countryson_all" placeholder="Country son all enter" value="{{old('countryson_all')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_4">ПОСЕТИТЕЛЕЙ ВЫСТАВКИ</label>
                        <input type="number" name="titlenumber_4" class="form-control" id="titlenumber_4" placeholder="Title number 4 enter" value="{{old('titlenumber_4')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_5">O'RTACHA YOSH</label>
                        <input type="number" name="titlenumber_5" class="form-control" id="titlenumber_5" placeholder="Title number 5 enter" value="{{old('titlenumber_5')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_6">CHET DAVLATLARI SONI</label>
                        <input type="number" name="titlenumber_6" class="form-control" id="titlenumber_6" placeholder="Title number 6 enter" value="{{old('titlenumber_6')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_1">FORUM 1</label>
                        <input type="url" name="forum_1" class="form-control" id="forum_1" placeholder="FORUM 1 enter" value="{{old('forum_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_2">FORUM 2</label>
                        <input type="url" name="forum_2" class="form-control" id="forum_2" placeholder="FORUM 2 enter" value="{{old('forum_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_3">FORUM 3</label>
                        <input type="url" name="forum_3" class="form-control" id="forum_3" placeholder="FORUM 3 enter" value="{{old('forum_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_1">YARMARKA 1</label>
                        <input type="url" name="yarmarka_1" class="form-control" id="yarmarka_1" placeholder="YARMARKA 1 enter" value="{{old('yarmarka_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_2">YARMARKA 2</label>
                        <input type="url" name="yarmarka_2" class="form-control" id="yarmarka_2" placeholder="YARMARKA 2 enter" value="{{old('yarmarka_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_3">YARMARKA 3</label>
                        <input type="url" name="yarmarka_3" class="form-control" id="yarmarka_3" placeholder="YARMARKA 3 enter" value="{{old('yarmarka_3')}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




