@extends('layouts.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Pricing Tables 1</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Pages</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Pricing Tables 1</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                    <!--end::Actions-->
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                        <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Choose Label:</span>
                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="navi-separator mb-3 opacity-70"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-success">Customer</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-danger">Partner</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-primary">Member</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-dark">Staff</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-separator mt-3 opacity-70"></li>
                                <li class="navi-footer py-4">
                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chart text-primary"></i>
                            </span>
                            <h3 class="card-label">Basic Pricing Table</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center my-20">
                            <!--begin: Pricing-->
                            <div class="col-md-4 col-xxl-3">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <!--begin::Icon-->
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M1.4152146,4.84010415 C11.1782334,10.3362599 14.7076452,16.4493804 12.0034499,23.1794656 C5.02500006,22.0396582 1.4955883,15.9265377 1.4152146,4.84010415 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M22.5950046,4.84010415 C12.8319858,10.3362599 9.30257403,16.4493804 12.0067693,23.1794656 C18.9852192,22.0396582 22.5146309,15.9265377 22.5950046,4.84010415 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M12.0002081,2 C6.29326368,11.6413199 6.29326368,18.7001435 12.0002081,23.1764706 C17.4738192,18.7001435 17.4738192,11.6413199 12.0002081,2 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <span class="font-size-h1 d-block d-block font-weight-boldest text-dark-75 py-2">Free</span>
                                    <h4 class="font-size-h6 d-block d-block font-weight-bold mb-7 text-dark-50">1 End Product License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum dolor sit amet edipiscing elit</span>
                                        <span>sed do eiusmod elpors labore et dolore</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Get For Free</a>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end: Pricing-->
                            <!--begin: Pricing-->
                            <div class="col-md-4 col-xxl-3 border-x-0 border-x-md border-y border-y-md-0">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <!--begin::Icon-->
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">69
                                    <sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
                                    <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Business License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum dolor sit amet edipiscing elit</span>
                                        <span>sed do eiusmod elpors labore et dolore</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end: Pricing-->
                            <!--begin: Pricing-->
                            <div class="col-md-4 col-xxl-3">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <!--begin::Icon-->
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">889
                                    <sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
                                    <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Enterprice License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum dolor sit amet edipiscing elit</span>
                                        <span>sed do eiusmod elpors labore et dolore</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end: Pricing-->
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-box-1 text-success"></i>
                            </span>
                            <h3 class="card-label">Fluid Pricing Table</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row my-10">
                            <!--begin: Pricing-->
                            <div class="col-md-6 col-xxl-3 border-right-0 border-right-md border-bottom border-bottom-xxl-0">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Safe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M6.5,16 L7.5,16 C8.32842712,16 9,16.6715729 9,17.5 L9,19.5 C9,20.3284271 8.32842712,21 7.5,21 L6.5,21 C5.67157288,21 5,20.3284271 5,19.5 L5,17.5 C5,16.6715729 5.67157288,16 6.5,16 Z M16.5,16 L17.5,16 C18.3284271,16 19,16.6715729 19,17.5 L19,19.5 C19,20.3284271 18.3284271,21 17.5,21 L16.5,21 C15.6715729,21 15,20.3284271 15,19.5 L15,17.5 C15,16.6715729 15.6715729,16 16.5,16 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6 C3,4.8954305 3.8954305,4 5,4 Z M15.5,15 C17.4329966,15 19,13.4329966 19,11.5 C19,9.56700338 17.4329966,8 15.5,8 C13.5670034,8 12,9.56700338 12,11.5 C12,13.4329966 13.5670034,15 15.5,15 Z M15.5,13 C16.3284271,13 17,12.3284271 17,11.5 C17,10.6715729 16.3284271,10 15.5,10 C14.6715729,10 14,10.6715729 14,11.5 C14,12.3284271 14.6715729,13 15.5,13 Z M7,8 L7,8 C7.55228475,8 8,8.44771525 8,9 L8,11 C8,11.5522847 7.55228475,12 7,12 L7,12 C6.44771525,12 6,11.5522847 6,11 L6,9 C6,8.44771525 6.44771525,8 7,8 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Free</span>
                                    <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">1 End Product License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum</span>
                                        <span>sed do eiusmod</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
                                    </div>
                                </div>
                            </div>
                            <!--end: Pricing-->
                            <!--begin: Pricing-->
                            <div class="col-md-6 col-xxl-3 border-right-0 border-right-xxl border-bottom border-bottom-xxl-0">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-success">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box3.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" fill="#000000" opacity="0.3" />
                                                    <polygon fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">69
                                    <sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
                                    <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Business License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum</span>
                                        <span>sed do eiusmod</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
                                    </div>
                                </div>
                            </div>
                            <!--end: Pricing-->
                            <!--begin: Pricing-->
                            <div class="col-md-6 col-xxl-3 border-right-0 border-right-md border-bottom border-bottom-md-0">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-danger">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Home-heart.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 C2.99998155,19.0000663 2.99998155,19.0000652 2.99998155,19.0000642 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M13.8,12 C13.1562,12 12.4033,12.7298529 12,13.2 C11.5967,12.7298529 10.8438,12 10.2,12 C9.0604,12 8.4,12.8888719 8.4,14.0201635 C8.4,15.2733878 9.6,16.6 12,18 C14.4,16.6 15.6,15.3 15.6,14.1 C15.6,12.9687084 14.9396,12 13.8,12 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">548
                                    <sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
                                    <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Enterprise License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum</span>
                                        <span>sed do eiusmod</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-danger text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
                                    </div>
                                </div>
                            </div>
                            <!--end: Pricing-->
                            <!--begin: Pricing-->
                            <div class="col-md-6 col-xxl-3">
                                <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                    <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                        <span class="svg-icon svg-icon-5x svg-icon-warning">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Star.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">899
                                    <sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
                                    <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Custom License</h4>
                                    <p class="mb-15 d-flex flex-column">
                                        <span>Lorem ipsum</span>
                                        <span>sed do eiusmod</span>
                                        <span>magna siad enim aliqua</span>
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-warning text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
                                    </div>
                                </div>
                            </div>
                            <!--end: Pricing-->
                        </div>
                    </div>
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
