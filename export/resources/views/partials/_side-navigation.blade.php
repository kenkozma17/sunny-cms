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
        <statamic:nav:header as="links">
            @foreach($links as $link)
            <li>
                @if(isset($link['icon']))
                    <a target="{{ isset($link->open_in_new_tab) && $link->open_in_new_tab ? '_blank' : '_self' }}" href="{{ $link['url'] }}">
                        <img class="max-w-[40px]" src="{{ $link['icon']->value() ? $link['icon']->value()->manipulate(['width' => 225]) : '' }}" alt="{{ $link['icon']->alt ?? '' }}">
                    </a>
                @else
                    <a target="{{ isset($link->open_in_new_tab) && $link->open_in_new_tab ? '_blank' : '_self' }}"
                    class="font-bold text-sm text-primary-gray hover:text-primary-red cursor-pointer
                    {{ isset($link->is_cta_button) && $link->is_cta_button->value() ? 'border-2 border-primary-gray md:px-[1.25rem] md:py-[.45rem] text-primary-gray hover:text-primary-red' : '' }}"
                    href="{{ $link['url'] }}">
                    {{ $link['title'] }}
                    </a>
                @endif
            </li>
            @endforeach
        </statamic:nav:header>
    </ul>
</nav>
