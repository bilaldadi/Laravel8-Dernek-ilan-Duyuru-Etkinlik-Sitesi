@foreach($children as $submenu)

        @if(count($submenu->children))
            <li>{{$submenu->title}}</li>

                @include('$home.menutree',['children'=>$submenu->children])

            <hr>
        @else
        <li><a href="{{route('menucontents',['id'=>$submenu->id, 'description'=>$submenu->description])}}">{{$submenu->title}}</a></li>
        @endif

@endforeach
