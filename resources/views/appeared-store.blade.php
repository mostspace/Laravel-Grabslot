@extends('layouts.app')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row mt-35">
                <div class="col-sm-12 col-md-9 col-lg-9 pr-20 pl-8">
                    <div class="row">
                        <div>
                            <h1 class="color-white fs-5">北海道</h1>
                            <div class="divider w-100px"></div>
                        </div>

                        <div class="mt-15">
                            <img src="{{ asset('assets/media/img/drill-slot.gif') }}" class="w-100" alt="">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-15">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-6 font-weight-bolder ml-5 color-white">北海道・東北</span>
                        </div>

                        <div class="w-100 mt-10">
                            <ul class="color-white fs-7 pl-5">
                                <li class="list-unstyled ml-n8 py-1">【使い方】</li>
                                <li class="py-1">検索欄に日付を入力で記事検索</li>
                                <li class="py-1">項目名クリックで日付並び替え(昇順⇔降順)</li>
                                <li class="py-1 list-unstyled ml-n6 d-flex">
                                    <div class="d-flex w-100 align-items-center">
                                        <label class="mr-5">検索:</label>
                                        <input class=" form-control w-450px h-auto text-white placeholder-white opacity-70 bg-dark-o-70 py-4 px-8 p-form-control rounded-10" id="" type="text" placeholder="" name="" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="row">
                        <div class="p-panel w-100 mt-15">
                            <!--begin: Datatable-->
                            <table class="table table-checkable" id="kt_datatable">
                                <thead>
                                    <tr class="bg-main">
                                        <th>日付</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/11</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/10</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/09</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/08</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/07</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/06</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/05</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/04</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/date-pickup" class="p-link text-underline">2022/11/03</a></td>
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
@endsection