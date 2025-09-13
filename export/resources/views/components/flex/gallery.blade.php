<div class="bg-primary-red md:py-[3rem] py-[1.5rem] md:px-[1.5rem] px-[.75rem]">
    <x-layout.wrapper>
      <div class="grid grid-cols-12 sm:gap-[1.75rem] gap-y-[1.75rem]">
        @foreach($set['images'] as $image)
            <div class="relative h-[250px] lg:col-span-4 md:col-span-6 col-span-12 border-white border">
            <img
                src="{{ $image }}"
                alt="{{ $image->alt ?? '' }}"
                class="absolute top-0 right-0 left-0 bottom-0 object-cover h-full w-full"
            />
            </div>
        @endforeach
      </div>
    </x-layout.wrapper>
</div>
