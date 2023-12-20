@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">店舗一覧</h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">都道府県</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/hall-data/{{ $region->id }}" class="color-white font-weight-bolder p-link">{{ $region->name }}</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        <a href="/hall-data/{{ $region->id }}/{{ $store->id }}" class="color-white font-weight-bolder p-link">{{ $store->name }}</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>{{ $model_name }}
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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div>
                        <h1 class="color-white fs-5">{{ $model_name }}</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="p-panel mt-10" id="modelDetailTable">
                        <!--begin: Datatable-->
                        <table class="table table-checkable table-bordered" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    @foreach($modelMonthData as $date => $items)
                                        <th>{{ $date }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $maxItemCount = 0;
                                    foreach ($modelMonthData as $items) {
                                        $maxItemCount = max($maxItemCount, count($items));
                                    }

                                    $modelId = [];
                                    foreach ($modelMonthData as $date => $items) {
                                        for ($i = 0; $i < $maxItemCount; $i++) {
                                            $modelId[$i] = $items[$i]['machine_number'];
                                        }
                                        break;
                                    }

                                    function makeTdColor($value) {
                                        if ($value < -3000) {
                                            return "td-red";
                                        } elseif ($value >= -3000 && $value < 0) {
                                            return "td-pink";
                                        } elseif ($value > 0 && $value < 1000) {
                                            return "td-white";
                                        } elseif ($value >= 1000 && $value < 3000) {
                                            return "td-light-blue";
                                        } elseif ($value >= 3000 && $value < 5000) {
                                            return "td-blue";
                                        } elseif ($value >= 5000) {
                                            return "td-dark-blue";
                                        } elseif ($value == 0) {
                                            return "td-gray";
                                        }
                                    }
                                @endphp

                                @for ($i = 0; $i < $maxItemCount; $i++)
                                    <tr>
                                        <td class="text-center">{{ $modelId[$i] }}</td>
                                        @foreach ($modelMonthData as $date => $items)
                                            <td class="{{ makeTdColor($items[$i]['extra_sheet']) }} td-sheet">{{ $items[$i]['extra_sheet'] ?? '' }}</td>
                                        @endforeach
                                    </tr>
                                @endfor
                            </tbody>
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


@endsection