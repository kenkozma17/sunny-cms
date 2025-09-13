<section class="relative md:h-[430px] h-[330px] md:mb-[2.5rem] mb-[1.875rem]">
    <div class="absolute top-0 right-0 left-0 bottom-0 bg-black/40 z-10"></div>
    <img class="absolute inset-0 w-full object-cover h-full" src="{{ $set['banner_image'] }}" alt="{{ $set['banner_image']->alt ?? '' }}">
    @if (isset($set['banner_image']))
        <h1
        class="text-white font-bold break-words z-10 absolute bottom-[1.5rem] right-[2rem] left-[2rem] leading-none uppercase lg:text-[4rem] md:text-[3.25rem] text-[2.5rem]"
        >
        {{ $set['banner_title'] }}
        </h1>
    @endif
</section>
