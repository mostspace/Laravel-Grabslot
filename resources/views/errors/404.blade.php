@extends('layouts.error')

@section('content')
    <!--begin::Error-->
    <div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30" style="background-image: url({{ asset('assets/media/img/bg-1.jpg') }});">
        <!--begin::Content-->
        <h1 class="font-weight-boldest text-dark-25 mt-15" style="font-size: 10rem">404</h1>
        <p class="font-size-h3 text-dark-25 font-weight-normal">おっとっと！ ページが見つかりません</p>
        <!--end::Content-->
    </div>
    <!--end::Error-->
@endsection

