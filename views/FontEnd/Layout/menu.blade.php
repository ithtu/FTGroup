<div class="col-md-3 ">
        <ul class="list-group" id="menu">
            <li href="#" class="list-group-item menu1 active">
                Danh Mục
            </li>
            @foreach($theloai as $tl)
                @if(count($tl->loaitin)>0)
                    <li href="{{route('loaitin',[$tl->id, $tl->TenKhongDau])}}" class="list-group-item menu1">
                        {{{$tl->Ten}}}
                    </li>
            <ul>
                        @foreach($tl->loaitin as $lt)
                        <li class="list-group-item">
                            <a href="{{route('loaitin',[$lt->id, $lt->TenKhongDau])}}">{{$lt->Ten}}</a>
                        </li>
                        @endforeach
            </ul>
                @endif
            @endforeach
   
        </ul>
    </div>