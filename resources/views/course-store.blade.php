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
                            <h2 class="card-label text-white">店舗選択</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row px-3">
                            <div class="col-sm-12 col-md-6 col-lg-6 p-0 mt-10">
                                <h6 class="text-white mb-5">ホール名から検索</h6>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="searchStore" type="text" class="form-control g_input" placeholder="" readonly/>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="searchStoreBtn"><i class="flaticon-search ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" id="checkStore" class="btn btn-primary py-3 px-7">選択する</button>
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
                    <div class="search-hall-table w-100">
                        <!--begin: Datatable-->
                        <div class="table-responsive">
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
@endsection

@section('add_js')
<script src="{{ asset('assets/js/pages/features/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/js/course-store.js') }}"></script>
@endsection
