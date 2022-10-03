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
                        <input type="number" name="titlenumber_1" class="form-control" id="titlenumber_1" placeholder="Innoweek saytiga tashriflar soni" value="{{old('titlenumber_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_2">VIRTUAL KO'RISH</label>
                        <input type="number" name="titlenumber_2" class="form-control" id="titlenumber_2" placeholder="Virtual ko`rishlar soni" value="{{old('titlenumber_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_3">KOMPANIYALAR ISHTIROKI SONI</label>
                        <input type="number" name="titlenumber_3" class="form-control" id="titlenumber_3" placeholder="Kompaniyalar ishtiroki soni" value="{{old('titlenumber_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_1">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI UZB</label>
                        <input type="number" name="countryname_1" class="form-control" id="countryname_1" placeholder="Mamalakatlar bo`yicha ko`rishlar soni UZB" value="{{old('countryname_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_2">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI TURK</label>
                        <input type="number" name="countryname_2" class="form-control" id="countryname_2" placeholder="Mamalakatlar bo`yicha ko`rishlar soni TURK" value="{{old('countryname_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_3">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI RUS</label>
                        <input type="number" name="countryname_3" class="form-control" id="countryname_3" placeholder="Mamalakatlar bo`yicha ko`rishlar soni RUS" value="{{old('countryname_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_4">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI TATAR</label>
                        <input type="number" name="countryname_4" class="form-control" id="countryname_4" placeholder="Mamalakatlar bo`yicha ko`rishlar soni TATAR" value="{{old('countryname_4')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_5">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI AZERBAYJAN</label>
                        <input type="number" name="countryname_5" class="form-control" id="countryname_5" placeholder="Mamalakatlar bo`yicha ko`rishlar soni AZERBAYJAN" value="{{old('countryname_5')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_all">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI</label>
                        <input type="number" name="countryname_all" class="form-control" id="countryname_all" placeholder="Barcha mamalakatlar bo`yicha ko`rishlar soni " value="{{old('countryname_all')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_1">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI UZB</label>
                        <input type="number" name="countryson_1" class="form-control" id="countryson_1" placeholder="Mamlakatlar bo`yicha tashriflar soni UZB" value="{{old('countryson_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_2">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI TURK</label>
                        <input type="number" name="countryson_2" class="form-control" id="countryson_2" placeholder="Mamlakatlar bo`yicha tashriflar soni TURK" value="{{old('countryson_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_3">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI RUS</label>
                        <input type="number" name="countryson_3" class="form-control" id="countryson_3" placeholder="Mamlakatlar bo`yicha tashriflar soni RUS" value="{{old('countryson_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_4">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI TATAR</label>
                        <input type="number" name="countryson_4" class="form-control" id="countryson_4" placeholder="Mamlakatlar bo`yicha tashriflar soni TATAR" value="{{old('countryson_4')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_5">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI AZERBAYJAN</label>
                        <input type="number" name="countryson_5" class="form-control" id="countryson_5" placeholder="Mamlakatlar bo`yicha tashriflar soni AZERBAYJAN" value="{{old('countryson_5')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_all">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI</label>
                        <input type="number" name="countryson_all" class="form-control" id="countryson_all" placeholder="Barcha mamlakatlar bo`yicha tashriflar soni" value="{{old('countryson_all')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_4">ПОСЕТИТЕЛЕЙ ВЫСТАВКИ</label>
                        <input type="number" name="titlenumber_4" class="form-control" id="titlenumber_4" placeholder="ПОСЕТИТЕЛЕЙ ВЫСТАВКИ" value="{{old('titlenumber_4')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_5">O'RTACHA YOSH</label>
                        <input type="number" name="titlenumber_5" class="form-control" id="titlenumber_5" placeholder="O`rtacha yosh" value="{{old('titlenumber_5')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_6">CHET DAVLATLARI SONI</label>
                        <input type="number" name="titlenumber_6" class="form-control" id="titlenumber_6" placeholder="Chet davlatlar soni" value="{{old('titlenumber_6')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="agreement">INVESTITSION SHARTNOMALARI SONI</label>
                        <input type="number" name="agreement" class="form-control" id="agreement" placeholder="Investitsion shartnomalar soni" value="{{old('agreement')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="language_number_1">KO`RGAZMAGA TASHRIF BUYRUVCHILAR SONI. GAP LANGUAGES</label>
                        <input type="number" name="language_number_1" class="form-control" id="language_number_1" placeholder="Ko`rgazmaga tashrif buyruvchilar soni. Gap Langauge 1" value="{{old('language_number_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="language_number_2">KO`RGAZMAGA TASHRIF BUYURUVCHILAR SONI. GAP LANGUAGES</label>
                        <input type="number" name="language_number_2" class="form-control" id="language_number_2" placeholder="Ko`rgazmaga tashrif buyruvchilar soni. Gap Langauge 2" value="{{old('language_number_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="language_number_3">KO`RGAZMAGA TASHRIF BUYURUVCHILAR SONI. GAP LANGUAGES</label>
                        <input type="number" name="language_number_3" class="form-control" id="language_number_3" placeholder="Ko`rgazmaga tashrif buyruvchilar soni. Gap Langauge 3" value="{{old('language_number_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_1">FORUM 1</label>
                        <input type="text" name="forum_1" class="form-control" id="forum_1" placeholder="FORUM 1" value="{{old('forum_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_2">FORUM 2</label>
                        <input type="text" name="forum_2" class="form-control" id="forum_2" placeholder="FORUM 2" value="{{old('forum_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_3">FORUM 3</label>
                        <input type="text" name="forum_3" class="form-control" id="forum_3" placeholder="FORUM 3" value="{{old('forum_3')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_1">YARMARKA 1</label>
                        <input type="text" name="yarmarka_1" class="form-control" id="yarmarka_1" placeholder="YARMARKA 1" value="{{old('yarmarka_1')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_2">YARMARKA 2</label>
                        <input type="text" name="yarmarka_2" class="form-control" id="yarmarka_2" placeholder="YARMARKA 2" value="{{old('yarmarka_2')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_3">YARMARKA 3</label>
                        <input type="text" name="yarmarka_3" class="form-control" id="yarmarka_3" placeholder="YARMARKA 3" value="{{old('yarmarka_3')}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




