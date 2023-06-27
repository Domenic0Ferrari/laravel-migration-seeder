@php
    $menuItems = config('menu')
@endphp

<nav>
    <ul>
        @foreach ($menuItems as $menuItem)
            <li>
                <a href="{{ route($menuItem['route']) }}"> {{ $menuItem['name'] }} </a>
            </li>
        @endforeach
    </ul>
</nav>