@extends('layouts.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid py-20" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container d-flex justify-content-center">
                 <!--begin::Card-->
                 <div class="p-panel card card-custom w-500px">
                    <!--begin::Card header-->
                    <div class="card-header min-h-50px justify-content-center">
                        <!--begin::Toolbar-->
                        @if ($course == "light")
                            <h1 class="text-white mb-0 font-weight-bolder w-100 text-center">ライトコース</h1>
                            <p class="w-100 text-center text-white mt-3 mb-7 fs-8">1店舗のみ見放題</p>
                        @else
                            <h1 class="text-white mb-0 font-weight-bolder w-100 text-center">スタンダードコース</h1>
                            <p class="w-100 text-center text-white mt-3 mb-7 fs-8">無制限見放題</p>
                        @endif
                        <!--end::Toolbar-->
                    </div>
                    <div class="card-body pt-15">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center mb-10">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa-solid fa-xmark"></i></a>
                                <p class="fs-8 mb-0 pb-0">{{ Session::get('success') }}</p>
                            </div>
                            
                        @endif
                        <form id="payment-form" role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
                            @csrf

                            <div class="form-group">
                                <label for="fullName">フルネーム（カードに記載）</label>
                                <input type="text" class="form-control g_input">
                            </div>

                            <div class="form-group">
                                <label for="cardNumber">カード番号</label>
                                <div class="input-group">
                                    <input type="text" class="form-control card-number g_input" autocomplete='off'>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-main border-main">
                                            <i class="fab fa-cc-visa fa-lg pr-1"></i>
                                            <i class="fab fa-cc-amex fa-lg pr-1"></i>
                                            <i class="fab fa-cc-mastercard fa-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label><span class="hidden-xs">有効期限</span></label>
                                        <div class="input-group">
                                            <select class="form-control g_input card-expiry-month" name="month">
                                                <option value="">MM</option>
                                                @foreach(range(1, 12) as $month)
                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                            <select class="form-control g_input card-expiry-year" name="year">
                                                <option value="">YYYY</option>
                                                @foreach(range(date('Y'), date('Y') + 10) as $year)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label data-toggle="tooltip" title="カード裏面の3桁のコード">CVCコード<i class="fa fa-question-circle ml-2"></i></label>
                                        <input type="text" class="form-control g_input card-cvc">
                                    </div>
                                </div>
                            </div>

                            @if ($course == "light")
                                <p class="text-white">合計料金：500円</p>
                            @else
                                <p class="text-white">合計料金：1000円</p>
                            @endif

                            <div class='form-group my-10'>
                                <div class='error form-group hide'>
                                    <div class='alert-danger alert'>エラーを修正して再試行してください。</div>
                                </div>
                            </div>
        
                            <button id="paySubmit" class="subscribe btn btn-primary btn-block spinner-white spinner-right" type="submit">今払う</button>
                        </form>
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

<script type="text/javascript">
    var course = @json($course); 
    var store_id = @json($store_id);

    $(document).ready(function() {
        $("#paySubmit").removeClass('spinner');
        $("#paySubmit").click(function() {
            $("#paySubmit").addClass('spinner');
        });
    });
</script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ asset('assets/js/payment.js') }}"></script>

@endsection