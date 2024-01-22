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
                    <!--end::Card header-->
                    @foreach (['danger', 'success'] as $status)
                        @if(Session::has($status))
                            <p class="alert alert-{{$status}}">{{ Session::get($status) }}</p>
                        @endif
                    @endforeach
                    <!--begin::Card body-->
                    <div class="card-body pt-10">
                        <form role="form" method="POST" id="paymentForm" action="{{ url('/payment') }}">
                            @csrf

                            <div class="form-group">
                                <label for="fullName">Full name (on the card)</label>
                                <input type="text" class="form-control g_input" name="fullName" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <label for="cardNumber">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control g_input" name="cardNumber" placeholder="Card Number">
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
                                            <select class="form-control g_input" name="month">
                                                <option value="">MM</option>
                                                @foreach(range(1, 12) as $month)
                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                            <select class="form-control g_input" name="year">
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
                                        <label data-toggle="tooltip" title="3 digits code on the back side of the card">CVV <i
                                                class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control g_input" placeholder="CVV" name="cvv">
                                    </div>
                                </div>
                            </div>

                            <div id="card-element"></div>

                            <!-- Used to display form errors -->
                            <div id="card-errors" role="alert"></div>

                            <button class="subscribe btn btn-primary btn-block" type="submit"> Confirm </button>
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
<!-- Include Stripe.js -->
<script src="https://js.stripe.com/v3/"></script>

<script>
  // Create a Stripe client
  var stripe = Stripe('pk_test_51OZDVNH8r2pQXKiX103JhGqKp7wEMhBR6hC6M1MA70GWB7Cf8tSHdub84UeBA2KwaxGbznXNzDS2WvtP7PSM6a8o00mDw5IUPO');

  // Create an instance of Elements
  var elements = stripe.elements();

  // Create an instance of the card Element
  var card = elements.create('card');

  // Add an instance of the card Element into the `card-element` div
  card.mount('#card-element');

  // Handle form submission
  var form = document.getElementById('paymentForm');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
      if (result.error) {
        // Inform the user if there was an error
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
      } else {
        // Send the token to your server
        stripeTokenHandler(result.token);
      }
    });
  });

  function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
  }
</script>


@endsection







