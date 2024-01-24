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
                    <!--begin::Card header-->
                    <div class="card-header card-header-tabs-line nav-tabs-line-3x px-0">
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link active" data-toggle="tab" href="#profile_tab_1">
                                        <span class="nav-icon">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">アカウント</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-6">
                                    <a class="nav-link mx-0" data-toggle="tab" href="#profile_tab_2">
                                        <span class="nav-icon">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">パスワードを変更する</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-6">
                                    <a class="nav-link mx-0" data-toggle="tab" href="#profile_tab_3">
                                        <span class="nav-icon">
                                            <span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">購入履歴</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link mx-0" data-toggle="tab" href="#pricing">
                                        <span class="nav-icon">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">契約中のコース</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body px-0">
                        <div class="tab-content pt-10">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-lg-7" id="profile_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-md-3"></label>
                                            <div class="col-md-9 col-sm-12">
                                                <h6 class="text-white font-weight-bold mb-10">アカウント情報:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <form id="userAccountForm">
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-12 text-lg-right text-left">メールアドレス</label>
                                                <div class="col-md-9 col-sm-12">
                                                    <input class="g_input form-control form-control-lg form-control-solid" type="email" value="{{ Auth::user()->email }}" name="user_email"/>
                                                </div>
                                            </div>
                                            <!--end::Group-->  
                                        </form>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Footer-->
                                <div class="row">
                                    <div class="col-xl-2 col-md-2"></div>
                                    <div class="col-xl-7 col-md-7">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9 col-sm-12">
                                                <button id="updateEmailBtn" class="btn btn-primary font-weight-bold">変更内容を保存</button>
                                                <a href="/" class="btn btn-clean font-weight-bold">キャンセル</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-lg-7" id="profile_tab_2" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 col-sm-12">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-md-3 col-sm-12"></label>
                                            <div class="col-md-9 col-sm-12">
                                                <h6 class="text-white font-weight-bold mb-10">パスワードを変更する:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <form id="userPasswordChangeForm">
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-12 text-lg-right text-left">現在のパスワード</label>
                                                <div class="col-md-9 col-sm-12">
                                                    <input class="g_input form-control form-control-lg form-control-solid mb-1" type="text" value="" name="old_pwd"/>
                                                    <!-- <a href="#" class="font-weight-bold font-size-sm">パスワードを忘れましたか ?</a> -->
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-12 text-lg-right text-left">パスワード</label>
                                                <div class="col-md-9 col-sm-12">
                                                    <input class="g_input form-control form-control-lg form-control-solid" type="text" name="new_pwd" value="" placeholder="８文字以上で入力"/>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-12 text-lg-right text-left">確認のため再入力</label>
                                                <div class="col-md-9 col-sm-12">
                                                    <input class="g_input form-control form-control-lg form-control-solid" type="text" name="confirm_pwd" value="" />
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </form>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Footer-->
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7 col-sm-12 col-md-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <button id="changePwdBtn" class="btn btn-primary font-weight-bold">変更内容を保存</button>
                                                    <a href="/user-profile" class="btn btn-clean font-weight-bold">キャンセル</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-lg-7" id="profile_tab_3" role="tabpanel">
                                <!--begin: Datatable-->
                                <div class="table-responsive">
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>コース</th>
                                                <th>店舗</th>
                                                <th>使用期限</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!--end: Datatable-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-lg-7" id="pricing" role="tabpanel">
                                <div class="row justify-content-center text-center my-0 my-md-25">
                                    <!-- begin: Free-->
                                    <div class="col-md-4 col-xxl-3 p-bg-dark rounded-left shadow-sm">
                                        <div class="pt-25 pb-25 pb-md-10 px-4">
                                            <h4 class="mb-15 text-white">お試しコース</h4>
                                            <span class="px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15 text-dark-25">無料</span>
                                            <br />
                                            <p class="mb-10 d-flex flex-column text-white">
                                                <span>１週間、全店舗の情報を見放題！</span>
                                            </p>
                                            <!-- <a href="" type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">お試しで登録</a> -->
                                        </div>
                                    </div>
                                    <!-- end: Free-->
                                    <!-- begin: Light-->
                                    <div class="col-md-4 col-xxl-3 bg-primary my-md-n15 rounded shadow-sm">
                                        <div class="pt-25 pt-md-37 pb-25 pb-md-10 py-md-28 px-4">
                                            <h4 class="text-white mb-15">ライトコース</h4>
                                            <span class="px-7 py-3 bg-white d-inline-flex flex-center rounded-lg mb-15 bg-white">
                                                <span class="pr-2 font-size-h1 font-weight-bold text-dark">500</span>
                                                <span class="pr-2 text-dark opacity-70">円</span>
                                                <span class="text-dark opacity-70">/&#160;&#160;月あたり</span>
                                            </span>
                                            <br />
                                            <p class="text-white mb-10 d-flex flex-column">
                                                <span>1店舗のみ見放題 !</span>
                                            </p>
                                            <a href="{{ route('course.store') }}" class="btn btn-white text-uppercase font-weight-bolder px-15 py-3">購入</a>
                                        </div>
                                    </div>
                                    <!-- end: Light-->
                                    <!-- begin: Standard-->
                                    <div class="col-md-4 col-xxl-3 p-bg-dark rounded-right shadow-sm">
                                        <div class="pt-25 pb-25 pb-md-10 px-4">
                                            <h4 class="mb-15 text-white">スタンダードコース</h4>
                                            <span class="px-7 py-3 d-inline-flex flex-center rounded-lg mb-15 bg-primary-o-10 text-dark-25">
                                                <span class="pr-2 font-size-h1 font-weight-bold">1000</span>
                                                <span class="pr-2 opacity-70">円</span>
                                                <span class="opacity-70">/&#160;&#160;月あたり</span>
                                            </span>
                                            <br />
                                            <p class="mb-10 d-flex flex-column text-white">
                                                <span>全店舗の情報を見放題！</span>
                                            </p>
                                            <a href="/billing/standard/0" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">購入</a>
                                        </div>
                                    </div>
                                    <!-- end: Standard-->
                                </div>
                            </div>
                            <!--end::Tab-->
                        </div>
                    </div>
                    <!--begin::Card body-->
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
<script src="{{ asset('assets/js/profile-course.js') }}"></script>
<script src="{{ asset('assets/js/pages/features/bootstrap-notify.js') }}"></script>

