@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">店舗一覧</h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">都道府県</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        {{ $region->name }}
    </p>
</div>
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9 pr-10 pl-8">    
                    <div class="row">
                        <div class="w-100">
                            <h1 class="color-white fs-5">{{ $region->name }}</h1>
                            <div class="divider w-100px"></div>
                        </div>

                        <div class="p-sub-title d-flex align-items-center mt-15">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-6 font-weight-bolder ml-5 color-white">店舗一覧</span>
                        </div>

                        <div class="w-100 mt-10">
                            <ul class="color-white fs-7 pl-5">
                                <li class="list-unstyled ml-n8 py-1">【使い方】</li>
                                <li class="py-1">検索欄にホール名や市区郡名を入力でホール検索</li>
                                <li class="py-1">項目名クリックでデータ並び替え(昇順⇔降順)</li>
                                <!-- <li class="py-1 list-unstyled ml-n6 d-flex">
                                    <div class="d-flex w-100 align-items-center">
                                        <label class="mr-5">検索:</label>
                                        <input class=" form-control w-450px h-auto text-white placeholder-white opacity-70 bg-dark-o-70 py-4 px-8 p-form-control rounded-10" id="" type="text" placeholder="" name="" />
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-panel mt-10 w-100">
                            <!--begin: Datatable-->
                            <table class="table table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>店舗</th>
                                        <th>市区郡</th>
                                    </tr>
                                </thead>
                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('add_js')

<script>
    var region_id = @json($region->id);
    // var region_name = @json($region->name);
</script>


<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/ajax-tables/hall-data-list.js') }}"></script>
<!--end::Page Scripts-->



<!-- <script>
    $(document).ready(function() {
        $(".data-list").click(function() {
            window.location.href = "/hall-data/" + prefecture + "/" + $(this).text();
        });
    });
</script> -->

@endsection