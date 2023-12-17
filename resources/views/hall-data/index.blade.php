@extends('layouts.app')

@section('breadcrumb')
<div class="my-25">
    <h1 class="color-white fs-2 text-center font-weight-bolder">店舗一覧 </h1>
    <p class="fs-7 color-white text-center mt-7">
        <a href="/" class="color-white font-weight-bolder p-link">ホーム</a>
        <i class="fa-solid fa-angle-right color-white fs-9 mx-3"></i>
        店舗一覧
    </p>
</div>
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9 pr-10">
                    <div>
                        <h1 class="color-white fs-5">今月の注目データ(2023/11)</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="p-panel">
                        <div>
                            <h3 class="mb-8 fw-bold color-white fs-7">月間平均差枚ランキング(2023/11 全国)</h3>
                        </div>
                        <!--begin: Datatable-->
                        <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                            <thead>
                                <tr>
                                    <th>順位</th>
                                    <th>日付</th>
                                    <th>ホール名</th>
                                    <th>平均差枚</th>
                                    <th>総差枚</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/date-data" class="p-link">11/11(土)</a></td>
                                    <td><a class="p-link data-list">イチバン草津店(滋賀県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="/date-data" class="p-link">11/5(土)</a></td>
                                    <td><a class="p-link data-list">国際センター中村橋店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="/date-data" class="p-link">11/4(土)</a></td>
                                    <td><a class="p-link data-list">スーパードーム砺波店(富山県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="/date-data" class="p-link">11/20(土)</a></td>
                                    <td><a class="p-link data-list">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="/date-data" class="p-link">11/21(土)</a></td>
                                    <td><a class="p-link data-list">ジャムフレンドクラブ朝霞店(埼玉県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="/date-data" class="p-link">11/22(土)</a></td>
                                    <td><a class="p-link data-list">玉屋大橋店(福岡県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="/date-data" class="p-link">11/23(土)</a></td>
                                    <td><a class="p-link data-list">玉屋大橋店(福岡県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="/date-data" class="p-link">11/24(土)</a></td>
                                    <td><a class="p-link data-list">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="/date-data" class="p-link">11/25(土)</a></td>
                                    <td><a class="p-link data-list">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><a href="/date-data" class="p-link">11/26(土)</a></td>
                                    <td><a class="p-link data-list">TOYO HALL(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>

                    <div class="p-panel mt-15">
                        <div>
                            <h3 class="mb-8 fw-bold color-white fs-7">月間平均差枚ランキング(2023/11 全国)</h3>
                        </div>
                        <!--begin: Datatable-->
                        <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                            <thead>
                                <tr>
                                    <th>順位</th>
                                    <th>日付</th>
                                    <th>ホール名</th>
                                    <th>平均差枚</th>
                                    <th>総差枚</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/date-data" class="p-link">11/11(土)</a></td>
                                    <td><a class="p-link data-list">イチバン草津店(滋賀県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="/date-data" class="p-link">11/5(土)</a></td>
                                    <td><a class="p-link data-list">国際センター中村橋店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="/date-data" class="p-link">11/4(土)</a></td>
                                    <td><a class="p-link data-list">スーパードーム砺波店(富山県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="/date-data" class="p-link">11/20(土)</a></td>
                                    <td><a class="p-link data-list">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="/date-data" class="p-link">11/21(土)</a></td>
                                    <td><a class="p-link data-list">ジャムフレンドクラブ朝霞店(埼玉県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="/date-data" class="p-link">11/22(土)</a></td>
                                    <td><a class="p-link data-list">玉屋大橋店(福岡県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="/date-data" class="p-link">11/23(土)</a></td>
                                    <td><a class="p-link data-list">玉屋大橋店(福岡県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="/date-data" class="p-link">11/24(土)</a></td>
                                    <td><a class="p-link data-list">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="/date-data" class="p-link">11/25(土)</a></td>
                                    <td><a class="p-link data-list">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><a href="/date-data" class="p-link">11/26(土)</a></td>
                                    <td><a class="p-link data-list">TOYO HALL(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>

                    <div class="mt-15">
                        <h1 class="color-white fs-5">今月の注目データ(2023/11)</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>
                    
                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">北海道・東北</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">北海道</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">青森県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">秋田県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">山形県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">岩手県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">宮城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">福島県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">関東</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">東京都</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">神奈川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">埼玉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">千葉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">茨城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">栃木県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">群馬県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">中部</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">愛知県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">岐阜県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">静岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">三重県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">新潟県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">山梨県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">長野県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">石川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">富山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">福井県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">近畿</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">大阪府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">兵庫県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">京都府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">滋賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">奈良県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">和歌山県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">中国・四国</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">広島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">岡山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">鳥取県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">島根県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">山口県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">香川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">徳島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">愛媛県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">高知県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                            <div class="col-4 sub-left-divider"></div>
                            <div class="col-4 fs-6 color-white fw-bold text-center">九州・沖縄</div>
                            <div class="col-4 sub-right-divider"></div>
                        </div>

                        <div class="adress-list row">
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">福岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">佐賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">長崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">熊本県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">大分県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">宮崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">鹿児島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white font-weight-bold opacity-90 py-3 w-100 mb-5 rounded-10 prefecture">沖縄県</button>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@section('add_js')

<script>
    $(document).ready(function() {
        $(".prefecture").click(function() {
            window.location.href = "/hall-data/" + $(this).text();
        });

        $(".data-list").click(function() {
            window.location.href = "/hall-data/prefecture/" + $(this).text();
        });
    });
</script>

@endsection