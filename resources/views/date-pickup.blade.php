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
                        <div class="d-flex w-100">
                            <a href="javascript:;" class="btn btn-primary font-weight-bold px-10 py-3 mr-7">ホールデータ</a>
                            <a href="javascript:;" class="btn btn-primary font-weight-bold px-15 py-3 mr-7">平均差枚</a>
                            <a href="javascript:;" class="btn btn-primary font-weight-bold px-15 py-3">総差枚</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mt-15 w-100">
                            <h1 class="color-white fs-5">2023/12/01 青森県 出てたお店ピックアップ データまとめ</h1>
                            <div class="divider w-100px mt-5"></div>
                        </div>

                        <div class="mt-15">
                            <img src="{{ asset('assets/media/img/67979cd2755e58b304493b3d2dc62641-2048x1152.png') }}" class="w-100" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mt-15 w-100">
                            <h1 class="color-white fs-5">出てたお店ピックアップ</h1>
                            <div class="divider w-100px mt-5"></div>
                        </div>

                        <p class="fs-7 color-white mt-10">店舗名をクリックすると詳細データが閲覧出来ます。</p>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-danger">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-danger">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-danger">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-danger">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <p class="fs-7 color-white mt-7">※表が見切れている場合は横スクロールすると全ての項目を閲覧出来ます。</p>
                    </div>

                    <div class="row">
                        <div class="mt-15 w-100">
                            <h1 class="color-white fs-5">店舗別データ</h1>
                            <div class="divider w-100px mt-5"></div>
                        </div>

                        <div class="p-sub-title d-flex align-items-center w-100 mt-15 pl-3">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-6 font-weight-bolder ml-5 color-white">北海道・東北</span>
                        </div>

                        <p class="fs-7 color-white mt-10 pl-2">・機種別差枚トップ5</p>

                        <div class="p-panel w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-primary">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-primary">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-primary">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>

                        <div class="p-panel mt-10 w-100">
                            <a href="javascript:;" class="fs-7 text-underline p-link">プレイランドハッピー千歳駅前店</a>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr class="p-bg-primary">
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
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