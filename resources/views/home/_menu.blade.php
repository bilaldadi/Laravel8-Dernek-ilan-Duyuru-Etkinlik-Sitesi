@php
    $parentMenus= \App\Http\Controllers\HomeController::menulist();
@endphp

<li><a href="#">Menus</a>
    <ul>
        @foreach($parentMenus as $rs)
            <li><a>{{$rs->title}}</a>

                <ul>

                    <li><a href="#">
                            @if(count($rs->children))
                                @include('home.menutree',['children'=>$rs->children])
                            @endif
                        </a></li>
                </ul>
            </li>
        @endforeach

    </ul>
</li>
