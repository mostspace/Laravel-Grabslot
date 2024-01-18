@extends('layouts.admin.default')

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
                        <button id="pagePrint" type="reset" class="btn btn-success mr-2" data-toggle="modal" data-target="#printModal">印刷する</button>
                    </div>
                </div>
                <div id="printSection" class="card-body px-10">
                    <div class="text-center mt-15">
                        <h1 class="font-weight-bolder fs-2">パチスロ高設定予測サイト ~GRAB~</h1>
                        <h3 class="my-10 fs-5">【明日からあなたの台選びが変わる！】</h3>
                        <p class="fs-7 font-weight-bold">「GRAB」とは掴み取るという意味です。</p>
                        <p class="fs-7 font-weight-bold">このサイトを活用して高設定を、勝利を掴み取って下さい！</p>
                    </div>

                    <div class="form-group row mt-15">
                        <div class="col-lg-12 col-xl-12">
                            <div class="image-input image-input-outline w-100" id="kt_image_1">
                                <div class="image-input-wrapper w-100 h-475px"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="画像の変更">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="画像をキャンセル">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted img-desc">許可されるファイルの種類: png、jpg、jpeg。</span>
                        </div>
                    </div>

                    <!-- <div class="mt-15">
                        <div class="row mx-1">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label class="col-form-label">店舗:</label>
                                    <div class="ml-5 w-75">
                                        <input id="store" type="text" class="form-control" placeholder="" value="" />
                                        <span class="form-text text-danger" id="store_warning"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6" id="modelInput">
                                <div class="form-group row">
                                    <label class="col-form-label">機種:</label>
                                    <div class="ml-5 w-75">
                                        <input id="model" type="text" class="form-control" placeholder="" value="" />
                                        <span class="form-text text-danger" id="model_warning"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div id="loadingSpinner" class="spinner spinner-primary spinner-lg mt-10"></div>
                    </div>

                    <div class="">
                        <div class="col-6">
                            <ul id="storeList"></ul>
                        </div>
                        <div class="col-6">
                            <ul id="modelList"></ul>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div class="model-table" id="modelDetailTable"></div>
                    </div> -->

                    <div class="mt-15">
                        <h3 class="font-weight-bolder">狙い台が明確になる！</h3>
                        <div class="mt-7">
                            <h4 class="font-weight-bold">● ホールの癖が丸わかり</h4>
                            <div class="pl-15">
                                <p class="fs-7">並びで入りやすいのか・・角が強いのか・・</p>
                                <p class="fs-7">据え置きをしてくるのか・・大きく凹んだ翌日は・・</p>
                            </div>

                            <h4 class="font-weight-bold mt-3">● 出玉状況を点ではなく面でみる！</h4>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="row">
                            <div class="col-9 col-9">
                                <h3 class="font-weight-bolder">＜表の見方＞</h6>
                                <div class="mt-7">
                                    <p class="font-weight-bold fs-7">数字はその日のトータル差枚数です</p>
                                    <p class="font-weight-bold fs-7">差枚数プラス台はブルーで表示、マイナス台は赤系で表示</p>
                                    <p class="font-weight-bold fs-7">差枚数ごとのセル色</p>
                                </div>
                                
                                <div class="mt-7">
                                    <div class="d-flex align-items-center">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-8 td-white border">白</div>
                                        <p class="fs-7 mb-0 ml-3">・・0～999枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 td-light-blue">水色</div>
                                        <p class="fs-7 mb-0 ml-3">・・1000～2999枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 td-blue">青</div>
                                        <p class="fs-7 mb-0 ml-3">・・3000～4999枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 td-dark-blue text-white">紺</div>
                                        <p class="fs-7 mb-0 ml-3">・・5000枚以上</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 td-pink">ピンク</div>
                                        <p class="fs-7 mb-0 ml-3">・・-1 ～ -2999枚</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 td-red">赤</div>
                                        <p class="fs-7 mb-0 ml-3">・・-3000枚以上</p>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <div class="w-65px py-2 rounded-10 px-2 fs-7 td-gray">グレー</div>
                                        <p class="fs-7 mb-0 ml-3">・・回転数2000回転未満台</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 col-3 align-items-end">
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
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelName">Model Name</h5>
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

<!--begin::Modal-->
<!-- <div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">印刷部数</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <input type="number" class="form-control" placeholder="印刷部数を入力してください" value="1">
            </div>
            <div class="modal-footer">
                <button id="pagePrint" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">印刷する</button>
            </div>
        </div>
    </div>
</div> -->
<!--end::Modal-->

@endsection

