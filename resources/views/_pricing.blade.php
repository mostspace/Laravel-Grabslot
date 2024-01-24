@extends('layouts.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid py-20" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="p-panel card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chart text-primary"></i>
                            </span>
                            <h4 class="card-label text-white">コース選択</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center text-center my-0 my-md-25">
                            <!-- begin: Free-->
                            <div class="col-md-4 col-xxl-3 p-bg-dark rounded-left shadow-sm">
                                <div class="pt-25 pb-25 pb-md-10 px-4">
                                    <h4 class="mb-15 text-white">お試しコース</h4>
                                    <span class="px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15 text-dark-25">無料</span>
                                    <br />
                                    <p class="mb-10 d-flex flex-column text-white">
                                        <span>１週間、全店舗の情報を見放題！</span>
                                    </p>
                                    <!-- <a href="" type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">お試しで登録</a> -->
                                </div>
                            </div>
                            <!-- end: Free-->
                            <!-- begin: Light-->
                            <div class="col-md-4 col-xxl-3 bg-primary my-md-n15 rounded shadow-sm">
                                <div class="pt-25 pt-md-37 pb-25 pb-md-10 py-md-28 px-4">
                                    <h4 class="text-white mb-15">ライトコース</h4>
                                    <span class="px-7 py-3 bg-white d-inline-flex flex-center rounded-lg mb-15 bg-white">
                                        <span class="pr-2 font-size-h1 font-weight-bold text-dark">500</span>
                                        <span class="pr-2 text-dark opacity-70">円</span>
                                        <span class="text-dark opacity-70">/&#160;&#160;月あたり</span>
                                    </span>
                                    <br />
                                    <p class="text-white mb-10 d-flex flex-column">
                                        <span>1店舗のみ見放題 !</span>
                                    </p>
                                    <a href="{{ route('course.store') }}" class="btn btn-white text-uppercase font-weight-bolder px-15 py-3">購入</a>
                                </div>
                            </div>
                            <!-- end: Light-->
                            <!-- begin: Standard-->
                            <div class="col-md-4 col-xxl-3 p-bg-dark rounded-right shadow-sm">
                                <div class="pt-25 pb-25 pb-md-10 px-4">
                                    <h4 class="mb-15 text-white">スタンダードコース</h4>
                                    <span class="px-7 py-3 d-inline-flex flex-center rounded-lg mb-15 bg-primary-o-10 text-dark-25">
                                        <span class="pr-2 font-size-h1 font-weight-bold">1000</span>
                                        <span class="pr-2 opacity-70">円</span>
                                        <span class="opacity-70">/&#160;&#160;月あたり</span>
                                    </span>
                                    <br />
                                    <p class="mb-10 d-flex flex-column text-white">
                                        <span>全店舗の情報を見放題！</span>
                                    </p>
                                    <a href="/billing/standard/0" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">購入</a>
                                </div>
                            </div>
                            <!-- end: Standard-->
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
@endsection

@section('add_js')
    
@endsection
