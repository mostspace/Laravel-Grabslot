@extends('layouts.admin.app')

@section('bread_crumb')
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bolder mt-2 mb-2 mr-5 font-white">宣伝ちらし印刷</h5>
<!--end::Page Title-->
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">宣伝ちらし印刷</h3>
                    </div>
                    <div class="card-toolbar">
                        <button type="reset" class="btn btn-success mr-2" data-toggle="modal" data-target="#printModal">印刷する</button>
                    </div>
                </div>
                <div class="card-body px-10">
                    <div class="text-center mt-15">
                        <h1 class="font-weight-bolder fs-2">パチスロ高設定予測サイト ~GRAB~</h1>
                        <h3 class="my-10 fs-5">【明日からあなたの台選びが変わる！】</h3>
                        <p class="fs-7 font-weight-bold">「GRAB」とは掴み取るという意味です。</p>
                        <p class="fs-7 font-weight-bold">このサイトを活用して高設定を、勝利を掴み取って下さい！</p>
                    </div>

                    <div class="mt-15">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group row">
                                <label class="col-form-label fs-7 font-weight-bold">店舗:</label>
                                <div class="col-10">
                                    <input id="store" class="form-control" type="text" value="" />
                                </div>
                            </div>

                            <div class="form-group row" id="modelInput">
                                <label class="col-form-label fs-7 font-weight-bold">機種:</label>
                                <div class="col-10">
                                    <input id="model" class="form-control" type="text" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div id="storeTable">
                            <table class="table table-separate table-bordered table-checkable" id="store_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>11/1(水)</th>
                                        <th>11/2(木)</th>
                                        <th>11/3(金)</th>
                                        <th>11/4(土)</th>
                                        <th>11/5(日)</th>
                                        <th>11/6(月)</th>
                                        <th>11/7(火)</th>
                                        <th>11/8(水)</th>
                                        <th>11/9(木)</th>
                                        <th>11/10(金)</th>
                                        <th>11/11(土)</th>
                                        <th>11/12(日)</th>
                                        <th>11/13(月)</th>
                                        <th>11/14(火)</th>
                                        <th>11/15(水)</th>
                                        <th>11/16(木)</th>
                                        <th>11/17(金)</th>
                                        <th>11/18(日)</th>
                                        <th>11/20(月)</th>
                                        <th>11/21(月)</th>
                                        <th>11/22(月)</th>
                                        <th>11/23(月)</th>
                                        <th>11/24(月)</th>
                                        <th>11/25(月)</th>
                                        <th>11/26(月)</th>
                                        <th>11/27(月)</th>
                                        <th>11/28(月)</th>
                                        <th>11/29(月)</th>
                                        <th>11/30(月)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">1</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                    </tr>
                                    <tr>
                                        <td class="">2</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">3</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">4</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                    </tr>
                                    <tr>
                                        <td class="">5</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                    </tr>
                                    <tr>
                                        <td class="">6</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                    </tr>
                                    <tr>
                                        <td class="">7</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">8</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">9</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">10</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">100</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 col-lg-6 mt-10">
                            <div class="form-group row" id="modelInput">
                                <label class="col-form-label fs-7 font-weight-bold">機種:</label>
                                <div class="col-10">
                                    <input id="model" class="form-control" type="text" value="" />
                                </div>
                            </div>
                        </div>

                        <div id="modelTable" class="">
                            <table class="table table-separate table-bordered table-checkable" id="model_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>11/1(水)</th>
                                        <th>11/2(木)</th>
                                        <th>11/3(金)</th>
                                        <th>11/4(土)</th>
                                        <th>11/5(日)</th>
                                        <th>11/6(月)</th>
                                        <th>11/7(火)</th>
                                        <th>11/8(水)</th>
                                        <th>11/9(木)</th>
                                        <th>11/10(金)</th>
                                        <th>11/11(土)</th>
                                        <th>11/12(日)</th>
                                        <th>11/13(月)</th>
                                        <th>11/14(火)</th>
                                        <th>11/15(水)</th>
                                        <th>11/16(木)</th>
                                        <th>11/17(金)</th>
                                        <th>11/18(日)</th>
                                        <th>11/20(月)</th>
                                        <th>11/21(月)</th>
                                        <th>11/22(月)</th>
                                        <th>11/23(月)</th>
                                        <th>11/24(月)</th>
                                        <th>11/25(月)</th>
                                        <th>11/26(月)</th>
                                        <th>11/27(月)</th>
                                        <th>11/28(月)</th>
                                        <th>11/29(月)</th>
                                        <th>11/30(月)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">1</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                    </tr>
                                    <tr>
                                        <td class="">2</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">3</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">4</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                    </tr>
                                    <tr>
                                        <td class="">5</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                    </tr>
                                    <tr>
                                        <td class="">6</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                    </tr>
                                    <tr>
                                        <td class="">7</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">8</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">9</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">100</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                    </tr>
                                    <tr>
                                        <td class="">10</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-white">-600</td>
                                        <td class="tb-color-blue">2900</td>
                                        <td class="tb-color-dark-blue">3100</td>
                                        <td class="tb-color-pink">-100</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-dark-blue">4000</td>
                                        <td class="tb-color-pink">-1100</td>
                                        <td class="tb-color-pink">-1400</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-blue">2000</td>
                                        <td class="tb-color-pink">-1200</td>
                                        <td class="tb-color-dark-blue">3400</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-white">600</td>
                                        <td class="tb-color-red">-5700</td>
                                        <td class="tb-color-pink">-500</td>
                                        <td class="tb-color-pink">-1300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-white">300</td>
                                        <td class="tb-color-blue">1200</td>
                                        <td class="tb-color-pink">100</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

                    <div class="mt-15">
                        <h3 class="font-weight-bolder">狙い台が明確になる！</h3>
                        <div class="mt-7">
                            <h4 class="font-weight-bold">● ホールの癖が丸わかり</h6>
                            <div class="pl-15">
                                <p class="fs-7">並びで入りやすいのか・・角が強いのか・・</p>
                                <p class="fs-7">据え置きをしてくるのか・・大きく凹んだ翌日は・・</p>
                            </div>
                            <h6 class="mt-3">● 出玉状況を点ではなく面でみる！</h6>
                        </div>
                        
                    </div>

                    <div class="mt-15">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <h3 class="font-weight-bolder">＜表の見方＞</h6>
                                <div class="mt-7">
                                    <p class="font-weight-bold fs-7">数字はその日のトータル差枚数です</p>
                                    <p class="font-weight-bold fs-7">差枚数プラス台はブルーで表示、マイナス台は赤系で表示</p>
                                    <p class="font-weight-bold fs-7">差枚数ごとのセル色</p>
                                </div>
                                
                                <div class="mt-7">
                                    <div class="d-flex align-items-center">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-8 tb-color-white border">白</div>
                                        <p class="fs-7 mb-0 ml-3">・・0～900枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 tb-color-light-blue">水色</div>
                                        <p class="fs-7 mb-0 ml-3">・・1000～2900枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 tb-color-blue">青</div>
                                        <p class="fs-7 mb-0 ml-3">・・3000～4900枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 tb-color-dark-blue text-white">紺</div>
                                        <p class="fs-7 mb-0 ml-3">・・5000枚以上</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 tb-color-pink">ピンク</div>
                                        <p class="fs-7 mb-0 ml-3">・・100～2900枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 tb-color-red">赤</div>
                                        <p class="fs-7 mb-0 ml-3">・・-3000枚以上</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 tb-color-gray">グレー</div>
                                        <p class="fs-7 mb-0 ml-3">・・回転数2000回転未満台</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 align-items-end">
                                <!-- Add this to the body of your HTML file -->
                                <div id="qrcode"  class="qr-code-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->


