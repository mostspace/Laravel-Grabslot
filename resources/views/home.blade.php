@extends('layouts.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row mt-35">
                    <div class="col-sm-12 col-md-9 col-lg-9 pr-lg-20">
                        <div class="">
                            <h1 class="color-white fs-5">ホール名から検索</h1>
                            <div class="divider w-100px"></div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 p-0 mt-10">
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="searchRegion" type="text" class="form-control p-input" placeholder="" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="searchRegionBtn"><i class="flaticon-search ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-17">
                            <h1 class="color-white fs-5">都道府県から検索</h1>
                            <div class="divider w-100px mb-15"></div>
                        </div>

                        <div id="regionList">
                            <div id="allRegionList">
                                @foreach($areas as $area)
                                    <div class="mt-15">
                                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                                            <div class="col-3 col-md-4 col-sm-2 sub-left-divider"></div>
                                            <div class="col-6 col-md-4 col-sm-8 fs-6 color-white fw-bold text-center">{{ $area->name }}</div>
                                            <div class="col-3 col-md-4 col-sm-2 sub-right-divider"></div>
                                        </div>
                                        <div class="adress-list row">
                                            @foreach($regions as $region)
                                                @if($region->area_id == $area->id)
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <button class="btn btn-outline-white region-btn font-weight-bold py-3 w-100 mb-5 rounded-10" data-region_id="{{ $region->id }}">{{ $region->name }}</button>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                            <div id="filteredRegion" class="row"></div>
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
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">店舗検索リスト</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="search-hall-table w-100">
                        <!--begin: Datatable-->
                        <table class="table table-checkable" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>店舗</th>
                                    <th>市区郡</th>
                                </tr>
                            </thead>
                        </table>
                        <!--end: Datatable-->
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
    <script src="{{ asset('assets/js/ajax-tables/search-hall-table.js') }}"></script>
    <script>
        $(document).ready(function() {

            // Header Active Menu
            const url = window.location.href;
            const pathSegments = url.split('/');
            const secondPathSegment = pathSegments[3];

            switch (secondPathSegment) {
                case "":
                    $("#PHeader").children().eq(0).addClass("menu-item-here");
                    break;
                case "hall-data":
                    $("#PHeader").children().eq(1).addClass("menu-item-here");
                    break;
                case "store":
                    $("#PHeader").children().eq(2).addClass("menu-item-here");
                    break;
                case "all-systems":
                    $("#PHeader").children().eq(3).addClass("menu-item-here");
                    break;
                case "old-event-date":
                    $("#PHeader").children().eq(4).addClass("menu-item-here");
                    break;
                case "anniversary":
                    $("#PHeader").children().eq(5).addClass("menu-item-here");
                    break;
                default:
                    $("#PHeader").children().find("menu-item").removeClass("menu-item-here");
            };

            // Visit Region
            $("#regionList").on("click", ".region-btn", function() {
                window.location.href = "/hall-data/" + $(this).data('region_id');
            });
        });
    </script>
@endsection
