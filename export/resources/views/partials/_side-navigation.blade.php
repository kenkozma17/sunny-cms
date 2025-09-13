<nav class="mobile-navigation z-[99] xl:hidden fixed top-0 bottom-0 right-0 hidden w-full bg-white p-[1.5rem] h-screen">
    <div class="flex items-center">
        <a href="/">
            @if (isset($context['brand']->logo))
                @php $logo = $context['brand']->logo @endphp
                @if ($logo->extension() === 'svg')
                    @php $svg = file_get_contents($logo->resolvedPath()); @endphp
                    {!! $svg !!}
                @else
                    <img src="{{ $logo->manipulate(['w' => 225]) ?? '' }}" alt="{{ $logo->alt ?? '' }}">
                @endif
            @else
                <span>Logo here</span>
            @endif
        </a>
        <button class="mobile-navigation-close absolute right-[2rem] top-[2rem] cursor-pointer">
            @include('icons.close')
        </button>
    </div>
    <ul class="flex flex-col gap-[1rem] justify-center items-center h-full">
        <statamic:nav:header>
            <li>
                @if(isset($icon))
                    <a target="{{ isset($open_in_new_tab) && $open_in_new_tab ? '_blank' : '_self' }}" href="{{ $url }}">
                        <img class="max-w-[40px]" src="{{ $icon->manipulate(['width' => 225]) ?? '' }}" alt="{{ $icon->alt ?? '' }}">
                    </a>
                @else
                    <a target="{{ isset($open_in_new_tab) && $open_in_new_tab ? '_blank' : '_self' }}"
                    class="hover:text-primary-red cursor-pointer text-[1.75rem] active:border-b-2"
                    href="{{ $url }}">
                    {{ $title }}
                    </a>
                @endif
            </li>
        </statamic:nav:header>
    </ul>
</nav>
