"use strict"

// Class definition
var modelDetailDataWidget = function () {

    var modelDetailModal = function () {
        $("#modelDetailTable").on("click", ".td-sheet", function() {
            var model_id = $(this).data('id');
            var model_machine_number = $(this).data('machine_number');

            var selected_model =  getSelectedModel(model_id, model_machine_number, modelMonthData);

            getModelData(model_id);
            modelChart(model_id, model_machine_number, selected_model);
        });
    }

    var getSelectedModel = function(model_id, model_machine_number, data) {
        var temp_obj = {};
        var cnt = 0;

        for (var date in data) {
            var items = data[date];

            for (var i = 0; i < items.length; i++) {
                if(items[i].machine_number == model_machine_number) {
                    cnt++;
                    if (items[i].id == model_id) {
                        temp_obj['extra_sheet'] = items[i].extra_sheet;
                        temp_obj['model_order'] = cnt;

                        return temp_obj;
                    }
                }
            }
        }

        return temp_obj;
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
            url: "/model-data",
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
    var getCurrentModelData = function(model_id, model_machine_number, data) {
        var temp_obj = [];

        for (var date in data) {
            var items = data[date];

            for (var i = 0; i < items.length; i++) {
                if (items[i].machine_number == model_machine_number) {
                    temp_obj.push(items[i]);
                }
            }
        }
        
        return temp_obj;
    }

    // Charts widgets
    var modelChart = function (model_id, model_machine_number, selected_model) {
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
            },
            annotations: {
                points: [
                    {
                        x: selected_model.model_order,
                        y: selected_model.extra_sheet,
                        marker: {
                            size: 9,
                            fillColor: '#ff0000',
                            strokeColor: '#ffffff',
                            radius: 2,
                            cssClass: 'apexcharts-custom-hover',
                        }
                    },
                ],
            },
        };

        var model_data = getCurrentModelData(model_id, model_machine_number, modelMonthData);
        // console.log(model_data);

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
