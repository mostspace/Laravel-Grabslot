@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <div class="container">
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

                    <div class="my-10 row px-4">
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-65px rounded-5 py-2 px-2 fs-9 td-red text-dark font-weight-bolder">赤セル </div>
                            <p class="fs-9 text-white pl-2 mb-0">-3000以上</p>
                        </div>
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-75px rounded-5 py-2 px-2 fs-9 td-pink text-dark font-weight-bolder"> ピンクセル</div>
                            <p class="fs-9 text-white pl-2 mb-0">-1 ~ -2999</p>
                        </div>
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-65px rounded-5 py-2 px-2 fs-9 td-white text-dark font-weight-bolder">白セル</div>
                            <p class="fs-9 text-white pl-2 mb-0">0 ~ 999</p>
                        </div>
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-65px rounded-5 py-2 px-2 fs-9 td-light-blue text-dark font-weight-bolder">水色セル</div>
                            <p class="fs-9 text-white pl-2 mb-0">1000 ~ 2999</p>
                        </div>
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-65px rounded-5 py-2 px-2 fs-9 td-blue text-dark font-weight-bolder">青セル</div>
                            <p class="fs-9 text-white pl-2 mb-0">3000 ~ 4999</p>
                        </div>
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-65px rounded-5 py-2 px-2 fs-9 td-dark-blue text-dark font-weight-bolder">紺セル</div>
                            <p class="fs-9 text-white pl-2 mb-0">5000以上</p>
                        </div>
                        <div class="d-flex align-items-center mr-8 my-2">
                            <div class="w-65px rounded-5 py-2 px-2 fs-9 td-gray text-dark font-weight-bolder">灰色セル</div>
                            <p class="fs-9 text-white pl-2 mb-0">2000回転未満</p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div class="model-table mb-15" id="modelDetailTable">
                            <div class="model-table-row">
                                <div class="td-block td-header"></div>
                                <div class="td-block td-header"></div>
                                <!-- <div class="td-block td-header">台番号</div> -->
                                <div class="divide-cell">
                                    <div class="c1">日付</div>
                                    <div class="c2">台番号</div>
                                </div>
                                @foreach($modelMonthData as $date => $items)
                                <div class="td-block td-header">
                                    @php
                                        $dateString = substr($date, 5);

                                        if (isset($dateString[3]) && $dateString[3] === '0') {
                                            $dateString = substr_replace($dateString, '', 3, 1);
                                        }
                                    @endphp

                                    {{ $dateString }}
                                </div>
                                @endforeach
                            </div>
                            <div class="model-table">
                                @php
                                    $maxItemCount = 0; 
                                    $mainItemCount = 0; 
                                    $blueCnt = 0; 
                                    $redCnt = 0; 

                                    foreach ($modelMonthData as $items) {
                                        $maxItemCount = max($maxItemCount, count($items));
                                    }

                                    $mainItemCount = $maxItemCount - 1;

                                    $modelId = [];

                                    foreach ($modelMonthData as $date => $items) {
                                        for ($i = 0; $i < $mainItemCount; $i++) {
                                            $modelId[$i] = isset($items[$i]['machine_number']) ? $items[$i]['machine_number'] : '';
                                        }
                                        break;
                                    }
                                @endphp

                                @for ($i = 0; $i < $maxItemCount; $i++)
                                    <div class="model-table-row">
                                        @foreach ($modelMonthData as $date => $items)
                                            @if ($i < $mainItemCount)
                                                @php
                                                    $redCnt += isset($items[$i]['item_color']['red']) ? $items[$i]['item_color']['red'] : 0;
                                                    $blueCnt += isset($items[$i]['item_color']['blue']) ? $items[$i]['item_color']['blue'] : 0;
                                                @endphp
                                            @endif
                                        @endforeach

                                        @if ($i < $mainItemCount)
                                            <div class="td-block td-pink">
                                                @if($i < $mainItemCount) {{ $redCnt }} @endif
                                            </div>
                                        @else
                                            <div class="td-block"></div>
                                        @endif

                                        @if ($i < $mainItemCount)
                                            <div class="td-block td-light-blue">
                                                @if($i < $mainItemCount) {{ $blueCnt }} @endif
                                            </div>
                                        @else
                                            <div class="td-block"></div>
                                        @endif                                       

                                        @php
                                            $redCnt = 0;
                                            $blueCnt = 0;
                                        @endphp

                                        <div class="td-block">@if($i < $mainItemCount) {{ $modelId[$i] }} @endif</div>

                                        @foreach ($modelMonthData as $date => $items)
                                            @if ($i < $mainItemCount)
                                                @if ( isset($items[$i]['extra_sheet']) )
                                                    <div class="td-block {{ isset($items[$i]['item_color']['color']) ? $items[$i]['item_color']['color'] : '' }} td-sheet" data-id="{{ isset($items[$i]['id']) ? $items[$i]['id'] : '' }}" data-machine_number="{{ isset($items[$i]['machine_number']) ? $items[$i]['machine_number'] : '' }}" data-toggle="modal" data-target="#dataModal">
                                                        {{ $items[$i]['extra_sheet'] ?? '' }}
                                                    </div>
                                                @else
                                                    <div class="td-block"></div>
                                                @endif
                                            @else
                                                <div class="td-block">
                                                    <div class="text-center dailyModelBlue">
                                                        {{ end($items)['blue'] ?? '' }}
                                                    </div>
                                                    <div class="text-center dailyModelRed">
                                                        {{ end($items)['red'] ?? '' }}
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                </div>              
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!--begin::Modal-->
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $model_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-panel">
                    <div id="model-chart"></div>
                    <div class="table-responsive">
                        <table class="table table-checkable table-bordered" id="modalTable">
                            <thead>
                                <tr>
                                    <th>台番号</th>
                                    <th>G数</th>
                                    <th>差枚</th>
                                    <th>BB</th>
                                    <th>RB</th>
                                    <th>合成確率</th>
                                    <th>BB確率</th>
                                    <th>RB確率</th>
                                </tr>
                            </thead>
                            <tbody id="modalTableBody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary font-weight-bold border-0" data-dismiss="modal">閉じる</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
@endsection

@section('add_js')
<script>
    var modelMonthData = @json($modelMonthData);

    $(document).ready(function() {
        $('#modelDetailTable').on('click', '.model-table-row .td-block .dailyModelBlue', function() {
            $("#modelDetailTable").find(".active_blink").removeClass('active_blink');
            // Get the column number (index) of the clicked element within its row
            var columnNumber = $(this).parent('.td-block').index() + 1;

            // Select all cells in the second column of the table based on multiple conditions
            $('#modelDetailTable .model-table-row .td-block.td-light-blue:nth-child(' + columnNumber + '), #modelDetailTable .model-table-row .td-blue:nth-child(' + columnNumber + '), #modelDetailTable .model-table-row .td-dark-blue:nth-child(' + columnNumber + ')').each(function() {
                // Add the 'active_blink' class to each cell in the second column
                $(this).addClass('active_blink');
            });
        });

        $('#modelDetailTable').on('click', '.td-block.td-sheet, .dailyModelRed', function() {
            $("#modelDetailTable").find(".active_blink").removeClass('active_blink');
        });
    });
</script>

<script src="{{ asset('assets/js/model-detail-data.js') }}"></script>
@endsection