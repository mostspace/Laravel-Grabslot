@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">店舗一覧</h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">都道府県</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/hall-data/{{ $region->id }}" class="color-white font-weight-bolder p-link">{{ $region->name }}</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        {{ $store->name }}
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
                        <h1 class="color-white fs-5">{{ $store->name }}</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="mt-10">
                        <p class="fs-7 color-white">日付をクリックすると詳細データが閲覧出来ます。</p>
                        <p class="fs-7 color-white">※通信状況やシステムの影響により実際の数値とは異なる場合があります。</p>
                        <p class="fs-7 color-white">※サイトの動作を安定させる都合上、詳細データの保持期間は1年1カ月となります。</p>
                    </div>

                    <!-- <div class="form-group row mt-10">
                        <label class="col-form-label color-white col-lg-2 col-sm-12">特定日で絞り込み：</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select id="filter-select" class="form-control selectpicker ">
                                <option value="" selected="">特定日を選択</option>
                                <option value="1">1の付く日</option>
                                <option value="2">2の付く日</option>
                                <option value="3">3の付く日</option>
                                <option value="4">4の付く日</option>
                                <option value="5">5の付く日</option>
                                <option value="6">6の付く日</option>
                                <option value="7">7の付く日</option>
                                <option value="8">8の付く日</option>
                                <option value="9">9の付く日</option>
                                <option value="0">0の付く日</option>
                                <option value="d-doubles">ゾロ目日</option>
                                <option value="md-doubles">月日がゾロ目日</option>
                                <option value="mon">月曜日</option>
                                <option value="tue">火曜日</option>
                                <option value="wed">水曜日</option>
                                <option value="thu">木曜日</option>
                                <option value="fri">金曜日</option>
                                <option value="sat">土曜日</option>
                                <option value="sun">日曜日</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="p-panel mt-10">
                        <!--begin: Datatable-->
                        <!-- <table class="table table-checkable" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>日付</th>
                                    <th>総差枚</th>
                                    <th>平均差枚</th>
                                    <th>平均G数</th>
                                    <th>勝率</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="p-link date-data">2023-12-05</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>6,446</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><a class="p-link date-data">2023-12-04</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>6,446</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><a class="p-link date-data">2023-12-03</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>6,446</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><a class="p-link date-data">2023-12-02</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>6,446</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><a class="p-link date-data">2023-12-01</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>6,446</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table> -->

                        <!--begin: Datatable-->
                        <table class="table table-checkable" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>日付</th>
                                    <th>総差枚</th>
                                    <th>平均差枚</th>
                                    <th>平均G数</th>
                                    <th>勝率</th>
                                </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->
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
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>

<script>
    var region_id = @json($region->id);
    var store_id = @json($store->id);
</script>

<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/ajax-tables/store-list.js') }}"></script>
<!--end::Page Scripts-->

<script>
    $(document).ready(function() {
        $(".date-data").click(function() {
            window.location.href = "/date-data/" + $(this).text();
        });
    });
</script>

@endsection