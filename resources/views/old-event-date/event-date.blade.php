@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">旧イベント日 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/old-event-date" class="color-white font-weight-bolder p-link">旧イベント日</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/old-event-date" class="color-white font-weight-bolder p-link">北海道</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        {{ $eventDate }}
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
                            <h1 class="color-white fs-5">{{ $eventDate }}</h1>
                            <div class="divider w-100px"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-panel mt-15 w-100">
                            <table class="table table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>ホール名</th>
                                        <th>市区郡</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">123横浜西口店</a></td>
                                        <td>横浜市西区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">A-MAX今井IC店</a></td>
                                        <td>横浜市保土ヶ谷区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">ARROW平塚店</a></td>
                                        <td>平塚市</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">BEES鶴ケ峰店</a></td>
                                        <td>横浜市旭区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">BRAJAN戸塚店</a></td>
                                        <td>横浜市栄区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">123横浜西口店</a></td>
                                        <td>横浜市西区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">A-MAX今井IC店</a></td>
                                        <td>横浜市保土ヶ谷区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">ARROW平塚店</a></td>
                                        <td>平塚市</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">BEES鶴ケ峰店</a></td>
                                        <td>横浜市旭区</td>
                                    </tr>
                                    <tr>
                                        <td><a href="/hall-data/prefecture/data-list" class="p-link">BRAJAN戸塚店</a></td>
                                        <td>横浜市栄区</td>
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
@endsection