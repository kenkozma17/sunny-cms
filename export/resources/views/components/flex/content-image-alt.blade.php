<div class="grid grid-cols-12 md:gap-[3rem] gap-[1.5rem] relative md:my-[4.5rem] my-[2rem]">
    <div class="md:col-span-6 col-span-12">
      <div class="relative md:h-[400px] h-[250px] w-full bg-primary-gray bg-opacity-20 shadow-lg">
        <img
          src="{{ $set['image'] }}"
          alt="{{ $set['image']->alt ?? ''  }}"
          class="p-[1rem] absolute top-0 right-0 left-0 bottom-0 object-cover h-full w-full"
        />
      </div>
    </div>
    <div class="md:col-span-6 col-span-12">
        <h2 class="md:leading-[60px] text-primary-gray">{{ $set['title'] }}</h2>
        <div class="content-block">
            <p>{!! $set['content'] !!}</p>
        </div>
        @if($set['cta_one_group']['cta_text'] || $set['cta_two_group']['cta_text'])
            <div
            class="md:mt-[1.5rem] mt-[1rem] flex md:flex-row flex-col gap-[1rem]"
            >
                @if($set['cta_one_group']['cta_text'])
                    <button
                        v-if="content.buttonOne"
                        class="bg-primary-red hover:bg-white hover:text-primary-red transition-colors text-white font-bold border-black border-2"
                    >
                        <a class="px-[1.25rem] py-[.875rem] w-full inline-block" href="{{$set['cta_one_group']['cta_link']}}">{{$set['cta_one_group']['cta_text']}}</a>
                    </button>
                @endif

                @if($set['cta_two_group']['cta_text'])
                    <button
                        v-if="content.buttonTwo"
                        class="hover:bg-primary-red hover:text-white border-2 border-black font-bold"
                    >
                        <a class="px-[1.25rem] py-[.875rem] w-full inline-block" href="{{ $set['cta_two_group']['cta_link'] }}"> {{ $set['cta_two_group']['cta_text'] }}</a>
                    </button>
                @endif
            </div>
        @endif
      </div>
  </div>
