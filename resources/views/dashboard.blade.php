@extends('layouts.app')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row mt-35">
                <div class="col-sm-12 col-md-9 col-lg-9 pr-20">
                    <!-- <div>
                        <h1 class="color-white fs-5">今月の注目データ(2023/11)</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="p-panel">
                        <div>
                            <h3 class="mb-8 fw-bold color-white fs-7">月間平均差枚ランキング(2023/11 全国)</h3>
                        </div>
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
                                    <td><a href="/hall-data-place" class="p-link">イチバン草津店(滋賀県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="/date-data" class="p-link">11/5(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">国際センター中村橋店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="/date-data" class="p-link">11/4(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">スーパードーム砺波店(富山県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="/date-data" class="p-link">11/20(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="/date-data" class="p-link">11/21(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">ジャムフレンドクラブ朝霞店(埼玉県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="/date-data" class="p-link">11/22(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">玉屋大橋店(福岡県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href="/date-data" class="p-link">11/23(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">玉屋大橋店(福岡県)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="/date-data" class="p-link">11/24(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="/date-data" class="p-link">11/25(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">メッセ昭島店(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><a href="/date-data" class="p-link">11/26(土)</a></td>
                                    <td><a href="/hall-data-place" class="p-link">TOYO HALL(東京都)</a></td>
                                    <td>+1,198</td>
                                    <td>+335,360</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->

                    <div class="">
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
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">北海道</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">青森県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">秋田県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">山形県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">岩手県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">宮城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">福島県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">東京都</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">神奈川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">埼玉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">千葉県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">茨城県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">栃木県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">群馬県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">愛知県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">岐阜県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">静岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">三重県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">新潟県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">山梨県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">長野県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">石川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">富山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">福井県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">大阪府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">兵庫県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">京都府</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">滋賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">奈良県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">和歌山県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">広島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">岡山県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">鳥取県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">島根県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">山口県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">香川県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">徳島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">愛媛県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">高知県</button>
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
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">福岡県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">佐賀県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">長崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">熊本県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">大分県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">宮崎県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">鹿児島県</button>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-outline-white prefecture font-weight-bold py-3 w-100 mb-5 rounded-10">沖縄県</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-15">
                        <h1 class="color-white fs-5">ホール名から検索</h1>
                        <div class="divider w-100px mb-15"></div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control p-input" placeholder="" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="flaticon-search ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="my-15">
                        <h1 class="color-white fs-5">まとめ記事</h1>
                        <div class="divider w-100px"></div>
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-outline-white font-weight-bold px-15 py-4 w-100 mb-5 rounded-10">出てたお店ピックアップ</button>
                        <button type="submit" class="btn btn-outline-white font-weight-bold px-15 py-4 w-100 mb-5 rounded-10">全台系</button>
                    </div>

                    <div class="my-15">
                        <h1 class="color-white fs-5">旧イベント日・周年日一覧</h1>
                        <div class="divider w-100px"></div>
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-outline-white font-weight-bold px-15 py-4 w-100 mb-5 rounded-10">旧イベント日</button>
                        <button type="submit" class="btn btn-outline-white font-weight-bold px-15 py-4 w-100 mb-5 rounded-10">周年日</button>
                    </div> -->
                </div>

                <!-- @include('layouts.right-sidebar') -->
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
    });
</script>

@endsection