@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <div class="container">
        <h1 class="color-white fs-2 text-center font-weight-bolder">店舗一覧</h1>
        <p class="fs-7 color-white text-center mt-7">
            <a href="/" class="color-white font-weight-bolder p-link">都道府県</a>
            <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
            <a href="/hall-data/{{ $region->id }}" class="color-white font-weight-bolder p-link">{{ $region->name }}</a>
            <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
            {{ $store->name }}
        </p>
    </div>
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
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div>
                        <h1 class="color-white fs-5">{{ $store->name }}</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="mt-10">
                        <p class="fs-7 color-white">日付をクリックすると詳細データが閲覧出来ます。</p>
                        <p class="fs-7 color-white">※通信状況やシステムの影響により実際の数値とは異なる場合があります。</p>
                        <p class="fs-7 color-white">※サイトの動作を安定させる都合上、詳細データの保持期間は1年1カ月となります。</p>
                    </div>

                    <div class="p-panel mt-10" id="modelTable">
                        <!--begin: Datatable-->
                        <table class="table table-checkable" id="kt_datatables">
                            <thead>
                                <tr>
                                    <th>設置機種一覧</th>
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
    var region = @json($region);
    var store = @json($store);
</script>

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/ajax-tables/model-list.js') }}"></script>
<!--end::Page Scripts-->

<script>
    $(document).ready(function() {
        $("#modelTable").on("click", ".store-model", function() {
            window.location.href = '/model-detail-data/' + region.id + '/' + store.id + '/' + $(this).text();
        });
    });
</script>
@endsection