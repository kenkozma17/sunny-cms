<nav class="main-navigation flex justify-between items-center bg-white w-full md:py-[2rem] py-[1.5rem] md:px-[1.5rem] px-[1rem] max-w-7xl mx-auto">
    <!-- Company Logo -->
    <img src="{{ $brand->logo->manipulate(['w' => 80]) ?? '' }}" alt="{{ $brand->logo->alt ?? '' }}">

    <!-- Navigation -->
    <ul class="gap-x-[2rem] xl:flex hidden">
        <statamic:nav:header>
            <li>
                <a class="cursor-pointer" href="{{ $url }}">{{ $title }}</a>
            </li>
        </statamic:nav:header>
    </ul>

    <!-- Hamburger Menu -->
    @include('partials._hamburger-menu')
</nav>
@include('partials._side-navigation')
