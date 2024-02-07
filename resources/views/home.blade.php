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
            <div class="modal-content g_modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">店舗検索リスト</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="scroll scroll-pull" data-scroll="true" data-height="500" data-mobile-height="350">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary font-weight-bold border-0" data-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <div class="modal fade" id="kt_scrollable_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Scrollable Modal Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="scroll scroll-pull" data-scroll="true" data-height="300">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">Name:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email:</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Groups:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                    <input type="checkbox" checked="checked" />Management
                                    <span></span></label>
                                    <label class="checkbox">
                                    <input type="checkbox" />Finance
                                    <span></span></label>
                                    <label class="checkbox">
                                    <input type="checkbox" />IT Department
                                    <span></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Message:</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="kt_blockui_4_1">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('add_js')
    <script>
        var user_id = @json($user_id);
    </script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
