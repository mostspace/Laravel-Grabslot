@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">店舗一覧 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">都道府県</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/hall-data/{{ $region->id }}" class="color-white font-weight-bolder p-link">{{ $region->name }}</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/hall-data/{{ $region->id }}/{{ $store->id }}" class="color-white font-weight-bolder p-link">{{ $store->name }}</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        {{ $modelName }} 
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
                <div class="col-sm-12 col-md-9 col-lg-9 pr-10">
                    <div>
                        <h1 class="color-white fs-5">{{ modelName }} データまとめ</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="mt-10">
                        <!-- <p class="fs-7 color-white">フィルタ欄に機種名や台番号を入力でデータ絞り込み</p> -->
                        <!-- <p class="fs-7 color-white">項目名クリックでデータ並び替え(昇順⇔降順)</p> -->
                        <!-- <p class="fs-7 color-white">見切れている項目は横スクロールで閲覧可能</p> -->
                    </div>
                   
                    <div class="p-panel mt-10">
                        <!--begin: Datatable-->
                        <table class="table table-checkable" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>機種名</th>
                                    <th>台番号</th>
                                    <th>G数</th>
                                    <th>RB</th>
                                    <th>BB</th>
                                    <th>ART</th>
                                    <th>合成確率</th>
                                    <th>BB確率</th>
                                    <th>RB確率</th>
                                    <th>ART確率</th>
                                </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->
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
    var store_id = @json($store->id);
    var store_data_id = @json($store_data_by_date->id);
</script>

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/ajax-tables/store-data-list.js') }}"></script>
<!--end::Page Scripts-->

<!-- <script>
    $(document).ready(function() {
        $(".date-data").click(function() {
            window.location.href = "/date-data/" + $(this).text();
        });
    });
</script> -->

@endsection