<section class="md:py-[2.5rem] py-[1.5rem]">
    <h2>{{ $set['title'] }}</h2>
    <div class="grid grid-cols-12 gap-[1.5rem] mt-[1rem] md:mb-[1.8rem] mb-[1.25rem]">
        <statamic:collection from="tenants" limit="3" taxonomy:categories="{{$set['category']->slug}}">
            <div class="relative bg-[#FFFCEB] transform hover:-translate-y-1 transition-transform duration-300 shadow-lg flex flex-col lg:col-span-4 col-span-12">
                <div class="flex-none relative w-full h-[230px] border-black border-b">
                    <img
                        class="object-cover absolute inset-0 h-full w-full"
                        src="{{ $thumbnail }}"
                        alt="{{ $thumbnail->alt ?? '' }}"
                    />
                </div>
                <div class="flex flex-col relative w-full p-[1.25rem]">
                <h3 class="text-black text-[1.5rem] font-bold">{{ $title }}</h3>
                <p class="text-black mt-[.25rem] mb-[2rem]">
                    {{ $short_description }}
                </p>
                <a
                    href="tenants/{{ $slug }}"
                    class="relative mt-auto block text-black font-bold"
                    >Learn More</a
                >
                </div>
                <a
                href="tenants/{{ $slug }}"
                class="absolute top-0 right-0 left-0 bottom-0"
                ></a>
            </div>
        </statamic:collection>
    </div>

    <button
      class="bg-primary-red hover:bg-white hover:text-primary-red transition-colors text-white font-bold border-black border-2"
    >
      <a href="/tenants" class="py-[.875rem] px-[1.25rem] inline-block">
        See All Tenants
      </a>
    </button>
</section>
