@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">旧イベント日 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/old-event-date" class="color-white font-weight-bolder p-link">旧イベント日</a>
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
                            <span class="fs-6 font-weight-bolder ml-5 color-white">旧イベント日一覧</span>
                        </div>

                        <div class="mt-10">
                            <p class="fs-7 color-white">旧イベント日からホールを検索出来ます。</p>
                            <p class="fs-7 color-white">※旧イベント日クリックで対象のホール一覧へジャンプします。</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="p-panel w-100 mt-10">
                            <!--begin: Datatable-->
                            <table class="table table-checkable" id="kt_datatable">
                                <thead>
                                    <tr class="bg-main">
                                        <th class="text-center">旧イベント日</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">1の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">2の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">3の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">4の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">5の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">6の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">7の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">8の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">9の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">0の付く日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">ゾロ目日(11日、22日)</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">月日がゾロ目日</a></td>
                                    </tr>
                                    <tr>
                                        <td><a class="p-link text-underline eventDate">その他</a></td>
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
        $(".eventDate").click(function() {
            window.location.href = "/old-event-date/" + prefecture + "/" + $(this).text();
        });
    });
</script>

@endsection