@section('add_js')
<!-- Add this to the head of your HTML file -->
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<script>
    var modelMonthData = {};
    
    $(document).ready(function() {

        // Your data to be encoded in the QR code
        var data = 'https://grab-slot.co.jp/register';

        // Generate QR code
        var qrcode = new QRCode(document.getElementById('qrcode'), {
            text: data,
            width: 158,
            height: 158
        });

        // Print
        $("#pagePrint").click(function() {
            var printSection = $("#printSection").clone(); // Use jQuery to clone the content

            // Remove unnecessary elements or modify content as needed
            printSection.find('.btn-circle').hide();
            printSection.find('.img-desc').hide();

            var printWindow = $('<iframe>', {
                name: 'printWindow',
                id: 'printWindow',
                style: 'display:none;'
            });

            // Append the cloned content to the iframe
            printWindow.appendTo('body').contents().find('body').css('background-color', '#fff').append(printSection.html());

            // Include stylesheets
            $('link[rel="stylesheet"]').each(function() {
                printWindow.contents().find('head').append('<link rel="stylesheet" type="text/css" href="' + $(this).attr('href') + '">');
            });

            // Include inline styles
            $('style').each(function() {
                printWindow.contents().find('head').append('<style type="text/css">' + $(this).html() + '</style>');
            });

            setTimeout(function() {
                // Call the print function on the iframe
                printWindow[0].contentWindow.print();
                printWindow.remove(); // Remove the iframe after printing
            }, 1000);

        });

        // Store & Model table        
        var store_name="", store_id="", model_name="";
        // $("#modelInput").hide();

        // Search Store
        $("#store").keydown(function(event) {
            if(event.which == 13) {
                $("#storeList").empty();
                $("#modelList").empty();
                $("#model").val('');
                $("#modelInput").hide();
                $("#modelDetailTable").empty();
                if($(this).val()) {
                    store_name = $(this).val();
                    validationPromotionTable('store', store_id, store_name);
                }
            }
        });

        $("#store").on('keyup', function(event) {
            if(event.key === 'Delete' || event.key === 'Backspace') {
                if($(this).val().trim() === '') {
                    $("#modelInput").hide();
                    $('#modelDetailTable').empty();
                }
            }
        });

        $("#storeList").on("click", ".p-link", function() {
            $("#storeList").empty();
            store_name = $(this).text();
            store_id = $(this).data('id');
            
            $("#store").val(store_name);
            
            $("#modelInput").show();
        });

        $("#modelList").on("click", ".p-link", function() {
            $("#modelList").empty();
            model_name = $(this).text();
            
            $("#model").val(model_name);
            
            showModelTable(store_name, model_name);
        });

        // Search Model
        $("#model").keydown(function(event) {
            if(event.which == 13) {
                $("#modelList").empty();
                $('#modelDetailTable').empty();
                if($(this).val()) {
                    model_name = $(this).val();
                    validationPromotionTable('model', store_id, model_name);
                }
            }
        });

        $("#model").on('keyup', function(event) {
            if(event.key === 'Delete' || event.key === 'Backspace') {
                if($(this).val().trim() === '') {
                    $('#modelDetailTable').empty();
                    $('#modelList').empty();
                }
            }
        });

        function showModelTable(store_name, model_name) {
            console.log(store_name, model_name);
            // Show spinner before making the AJAX request
            $('#loadingSpinner').show();

            $.ajax({
                url: '/admin/promotion-printing/model',
                type: 'POST',
                data: {
                    store_name: store_name,
                    model_name: model_name,
                },
                // Add other AJAX configurations here
                success: function (response) {
                    // Hide the spinner after the AJAX request is successful
                    $('#loadingSpinner').hide();

                    // Update the table with the new data
                    $('#modelDetailTable').html(response.tableData);

                    // Set model name of the modal
                    $("#modelName").text(model_name);
                    
                    modelMonthData = response.modelMonthData;
                },
                error: function (error) {
                    // Hide the spinner in case of an error
                    $('#loadingSpinner').hide();

                    // Handle error here
                    console.error('Ajax request failed:', error);
                }
            });
        }

        function validationPromotionTable(type, store_id, value) {
            $.ajax({
                url: '/admin/promotion-printing/promotion-table-validation',
                type: 'POST',
                data: {
                    type: type,
                    store_id: store_id,
                    value: value,
                },
                // Add other AJAX configurations here
                success: function (response) {
                    if (response.type == "store") {
                        if (response.value == 1) {
                            $("#store_warning").text('');
                            for(var i = 0; i < (response.data).length; i++) {
                                $("#storeList").append('<li class="p-link" data-id="' + response.data[i].id + '">' + response.data[i].name + '</li>');
                            }
                        } else {
                            $("#store_warning").text('該当する店舗がありません。');
                        }
                    } else {
                        if (response.value == 1) {
                            $("#model_warning").text('');

                            for(var i = 0; i < (response.data).length; i++) {
                                $("#modelList").append('<li class="p-link">' + response.data[i] + '</li>');
                            }

                            // showModelTable(store_name, model_name);
                        } else {
                            $("#model_warning").text('対応するモデルはありません。');
                            $("#modelDetailTable").empty();
                        }
                    }
                },
                error: function (error) {
                    // Handle error here
                    console.error('Ajax request failed:', error);
                }
            });
        }


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
<script src="{{ asset('assets/admin/js/image-input.js') }}"></script>
@endsection
