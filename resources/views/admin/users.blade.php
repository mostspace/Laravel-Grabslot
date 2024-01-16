@extends('layouts.admin.default')

@section('add_css')
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
@endsection

@section('bread_crumb')
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bolder mt-2 mb-2 mr-5 font-white">ユーザー管理</h5>
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
                        <h3 class="card-label">ユーザーリスト</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>名前</th> -->
                                <th>メール</th>
                                <th>登録日</th>
                            </tr>
                        </thead>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('add_js')
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/js/ajax-tables/admin-users-list.js') }}"></script>
<!--end::Page Scripts-->
@endsection