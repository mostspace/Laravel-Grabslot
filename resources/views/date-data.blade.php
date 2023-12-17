@extends('layouts.app')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row mt-35">
                <div class="col-sm-12 col-md-9 col-lg-9 pr-20 pl-8">
                    <div class="row">
                        <div class="d-flex w-100">
                            <a href="/category" class="btn btn-primary font-weight-bold px-10 py-3 mr-7">ホールデータ</a>
                            <a href="/category" class="btn btn-primary font-weight-bold px-15 py-3">滋賀県</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mt-15 w-100">
                            <h1 class="color-white fs-5">{{ $dateData }} イチバン草津店 データまとめ</h1>
                            <div class="divider w-100px mb-5"></div>
                        </div>

                        <a href="/hall-data-place" class="fs-7 p-link">他の日付のデータを見る</a>
                    </div>

                    <div class="row">
                        <div class="p-panel mt-15 w-100">
                            <div>
                                <h3 class="mb-8 fw-bold color-white fs-7">全体データ</h3>
                            </div>
                            <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                <thead>
                                    <tr>
                                        <th>総差枚</th>
                                        <th>平均差枚</th>
                                        <th>平均G数</th>
                                        <th>勝率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+335,360</td>
                                        <td>+1,198</td>
                                        <td>6,119</td>
                                        <td>65.7%(184/280)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">全データ一覧</span>
                        </div>

                        <button class="btn btn-outline-white mt-10 font-weight-bolder px-15 py-4 w-100 mb-5 rounded-10" data-toggle="collapse" data-target="#collapseOne1">クリックでデータ表示／非表示</button>

                        <!--begin::Accordion-->
                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                            <div id="collapseOne1" class="collapse" data-parent="#accordionExample1">
                                <div class="p-sub-title d-flex align-items-center mt-5">
                                    <div class="p-v-divider h-35px w-3px bg-white"></div>
                                    <span class="fs-6 font-weight-bolder ml-5 color-white">北海道・東北</span>
                                </div>

                                <div class="w-100 mt-10">
                                    <ul class="color-white fs-7 pl-5">
                                        <li class="list-unstyled ml-n8 py-1">【使い方】</li>
                                        <li class="py-1">フィルタ欄に機種名や台番号を入力でデータ絞り込み</li>
                                        <li class="py-1">項目名クリックでデータ並び替え(昇順⇔降順)</li>
                                        <li class="py-1">見切れている項目は横スクロールで閲覧可能</li>
                                        <li class="py-1 list-unstyled ml-n6 d-flex mt-5">
                                            <div class="d-flex w-100 align-items-center">
                                                <label class="mr-5">フィルタ:</label>
                                                <input class=" form-control w-450px h-auto text-white placeholder-white opacity-70 bg-dark-o-70 py-4 px-8 p-form-control rounded-10" id="" type="text" placeholder="" name="" />
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>                           
                        </div>
                        <!--end::Accordion-->
                    </div>

                    <div class="row">
                        <div class="p-panel w-100 mt-5">
                            <div class="mb-10">
                                <h3 class="font-weight-bolder color-white fs-6">機種別データピックアップ</h3>
                            </div>

                            <div class="mt-8">
                                <div class="color-white font-weight-bolder">
                                    1位： <a href="#DataByModel" class="p-link text-underline">マイジャグラーV</a>
                                </div>
                                <!--begin: Datatable-->
                                <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>総差枚</th>
                                            <th>平均差枚</th>
                                            <th>平均G数</th>
                                            <th>勝率</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+335,360</td>
                                            <td>+1,198</td>
                                            <td>6,119</td>
                                            <td>65.7%(184/280)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="mt-8">
                                <div class="color-white font-weight-bolder">
                                    2位： <a href="javascript:;" class="p-link text-underline">スマスロ北斗の拳</a>
                                </div>
                                <!--begin: Datatable-->
                                <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>総差枚</th>
                                            <th>平均差枚</th>
                                            <th>平均G数</th>
                                            <th>勝率</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+335,360</td>
                                            <td>+1,198</td>
                                            <td>6,119</td>
                                            <td>65.7%(184/280)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="mt-8">
                                <div class="color-white font-weight-bolder">
                                    3位： <a href="javascript:;" class="p-link text-underline">アイムジャグラーEX</a>
                                </div>
                                <!--begin: Datatable-->
                                <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>総差枚</th>
                                            <th>平均差枚</th>
                                            <th>平均G数</th>
                                            <th>勝率</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+335,360</td>
                                            <td>+1,198</td>
                                            <td>6,119</td>
                                            <td>65.7%(184/280)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="mt-8">
                                <div class="color-white font-weight-bolder">
                                    4位： <a href="javascript:;" class="p-link text-underline">キン肉マン～7人の悪魔超人編～</a>
                                </div>
                                <!--begin: Datatable-->
                                <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>総差枚</th>
                                            <th>平均差枚</th>
                                            <th>平均G数</th>
                                            <th>勝率</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+335,360</td>
                                            <td>+1,198</td>
                                            <td>6,119</td>
                                            <td>65.7%(184/280)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="mt-8">
                                <div class="color-white font-weight-bolder">
                                    5位： <a href="javascript:;" class="p-link text-underline">ソードアート・オンライン</a>
                                </div>
                                <!--begin: Datatable-->
                                <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>総差枚</th>
                                            <th>平均差枚</th>
                                            <th>平均G数</th>
                                            <th>勝率</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+335,360</td>
                                            <td>+1,198</td>
                                            <td>6,119</td>
                                            <td>65.7%(184/280)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="p-panel w-100 mt-15" id="DataByModel">
                            <div>
                                <h3 class="mb-8 fw-bold color-white fs-6">末尾別データ</h3>
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
                            <!--end: Datatable-->
                            <p class="fs-8 color-white mt-10">末尾クリックで選択した末尾の詳細データへジャンプ出来ます。</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-panel w-100 mt-15">
                            <div>
                                <h3 class="mb-8 fw-bold color-white fs-6">詳細データ</h3>
                            </div>
                            <p class="fs-8 color-white mt-10">機種名クリックで詳細データへジャンプ出来ます。</p>
                            <!--begin: Datatable-->
                            <table class="table table-checkable mt-8" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>設置機種一覧</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">スマスロ北斗の拳</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">アイムジャグラーEX-TP</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">マイジャグラーV</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">甲鉄城のカバネリ</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">劇場版 魔法少女まどか☆マギカ[前編]始まりの物語/[後編]永遠の物語f‐フォルテ‐</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">エヴァンゲリオン ～未来への創造～</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">HEY！エリートサラリーマン鏡</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">交響詩篇エウレカセブン HI-EVOLUTION ZERO TYPE‐ART</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><a href="javascript:;" class="p-link text-underline">防空少女ラブキューレ2～極限の共鳴～</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                            <p class="fs-8 color-white mt-10">※表が見切れている場合は横スクロールすると全ての項目を閲覧出来ます。</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">マイジャグラーV</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">アイムジャグラーEX-TP</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">スマスロ北斗の拳</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">ハッピージャグラーVIII</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">ゴーゴージャグラー3</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">ファンキージャグラー2</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">劇場版 魔法少女まどか☆マギカ[前編]始まりの物語/[後編]永遠の物語f‐フォルテ‐</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-sub-title d-flex align-items-center mt-10">
                            <div class="p-v-divider h-35px w-3px bg-white"></div>
                            <span class="fs-7 font-weight-bold ml-5 color-white">押忍!番長ZERO</span>
                        </div>

                        <div class="p-panel mt-15 w-100">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-inverse p-nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active color-white fs-7" data-toggle="tab" href="#kt_tab_pane_1">データ表示</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-7 color-white" data-toggle="tab" href="#kt_tab_pane_2">データ表示</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-10 pb-5">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                    <!--begin: Datatable-->
                                    <table class="table table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>台番号</th>
                                                <th>G数</th>
                                                <th>差枚</th>
                                                <th>BB</th>
                                                <th>RB</th>
                                                <th>合成確率</th>
                                                <th>BB確率</th>
                                                <th>RB確率</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                            <tr>
                                                <td>616</td>
                                                <td>1881</td>
                                                <td>-448</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>1/208.9</td>
                                                <td>1/313.3</td>
                                                <td>1/626.7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <div class="col-lg-6">
                                        <!--begin::Chart-->
                                        <div id="chart_2"></div>
                                        <!--end::Chart-->
                                    </div>

                                    <div id="wrapper">
                                        <div id="chart-area">

                                        </div>
                                        <!-- <div id="chart-bar">

                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <a href="javascript:;" class="p-link fs-7">設置機種一覧へ戻る。</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="p-panel w-100 mt-15">
                            <div>
                                <h3 class="mb-8 font-weight-bolder color-white fs-7">末尾ゾロ目</h3>
                            </div>
                            <!--begin: Datatable-->
                            <table class="table table-checkable my-10" id="kt_datatable">
                                <thead>
                                    <tr class="bg-main">
                                        <th>機種名</th>
                                        <th>台番号</th>
                                        <th>G数</th>
                                        <th>差枚</th>
                                        <th>差枚</th>
                                        <th>差枚</th>
                                        <th>合成確率</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-main">グランベルム</td>
                                        <td>494</td>
                                        <td>4,901</td>
                                        <td>+1,228</td>
                                        <td>+1,228</td>
                                        <td>+1,198</td>
                                        <td>75.0%(21/28)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-main">バジリスク絆2</td>
                                        <td>494</td>
                                        <td>4,901</td>
                                        <td>+1,228</td>
                                        <td>+1,228</td>
                                        <td>+1,198</td>
                                        <td>75.0%(21/28)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-main">戦国†恋姫</td>
                                        <td>494</td>
                                        <td>4,901</td>
                                        <td>+1,228</td>
                                        <td>+1,228</td>
                                        <td>+1,198</td>
                                        <td>75.0%(21/28)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-main">麻雀格闘倶楽部 覚醒</td>
                                        <td>494</td>
                                        <td>4,901</td>
                                        <td>+1,228</td>
                                        <td>+1,228</td>
                                        <td>+1,198</td>
                                        <td>75.0%(21/28)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-main">転生したらスライムだった件</td>
                                        <td>494</td>
                                        <td>4,901</td>
                                        <td>+1,228</td>
                                        <td>+1,228</td>
                                        <td>+1,198</td>
                                        <td>75.0%(21/28)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-main">009 RE:CYBORG</td>
                                        <td>494</td>
                                        <td>4,901</td>
                                        <td>+1,228</td>
                                        <td>+1,228</td>
                                        <td>+1,198</td>
                                        <td>75.0%(21/28)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Datatable-->

                            <a href="javascript:;" class="p-link fs-7 text-underline">設置機種一覧へ戻る</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-6 col-md-6 mt-15">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="javascript:;" class="fs-7 p-link text-underline me-5">末尾別データ一覧へ戻る</a>
                                <a href="javascript:;" class="fs-7 p-link text-underline me-5">他の日付のデータを見る</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-6 col-md-6 mt-15">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="javascript:;" class="fs-7 p-link text-underline me-5">ホールデータ</a>
                                <a href="javascript:;" class="fs-7 p-link text-underline me-5">滋賀県</a>
                                <a href="javascript:;" class="fs-7 p-link text-underline me-5">イチバン草津店</a>
                            </div>
                        </div>
                    </div>
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
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/features/charts/apexcharts.js"></script>
<!--end::Page Scripts-->
<script src="assets/custom/script.js"></script>
@endsection