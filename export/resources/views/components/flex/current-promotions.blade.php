<section class="md:my-[2rem] my-[1rem]">
    <h2 class="text-primary-gray">{{$set['title']}}</h2>
    <div
      class="grid grid-cols-12 md:gap-[1.875rem] gap-[1.25rem] mt-[1rem] md:mb-[1.8rem] mb-[1.25rem]"
    >
    <statamic:collection:promotions as="promos" limit="3">
      @foreach($promos as $promo)
        <div
          class="lg:col-span-4 md:col-span-6 col-span-12 transform hover:-translate-y-1 transition-transform duration-300 shadow-lg relative md:h-[350px] h-[300px] md:col-span-4 col-span border-black border-2"
        >
          <img
            class="absolute inset-0 object-cover h-full w-full"
            src="{{$promo->thumbnail}}"
            alt="{{$promo->thumbnail->alt ?? ''}}"
          />
          <a
            href="/promos/{{ $promo->slug }}"
            class="absolute top-0 right-0 left-0 bottom-0"
          ></a>
        </div>
      @endforeach
    </statamic:collection:promotions>
    </div>
    <button
      class="bg-white hover:bg-primary-red hover:text-primary-red transition-colors hover:text-white text-black font-bold border-black border-2"
    >
      <a href="/promos" class="py-[.875rem] px-[1.25rem] inline-block">
        See All Promotions
      </a>
    </button>
  </section>
