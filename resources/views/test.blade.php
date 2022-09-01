<html>
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="{{ url('/') }}"><b class="fa fa-home"></b> Начало</a></li> -->
        @foreach ($categories as $cat)
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{$cat->name}} <i class="fa fa-caret-down"></i>
            </a>
            @foreach($subcategories as $sub)
            @if($sub->parent_id == $cat->id)
            <ul class="dropdown-menu">
                <li><a href="{{ url('category/'.$sub->name) }}">{{ $sub->name }}</a></li>
            </ul>
            @endif
            @endforeach
        </li>
        @endforeach
    </ul>
</div>

</html>