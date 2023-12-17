@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">周年日 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/old-event-date" class="color-white font-weight-bolder p-link">周年日</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/old-event-date" class="color-white font-weight-bolder p-link">北海道</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        {{ $month }}
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
                            <h1 class="color-white fs-5">{{ $month }}</h1>
                            <div class="divider w-100px"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-panel mt-15 w-100">
                            <table class="table table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>周年日</th>
                                        <th>ホール名</th>
                                        <th>市区郡</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1月8日</td>
                                        <td><a class="p-link data-list">ひまわり苫小牧店</a></td>
                                        <td>岩内郡</td>
                                    </tr>
                                    <tr>
                                        <td>1月9日</td>
                                        <td><a class="p-link data-list">マルハン根室店</a></td>
                                        <td>日高郡</td>
                                    </tr>
                                    <tr>
                                        <td>1月10日</td>
                                        <td><a class="p-link data-list">ベガスベガス発寒店</a></td>
                                        <td>根室市</td>
                                    </tr>
                                    <tr>
                                        <td>1月11日</td>
                                        <td><a class="p-link data-list">プラスイーグル釧路星が浦店</a></td>
                                        <td>帯広市</td>
                                    </tr>
                                    <tr>
                                        <td>1月12日</td>
                                        <td><a class="p-link data-list">ロイヤル網走店</a></td>
                                        <td>岩見沢市</td>
                                    </tr>                                    
                                </tbody>
                            </table>
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
        $(".data-list").click(function() {
            window.location.href = "/hall-data/" + prefecture + "/" + $(this).text();
        });
    });
</script>

@endsection