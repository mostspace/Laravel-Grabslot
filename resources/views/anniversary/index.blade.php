@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">周年日 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">ホーム</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        周年日
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
                <div class="col-sm-12 col-md-9 col-lg-9 pr-20">
                    <div class="">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">北海道・東北</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">北海道</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">青森県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">秋田県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">山形県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">岩手県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">宮城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">福島県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">関東</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">東京都</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">神奈川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">埼玉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">千葉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">茨城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">栃木県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">群馬県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">中部</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">愛知県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">岐阜県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">静岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">三重県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">新潟県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">山梨県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">長野県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">石川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">富山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">福井県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">近畿</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">大阪府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">兵庫県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">京都府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">滋賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">奈良県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">和歌山県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">中国・四国</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">広島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">岡山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">鳥取県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">島根県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">山口県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">香川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">徳島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">愛媛県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">高知県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">九州・沖縄</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">福岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">佐賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">長崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">熊本県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">大分県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">宮崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">鹿児島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">沖縄県</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- @include('layouts.right-sidebar') -->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('add_js')

<script>
    $(document).ready(function() {
        $(".prefecture").click(function() {
            window.location.href = "/anniversary/" + $(this).text();
        });
    });
</script>

@endsection