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
                <form action="{{route('admin.live_statistic.update', $live_statistic->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$live_statistic->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_1">INNOWEEK SAYTGA TASHRIFLAR</label>
                        <input type="number" name="titlenumber_1" class="form-control" id="titlenumber_1" placeholder="Innoweek saytiga tashriflar soni" value="{{$live_statistic->titlenumber_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_2">VIRTUAL KO'RISH</label>
                        <input type="number" name="titlenumber_2" class="form-control" id="titlenumber_2" placeholder="Virtual ko`rishlar soni" value="{{$live_statistic->titlenumber_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_3">KOMPANIYALAR ISHTIROKI SONI</label>
                        <input type="number" name="titlenumber_3" class="form-control" id="titlenumber_3" placeholder="Kompaniyalar ishtiroki soni" value="{{$live_statistic->titlenumber_3}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_1">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI UZB</label>
                        <input type="number" name="countryname_1" class="form-control" id="countryname_1" placeholder="Mamalakatlar bo`yicha ko`rishlar soni UZB" value="{{$live_statistic->countryname_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_2">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI TURK</label>
                        <input type="number" name="countryname_2" class="form-control" id="countryname_2" placeholder="Mamalakatlar bo`yicha ko`rishlar soni TURK" value="{{$live_statistic->countryname_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_3">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI ERON</label>
                        <input type="number" name="countryname_3" class="form-control" id="countryname_3" placeholder="Mamalakatlar bo`yicha ko`rishlar soni ERON" value="{{$live_statistic->countryname_3}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_4">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI GERMANIYA</label>
                        <input type="number" name="countryname_4" class="form-control" id="countryname_4" placeholder="Mamalakatlar bo`yicha ko`rishlar soni GERMANIYA" value="{{$live_statistic->countryname_4}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_5">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI AZERBAYJAN</label>
                        <input type="number" name="countryname_5" class="form-control" id="countryname_5" placeholder="Mamalakatlar bo`yicha ko`rishlar soni AZERBAYJAN" value="{{$live_statistic->countryname_5}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryname_all">MAMLAKATLAR BO'YICHA KO`RISHLAR SONI</label>
                        <input type="number" name="countryname_all" class="form-control" id="countryname_all" placeholder="Barcha mamalakatlar bo`yicha ko`rishlar soni" value="{{$live_statistic->countryname_all}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_1">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI UZB</label>
                        <input type="number" name="countryson_1" class="form-control" id="countryson_1" placeholder="Mamlakatlar bo`yicha tashriflar soni UZB" value="{{$live_statistic->countryson_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_2">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI TURK</label>
                        <input type="number" name="countryson_2" class="form-control" id="countryson_2" placeholder="Mamlakatlar bo`yicha tashriflar soni TURK" value="{{$live_statistic->countryson_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_3">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI ERON</label>
                        <input type="number" name="countryson_3" class="form-control" id="countryson_3" placeholder="Mamlakatlar bo`yicha tashriflar soni ERON" value="{{$live_statistic->countryson_3}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_4">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI GERAMNIYA</label>
                        <input type="number" name="countryson_4" class="form-control" id="countryson_4" placeholder="Mamlakatlar bo`yicha tashriflar soni GERMANIYA" value="{{$live_statistic->countryson_4}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_5">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI AZERBAYJAN</label>
                        <input type="number" name="countryson_5" class="form-control" id="countryson_5" placeholder="Mamlakatlar bo`yicha tashriflar soni AZERBAYJAN" value="{{$live_statistic->countryson_5}}" />
                    </div>

                    <div class="mb-3">
                        <label for="countryson_all">MAMLAKATLAR BO'YICHA TASHRIFLAR SONI</label>
                        <input type="number" name="countryson_all" class="form-control" id="countryson_all" placeholder="Barcha mamlakatlar bo`yicha tashriflar soni" value="{{$live_statistic->countryson_all}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_4">?????????????????????? ????????????????</label>
                        <input type="number" name="titlenumber_4" class="form-control" id="titlenumber_4" placeholder="?????????????????????? ????????????????" value="{{$live_statistic->titlenumber_4}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_5">O'RTACHA YOSH</label>
                        <input type="number" name="titlenumber_5" class="form-control" id="titlenumber_5" placeholder="O`rtacha yosh" value="{{$live_statistic->titlenumber_5}}" />
                    </div>

                    <div class="mb-3">
                        <label for="titlenumber_6">CHET DAVLATLARI SONI</label>
                        <input type="number" name="titlenumber_6" class="form-control" id="titlenumber_6" placeholder="Chet davlatlar soni" value="{{$live_statistic->titlenumber_6}}" />
                    </div>

                    <div class="mb-3">
                        <label for="agreement">INVESTITSIYA SHARTNOMALARI SONI</label>
                        <input type="number" name="agreement" class="form-control" id="agreement" placeholder="Investitsion shartnomalar soni" value="{{$live_statistic->agreement}}" />
                    </div>

                    <div class="mb-3">
                        <label for="language_number_1">KO`RGAZMAGA TASHRIF BUYURUVCHILAR SONI. GAP LANGUAGES</label>
                        <input type="number" name="language_number_1" class="form-control" id="language_number_1" placeholder="Ko`rgazmaga tashrif buyruvchilar soni. Gap Langauge 1" value="{{$live_statistic->language_number_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="language_number_2">KO`RGAZMAGA TASHRIF BUYURUVCHILAR SONI. GAP LANGUAGES</label>
                        <input type="number" name="language_number_2" class="form-control" id="language_number_2" placeholder="Ko`rgazmaga tashrif buyruvchilar soni. Gap Langauge 2" value="{{$live_statistic->language_number_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="language_number_3">KO`RGAZMAGA TASHRIF BUYURUVCHILAR SONI. GAP LANGUAGES</label>
                        <input type="number" name="language_number_3" class="form-control" id="language_number_3" placeholder="Ko`rgazmaga tashrif buyruvchilar soni. Gap Langauge 3" value="{{$live_statistic->language_number_3}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_1">Conference 1</label>
                        <input type="text" name="forum_1" class="form-control" id="forum_1" placeholder="Conference 1 Youtobe ID" value="{{$live_statistic->forum_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_2">Conference 2</label>
                        <input type="text" name="forum_2" class="form-control" id="forum_2" placeholder="Conference 2 Youtobe ID" value="{{$live_statistic->forum_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="forum_3">Conference 3</label>
                        <input type="text" name="forum_3" class="form-control" id="forum_3" placeholder="Conference 3 Youtobe ID" value="{{$live_statistic->forum_3}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_1">Conference 4</label>
                        <input type="text" name="yarmarka_1" class="form-control" id="yarmarka_1" placeholder="Conference 4 Youtobe ID" value="{{$live_statistic->yarmarka_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_2">Conference 5</label>
                        <input type="text" name="yarmarka_2" class="form-control" id="yarmarka_2" placeholder="Conference 5 Youtobe ID" value="{{$live_statistic->yarmarka_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="yarmarka_3">Conference 6</label>
                        <input type="text" name="yarmarka_3" class="form-control" id="yarmarka_3" placeholder="Conference 6 Youtobe ID" value="{{$live_statistic->yarmarka_3}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




