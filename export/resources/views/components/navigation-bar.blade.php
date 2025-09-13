@props(['context', 'red_shape' => true])
<section class="relative main-navigation">
    @if($red_shape)
        <div
        class="bg-primary-red absolute top-full lg:w-[150vw] w-[180vw] xl:h-[600px] lg:h-[500px] h-[450px] md:left-[-15vw] left-[-50vw] transform rotate-[-15deg] 2xl:translate-y-[-500px] lg:translate-y-[-350px] translate-y-[-300px]"
        ></div>
    @endif
    <nav class="bg-[#FBFAF5] md:py-[1.5rem] py-[1.25rem] z-50 fixed top-0 left-0 right-0 shadow-lg">
        <x-layout.wrapper class="flex justify-between items-center">
            <!-- Company Logo -->
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

            <!-- Navigation -->
            <ul class="gap-x-[2rem] xl:flex hidden items-center">
                <statamic:nav:header>
                    <li>
                        @if(isset($icon))
                            <a target="{{ isset($open_in_new_tab) && $open_in_new_tab ? '_blank' : '_self' }}" href="{{ $url }}">
                                <img class="max-w-[40px]" src="{{ $icon->manipulate(['width' => 225]) ?? '' }}" alt="{{ $icon->alt ?? '' }}">
                            </a>
                        @else
                            <a target="{{ isset($open_in_new_tab) && $open_in_new_tab ? '_blank' : '_self' }}"
                            class="font-bold text-sm text-primary-gray hover:text-primary-red cursor-pointer
                            {{ isset($is_cta_button) && $is_cta_button->value() ? 'border-2 border-primary-gray md:px-[1.25rem] md:py-[.45rem] text-primary-gray hover:text-primary-red' : '' }}"
                            href="{{ $url }}">
                            {{ $title }}
                            </a>
                        @endif
                    </li>
                </statamic:nav:header>
            </ul>

            <!-- Hamburger Menu -->
            @include('partials._hamburger-menu')
        </x-layout.wrapper>
    </nav>
</section>
@include('partials._side-navigation')
