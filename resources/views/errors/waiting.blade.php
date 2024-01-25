@extends('layouts.error')

@section('content')
	<!--begin::Error-->
	<div class="error error-5 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url({{ asset('assets/media/img/bg-1.jpg') }});">
		<!--begin::Content-->
		<div class="container d-flex flex-row-fluid flex-column justify-content-md-center p-12">
			<h1 class="error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12"><div class="spinner spinner-primary spinner-lg mr-15"></div></h1>
			<p class="font-weight-boldest display-4 color-white">準備中です。</p>
			<a href="/" class="w-275px mt-5 fs-7 fluid-btn"><span class="fluid-btn-inner py-3 text-center font-weight-bolder">戻る</span></a>
			<!-- <p class="font-size-h3">We're working on it and we'll get it fixedas soon possible.You can back or use our Help Center.</p> -->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Error-->
@endsection