<!--begin::Modal-->
<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">印刷部数</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <input type="number" class="form-control" placeholder="印刷部数を入力してください">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">クローズ</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

@endsection

@section('add_js')
<!-- Add this to the head of your HTML file -->
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<script>
    $(document).ready(function() {

        // Your data to be encoded in the QR code
        var data = 'https://grab-slot.co.jp';

        // Generate QR code
        var qrcode = new QRCode(document.getElementById('qrcode'), {
            text: data,
            width: 158,
            height: 158
        });

        // Store & Model table

        // Search Store
        // $("#modelInput").hide();

        // $("#store").keydown(function(event) {
        //     if(event.which == 13) {
        //         if($(this).val()) {
        //             $("#modelInput").show();
        //         }
        //     }
        // });

        // $("#store").on('keyup', function(event) {
        //     if(event.key === 'Delete' || event.key === 'Backspace') {
        //         if($(this).val().trim() === '') {
        //             $("#modelInput").hide();
        //         }
        //     }
        // });

    });


</script>

<!-- <script>
    "use strict";
    var KTDatatablesBasicScrollable = function() {

        var initTable1 = function() {
            var table = $('#store_table');

            // begin second table
            table.DataTable({
                scrollY: '50vh',
                scrollX: true,
                scrollCollapse: true,
            });
        };

        var initTable2 = function() {
            var table = $('#model_table');

            // begin second table
            table.DataTable({
                scrollY: '50vh',
                scrollX: true,
                scrollCollapse: true,
            });
        };

        return {

            //main function to initiate the module
            init: function() {
                initTable1();
                initTable2();
            },

        };

    }();

    jQuery(document).ready(function() {
        KTDatatablesBasicScrollable.init();
    });
</script> -->

@endsection
