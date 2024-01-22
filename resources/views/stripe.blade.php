@extends('layouts.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid py-20" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container d-flex justify-content-center">
                 <!--begin::Card-->
                 <div class="p-panel card card-custom w-475px">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Toolbar-->
                        <h4 class="text-white mb-0 fw-bold">
                            @if ($course == "light")
                                ライトコース
                            @else
                                スタンダードコース
                            @endif
                        </h4>
                        <!--end::Toolbar-->
                    </div>
                    <div class="card-body pt-10">
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
                                        <span class="input-group-text text-muted bg-main">
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
                                        <label data-toggle="tooltip" title="カード裏面の3桁のコード">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control g_input card-cvc">
                                    </div>
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>エラーを修正して再試行してください。</div>
                                </div>
                            </div>
        
                            <button class="subscribe btn btn-primary btn-block" type="submit">今払う</button>
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
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
    var course = @json($course);

    $(function() {
    
        /* Stripe Payment Code */
        var $form = $(".require-validation");
        
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
        
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
            });
        
            if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            }
        });
        
        /* Stripe Response Handler */
        function stripeResponseHandler(status, response) {
            if (response.error) {
                var errorMessages = {
                    'incorrect_number': 'カード番号が正しくありません。',
                    'invalid_number': 'カード番号が無効です。',
                    'invalid_expiry_month': '有効期限の月が無効です。',
                    'invalid_expiry_year': '有効期限の年が無効です。',
                    'invalid_cvc': 'CVCが無効です。',
                    'expired_card': 'カードの有効期限が切れています。',
                    'incorrect_cvc': 'CVCが正しくありません。',
                    'card_declined': 'カードが拒否されました。',
                    'missing': '必要なカード情報が提供されていません。',
                    'processing_error': '処理中にエラーが発生しました。もう一度お試しください。'
                    // Add more error messages as needed
                };

                var errorMessage = errorMessages[response.error.code] || 'エラーが発生しました。もう一度お試しください。';
                
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(errorMessage);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                    
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.append("<input type='hidden' name='paymentCourse' value='" + course + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>

@endsection