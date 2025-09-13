 <div class="md:pb-[3rem] pb-[1rem] index-listing">
      <div
        class="flex md:flex-row flex-col justify-between md:items-center items-start gap-[1rem]"
      >
        <h1 class="text-white inline-block bg-primary-red px-[1rem] border-l-[5px] border-b-[5px] border-black py-[.25rem]">
            {{ $set['title'] }}
        </h1>

        <statamic:taxonomy:tags as="tags">
            <form method="get" action="" class="relative md:w-auto w-full">
                <select
                    onchange="this.form.submit()"
                    name="tags"
                    id="tags"
                    class="border-black border md:w-[300px] w-full px-[.65rem] py-[.25rem]"
                >
                    <option value="">Show All</option>
                    @foreach($tags as $tag)
                        <option {{ request()->get('tags') === $tag->slug ? 'selected' : '' }} value="{{ $tag->slug }}">
                            {{ $tag->title }}
                        </option>
                    @endforeach
                </select>
            </form>
        </statamic:taxonomy:tags>
      </div>
        <statamic:collection:events paginate="9" as="events" taxonomy:tags="{{request()->get('tags')}}">
            @if(count($events))
                <div class="grid grid-cols-12 md:gap-[1.875rem] sm:gap-[1rem] gap-y-[1rem] md:mt-[1.825rem] mt-[1rem] md:mb-[2.8rem]">
                    @foreach($events as $event)
                        <x-ui.event-card
                            class="lg:col-span-4 md:col-span-6 col-span-12"
                            :event="$event"
                        />
                    @endforeach
                </div>
            @else
                <div>
                    <p class="mt-[1rem] font-bold text-md">No results found.</p>
                </div>
            @endif

            @if ($paginate['total_pages'] > 1)
                <div class="w-full flex items-center gap-[1rem] justify-center">
                    <a href="{{ $paginate['prev_page'] }}">
                        @include('icons.left-arrow', ['class' => 'w-6 h-6 transition-transform hover:scale-[1.085]'])
                    </a>
                    <div class="font-semibold">
                        Page {{ $paginate['current_page'] }} of {{ $paginate['total_pages'] }}
                    </div>
                    <a href="{{ $paginate['next_page'] }}">
                        @include('icons.right-arrow', ['class' => 'w-6 h-6 transition-transform hover:scale-[1.085]'])
                    </a>
                </div>
            @endif
        </statamic:collection>
  </div>
