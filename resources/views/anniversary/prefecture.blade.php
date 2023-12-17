@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">周年日 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/anniversary" class="color-white font-weight-bolder p-link">周年日</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        {{ $prefecture }}
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
                <div class="col-sm-12 col-md-9 col-lg-9 pr-20 pl-8">
                    <div class="row">
                        <div>
                            <h1 class="color-white fs-5">{{ $prefecture }}</h1>
                            <div class="divider w-100px"></div>
                        </div>

                        <div class="mt-15">
                            <img src="{{ asset('assets/media/img/drill-slot.gif') }}" class="w-100" alt="">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-20 w-100">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-6 font-weight-bolder ml-5 color-white">周年日一覧</span>
                        </div>

                        <div class="mt-10">
                            <p class="fs-7 color-white">ホールの周年日を検索出来ます。</p>
                            <p class="fs-7 color-white">※月をクリックで対象のホール一覧へジャンプします。</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="p-panel w-100 mt-10">
                            <!--begin: Datatable-->
                            <table class="table table-checkable table-center" id="kt_datatable">
                                <thead>
                                    <tr class="bg-main">
                                        <th class="text-center">月一覧</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">1月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">2月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">3月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">4月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">5月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">6月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">7月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">8月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">9月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">10月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">11月</a></td>
                                    </tr>
                                    <tr>
                                        <td class="td-border"><a class="p-link text-underline month-list">12月</a></td>
                                    </tr>                                    
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                </div>

                <!-- @include('layouts.right-sidebar') -->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('add_js')
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/features/charts/apexcharts.js"></script>
<!--end::Page Scripts-->
<script src="assets/custom/script.js"></script>

<script>
    $(document).ready(function() {
        var prefecture = @json($prefecture);
        $(".month-list").click(function() {
            window.location.href = "/anniversary/" + prefecture + "/" + $(this).text();
        });
    });
</script>

@endsection