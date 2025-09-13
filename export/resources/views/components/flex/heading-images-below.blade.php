<div class="text-center md:my-[2.5rem] my-[1.5rem]">
    <h2 class="text-primary-gray">{{ $set['title'] }}</h2>
    @if($set['images'])
        <div class="grid grid-cols-12 gap-[1rem] md:mt-[1.5rem] mt-[1rem]">
            @foreach($set['images'] as $image)
                <div
                    class="relative md:col-span-4 col-span-12 flex justify-center"
                >
                    <img
                    class="object-contain md:w-52 w-32"
                    src="{{ $image }}"
                    alt="{{ $image->alt ?? '' }}"
                    />
                </div>
            @endforeach
        </div>
    @endif
  </div>
