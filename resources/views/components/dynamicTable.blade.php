<div class="model-table-row mt-7">
    <div class="td-block td-header"></div>
    <div class="td-block td-header"></div>
    <div class="td-block td-header">台番号</div>
    @foreach($modelMonthData as $date => $items)
    <div class="td-block td-header">
        {{ substr($date, 5) }}
    </div>
    @endforeach
</div>
<div class="model-table">
    @php
        $maxItemCount = 0; 
        $mainItemCount = 0; 
        $blueCnt = 0; 
        $redCnt = 0; 

        foreach ($modelMonthData as $items) {
            $maxItemCount = max($maxItemCount, count($items));
        }

        $mainItemCount = $maxItemCount - 1;

        $modelId = [];

        foreach ($modelMonthData as $date => $items) {
            for ($i = 0; $i < $mainItemCount; $i++) {
                $modelId[$i] = isset($items[$i]['machine_number']) ? $items[$i]['machine_number'] : '';
            }
            break;
        }
    @endphp

    @for ($i = 0; $i < $maxItemCount; $i++)
        <div class="model-table-row">
            @foreach ($modelMonthData as $date => $items)
                @if ($i < $mainItemCount)
                    @php
                        $redCnt += isset($items[$i]['item_color']['red']) ? $items[$i]['item_color']['red'] : 0;
                        $blueCnt += isset($items[$i]['item_color']['blue']) ? $items[$i]['item_color']['blue'] : 0;
                    @endphp
                @endif
            @endforeach

            @if ($i < $mainItemCount)
                <div class="td-block td-pink">
                    @if($i < $mainItemCount) {{ $redCnt }} @endif
                </div>
            @else
                <div class="td-block"></div>
            @endif

            @if ($i < $mainItemCount)
                <div class="td-block td-light-blue">
                    @if($i < $mainItemCount) {{ $blueCnt }} @endif
                </div>
            @else
                <div class="td-block"></div>
            @endif                                       

            @php
                $redCnt = 0;
                $blueCnt = 0;
            @endphp

            <div class="td-block">@if($i < $mainItemCount) {{ $modelId[$i] }} @endif</div>

            @foreach ($modelMonthData as $date => $items)
                @if ($i < $mainItemCount)
                    @if ( isset($items[$i]['extra_sheet']) )
                        <div class="td-block {{ isset($items[$i]['item_color']['color']) ? $items[$i]['item_color']['color'] : '' }} td-sheet" data-id="{{ isset($items[$i]['id']) ? $items[$i]['id'] : '' }}" data-machine_number="{{ isset($items[$i]['machine_number']) ? $items[$i]['machine_number'] : '' }}" data-toggle="modal" data-target="#dataModal">
                            {{ $items[$i]['extra_sheet'] ?? '' }}
                        </div>
                    @else
                        <div class="td-block"></div>
                    @endif
                @else
                    <div class="td-block">
                        <div class="text-center dailyModelBlue">
                            {{ end($items)['blue'] ?? '' }}
                        </div>
                        <div class="text-center dailyModelRed">
                            {{ end($items)['red'] ?? '' }}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endfor
</div>