<script>
    $(document).ready(function () {
        var content = {};

        // Function to open the specified tab
        function openPricingTab(tabId) {
            $('[data-toggle="tab"][href="#' + tabId + '"]').tab('show');
        }

        // Check if there is a 'tab' query parameter in the URL
        var urlParams = new URLSearchParams(window.location.search);
        var tabToOpen = urlParams.get('tab');

        if (tabToOpen) {
            // Open the specified tab
            openPricingTab(tabToOpen);
        }

        /* Update user email */
        $("#updateEmailBtn").click(function () {
            $.ajax({
                type: "POST",
                url: "{{ route('user.account') }}",
                data: $("#userAccountForm").serializeJSON(),
                success: function (response) {
                    handleResponse(response);
                },
                error: function (error) {
                    handleAjaxError('メールの更新に失敗しました. もう一度試してください.');
                }
            });
        });

        /* Change user password */
        $("#changePwdBtn").click(function () {
            var formData = $("#userPasswordChangeForm").serializeJSON();
            var oldPwd = formData.old_pwd;
            var newPwd = formData.new_pwd;
            var confirmPwd = formData.confirm_pwd;

            // Client-side validation
            if (newPwd !== confirmPwd) {
                handleValidationError('新しいパスワードが一致しません.');
                return;
            }

            // AJAX request to the server for password change
            $.ajax({
                type: "POST",
                url: "{{ route('user.password') }}",
                data: formData,
                success: function (response) {
                    handleResponse(response);
                    $("#userPasswordChangeForm input").val('');
                },
                error: function (error) {
                    handleAjaxError('パスワードの変更に失敗しました. 古いパスワードを確認してください.');
                }
            });
        });

        // Notification
        function notification() {
            $.notify(content, {
                type: content.type,
                allow_dismiss: false,
                newest_on_top: true,
                mouse_over: true,
                showProgressbar: false,
                spacing: 10,
                timer: 2000,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                offset: {
                    x: 50,
                    y: 100
                },
                delay: 1000,
                z_index: 10000,
                animate: {
                    enter: 'animate__animated animate__' + content.animation_enter,
                    exit: 'animate__animated animate__' + content.animation_exit
                }
            });
        }

        // Handle AJAX response
        function handleResponse(response) {
            if (response.result === "success") {
                content.message = '';
                content.title = response.message;
                content.type = 'success';
                content.animation_enter = 'bounceInDown';
                content.animation_exit = 'bounceOutUp';
                notification(content);
            } else {
                handleAjaxError(response.message);
            }
        }

        // Handle AJAX error
        function handleAjaxError(errorMessage) {
            content.message = '';
            content.title = errorMessage;
            content.type = 'warning';
            content.animation_enter = 'wobble';
            content.animation_exit = 'bounceOutRight';
            notification(content);
        }

        // Handle client-side validation error
        function handleValidationError(errorMessage) {
            content.message = '';
            content.title = errorMessage;
            content.type = 'warning';
            content.animation_enter = 'wobble';
            content.animation_exit = 'bounceOutRight';
            notification(content);
        }
    });

</script>
@endsection
