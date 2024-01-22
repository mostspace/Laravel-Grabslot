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
                        <!-- <form role="form" method="POST" id="paymentForm" action="/payment">
                            @csrf
                            <div class="form-group">
                                <label for="username">Full name (on the card)</label>
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
                                        <label><span class="hidden-xs">Expiration</span> </label>
                                        <div class="input-group">
                                            <select class="form-control g_input" name="month">
                                                <option value="">MM</option>
                                                @foreach(range(1, 12) as $month)
                                                    <option value="{{$month}}">{{$month}}</option>
                                                @endforeach
                                            </select>
                                            <select class="form-control g_input" name="year">
                                                <option value="">YYYY</option>
                                                @foreach(range(date('Y'), date('Y') + 10) as $year)
                                                    <option value="{{$year}}">{{$year}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label data-toggle="tooltip" title=""
                                            data-original-title="3 digits code on back side of the card">CVV <i
                                            class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control g_input" placeholder="CVV" name="cvv">
                                    </div>
                                </div>
                            </div>
                            <button class="subscribe btn btn-primary btn-block" type="submit"> Confirm </button>
                        </form> -->
                        <form role="form" method="POST" id="paymentForm" action="{{ url('/payment')}}">
                            @csrf
                            <!-- ... existing form fields ... -->

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
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('stripe.api_keys.public_key') }}');
    const elements = stripe.elements();

    const card = elements.create('card');
    card.mount('#card-element');

    const form = document.getElementById('paymentForm');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const { token, error } = await stripe.createToken(card);

        if (error) {
            // Inform the user if there was an error
            // You can customize this part based on your UI/UX
            alert(error.message);
        } else {
            // Insert the token ID into the form so it gets submitted to the server
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    });
</script>

@endsection
