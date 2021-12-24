@php
    $parentMenus= \App\Http\Controllers\HomeController::menulist();
@endphp

        @foreach($parentMenus as $rs)
            <li class="has-sub">
                <a href="javascript:void(0)">{{$rs->title}}</a>
                <ul class="sub-menu">
                    <li>
                            @if(count($rs->children))
                                @include('home.menutree',['children'=>$rs->children])
                            @endif
                    </a></li>
                </ul>
            </li>
        @endforeach


</li>
