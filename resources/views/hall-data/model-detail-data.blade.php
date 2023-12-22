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

                    <!--begin: Datatable-->
                    <table class="table table-checkable table-bordered" id="modelDetailTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>台番号</th>
                                @foreach($modelMonthData as $date => $items)
                                <th>
                                    {{ substr($date, 5) }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $maxItemCount = 0; 
                                $mainItemCount = 0; 
                                $blueCnt = 0; 

                                foreach ($modelMonthData as $items) {
                                    $maxItemCount = max($maxItemCount, count($items));
                                }

                                $mainItemCount = $maxItemCount - 1;

                                $modelId = [];

                                foreach ($modelMonthData as $date => $items) {
                                    for ($i = 0; $i < $mainItemCount; $i++) {
                                        // Use the index $i to set each element separately
                                        $modelId[$i] = isset($items[$i]['machine_number']) ? $items[$i]['machine_number'] : '';
                                    }
                                    break;  // If you only want to process the first date, the break statement is okay
                                }
                            @endphp
    
                            @for ($i = 0; $i < $maxItemCount; $i++)
                                <tr>
                                    @foreach ($modelMonthData as $date => $items)
                                        @if ($i < $mainItemCount)
                                            @php
                                                // Check if 'item_color' key and 'blue' key exist
                                                $blueCnt += isset($items[$i]['item_color']['blue']) ? $items[$i]['item_color']['blue'] : 0;
                                            @endphp
                                        @endif
                                    @endforeach

                                    <td class="td-light-blue">
                                        @if ($i < $mainItemCount)
                                            @if($i < $mainItemCount) {{ $blueCnt }} @endif
                                        @endif
                                    </td>

                                    @php
                                        $blueCnt = 0;
                                    @endphp

                                    <td class="text-center">@if($i < $mainItemCount) {{ $modelId[$i] }} @endif</td>

                                    @foreach ($modelMonthData as $date => $items)
                                        @if ($i < $mainItemCount)
                                            @if ( isset($items[$i]['extra_sheet']) )
                                                <td class="{{ isset($items[$i]['item_color']['color']) ? $items[$i]['item_color']['color'] : '' }} td-sheet" data-id="{{ isset($items[$i]['id']) ? $items[$i]['id'] : '' }}" data-machine_number="{{ isset($items[$i]['machine_number']) ? $items[$i]['machine_number'] : '' }}" data-toggle="modal" data-target="#dataModal">
                                                    {{ $items[$i]['extra_sheet'] ?? '' }}
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        @else
                                            <td class="p-0">
                                                <div class="d-flex">
                                                    <div class="text-center dailyModelBlue">
                                                        {{ end($items)['blue'] ?? '' }}
                                                    </div>
                                                    <div class="text-center dailyModelRed">
                                                        {{ end($items)['red'] ?? '' }}
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <!--end: Datatable-->

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
                        <tbody id="modalTableBody">
                            <div id="model-chart"></div>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary font-weight-bold border-0" data-dismiss="modal">クローズ</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
@endsection

@section('add_js')
<script>
    var modelMonthData = @json($modelMonthData);
    console.log(modelMonthData);

    // Class definition
    var modelDetailDataWidget = function () {

        var modelDetailModal = function () {
            $("#modelDetailTable").on("click", ".td-sheet", function() {
                var model_id = $(this).data('id');
                var model_machine_number = $(this).data('machine_number');

                getModelData(model_id);
                modelChart(model_id, model_machine_number);
            });
        }

        var updateTable = function(modelData) {
            var tbody = $("#modalTableBody");

            tbody.empty();
            tbody.append("<tr>" +
                "<td>" + modelData.machine_number + "</td>" +
                "<td>" + modelData.g_number + "</td>" +
                "<td>" + modelData.extra_sheet + "</td>" +
                "<td>" + modelData.bb + "</td>" +
                "<td>" + modelData.rb + "</td>" +
                "<td>" + modelData.composite_probability + "</td>" +
                "<td>" + modelData.bb_probability + "</td>" +
                "<td>" + modelData.rb_probability + "</td>" +
                "</tr>");

            // Open the modal
            $('#dataModal').modal('show');
        }

        var getModelData = function(model_id) {
            $.ajax({
                url: "{{ route('model.data') }}",
                type: "POST",
                data: {
                    model_id: model_id,
                },
                success: function(response) {
                    var modelData = response['model'][0];
                    updateTable(modelData);
                },
                error: function(error) {
                    console.error('Ajax request failed: ', error);
                }
            });
        }

        // Function to find data by model_id
        function getCurrentModelData(model_id, model_machine_number, data) {
            var temp_obj = [];

            for (var date in data) {
                var items = data[date];

                for (var i = 0; i < items.length; i++) {
                    if (items[i].machine_number == model_machine_number) {
                        temp_obj.push(items[i]);

                        if (items[i].id == model_id) {
                            // Break out of both loops if the id is found
                            return temp_obj;
                        }
                    }
                }
            }
            return temp_obj;
        }

        // Charts widgets
        var modelChart = function (model_id, model_machine_number) {
            var element = document.getElementById("model-chart");

            if (!element) {
                return;
            }

            var options = {
                series: [{
                    name: '差枚',
                    data: []
                }],
                theme: {
                    mode: 'dark',
                },
                chart: {
                    type: 'area',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {

                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'solid',
                    opacity: 1
                },
                stroke: {
                    curve: 'smooth',
                    show: true,
                    width: 3,
                    colors: [KTApp.getSettings()['colors']['theme']['base']['primary']]
                },
                xaxis: {
                    categories: [],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                            fontSize: '12px',
                            fontFamily: KTApp.getSettings()['font-family']
                        }
                    },
                    crosshairs: {
                        position: 'front',
                        stroke: {
                            color: KTApp.getSettings()['colors']['theme']['base']['primary'],
                            width: 1,
                            dashArray: 3
                        }
                    },
                    tooltip: {
                        enabled: true,
                        formatter: undefined,
                        offsetY: 0,
                        style: {
                            fontSize: '12px',
                            fontFamily: KTApp.getSettings()['font-family']
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                            fontSize: '12px',
                            fontFamily: KTApp.getSettings()['font-family']
                        }
                    }
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                        fontSize: '12px',
                        fontFamily: KTApp.getSettings()['font-family'],
                    },
                    y: {
                        formatter: function (val) {
                            return val
                        }
                    },
                    custom: function({ series, seriesIndex, dataPointIndex, w }) {
                        var model_data = getCurrentModelData(model_id, model_machine_number, modelMonthData);
                        var date = model_data[dataPointIndex].date;
                        var extraSheet = model_data[dataPointIndex].extra_sheet;

                        // Custom title for the tooltip
                        var title = "<div class='apexcharts-tooltip-title fs-7'>" + date + "</div>";

                        // Custom content for the tooltip
                        var content = "<div class='apexcharts-tooltip-content fs-7 pl-3 pb-3'>" +
                                        "<span>差枚: " + extraSheet + "</span>" +
                                    "</div>";

                        return title + content;
                    }
                },
                colors: [KTApp.getSettings()['colors']['theme']['light']['primary']],
                grid: {
                    borderColor: KTApp.getSettings()['colors']['gray']['gray-200'],
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    }
                },
                markers: {
                    strokeColor: KTApp.getSettings()['colors']['theme']['base']['primary'],
                    strokeWidth: 3
                }
            };

            var model_data = getCurrentModelData(model_id, model_machine_number, modelMonthData);
            console.log(model_data);

            for (var i = 0; i < model_data.length; i++) {
                options.series[0].data.push({
                    x: (model_data[i].date).replace(/^.*\/(\d{1,2})\(.*\)$/, '$1'),
                    y: model_data[i].extra_sheet
                });
            }

            // Update the xaxis categories with model_date_obj
            options.xaxis.categories = model_data.map(item => item.date);

            var chart = new ApexCharts(element, options);
            chart.render();
        }

        // Public methods
        return {
            init: function () {
                modelDetailModal();
            }
        }
    }();

    // Webpack support
    if (typeof module !== 'undefined') {
        module.exports = modelDetailDataWidget;
    }

    jQuery(document).ready(function () {
        modelDetailDataWidget.init();
    });

</script>

@endsection