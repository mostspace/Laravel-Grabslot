@extends('layouts.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid py-20" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container d-flex justify-content-center">
                 <!--begin::Card-->
                 <div class="p-panel card card-custom">
                    <!--begin::Card header-->
                    <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                        <!--begin::Toolbar-->
                        <h1 class="text-white">Payment</h1>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    @foreach (['danger', 'success'] as $status)
                        @if(Session::has($status))
                            <p class="alert alert-{{$status}}">{{ Session::get($status) }}</p>
                        @endif
                    @endforeach
                    <!--begin::Card body-->
                    <div class="card-body">
                        <form role="form" method="POST" id="paymentForm" action="{{ url('/payment')}}">
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
                                        <span class="input-group-text text-muted">
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
    
@endsection
