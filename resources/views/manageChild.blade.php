<ul>
    @foreach($childs as $child)
        <li>
            <a><i class="ri-pencil-fill"></i></a>{{ $child->title }}  
            @if(count($child->childs))
                @include('manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
