@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">旧イベント日 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">ホーム</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        旧イベント日
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
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">北海道</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">青森県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">秋田県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">山形県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">岩手県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">宮城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">福島県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">東京都</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">神奈川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">埼玉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">千葉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">茨城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">栃木県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">群馬県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">愛知県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">岐阜県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">静岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">三重県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">新潟県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">山梨県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">長野県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">石川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">富山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">福井県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">大阪府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">兵庫県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">京都府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">滋賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">奈良県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">和歌山県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">広島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">岡山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">鳥取県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">島根県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">山口県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">香川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">徳島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">愛媛県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">高知県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">福岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">佐賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">長崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">熊本県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">大分県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">宮崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">鹿児島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10">沖縄県</button>
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
            window.location.href = "/old-event-date/" + $(this).text();
        });
    });
</script>

@endsection