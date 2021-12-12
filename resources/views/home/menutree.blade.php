@foreach($children as $submenu)
    <ul>
        @if(count($submenu->$children))
            <li>{{$submenu->title}}</li>
            <ul>
                @include('$home.menutree',['children'=>$submenu->$children])
            </ul>
            <hr>
        @else
        <li><a href="#">{{$submenu->title}}</a></li>
        @endif
    </ul>
@endforeach
