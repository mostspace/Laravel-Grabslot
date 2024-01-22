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
                        <h1 class="text-white py-2 mb-0">Payment</h1>
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
                                <label for="fullName">Full name (on the card)</label>
                                <input type="text" class="form-control g_input">
                            </div>

                            <div class="form-group">
                                <label for="cardNumber">Card number</label>
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
                                        <label><span class="hidden-xs">Expiration</span></label>
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
                                        <label data-toggle="tooltip" title="3 digits code on the back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control g_input card-cvc">
                                    </div>
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                </div>
                            </div>
        
                            <button class="subscribe btn btn-primary btn-block" type="submit">Pay Now</button>
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
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
</script>

@endsection







