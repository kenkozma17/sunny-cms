<section>
    <h2
      class="text-white inline-block bg-primary-red px-[1rem] border-l-[5px] border-b-[5px] border-black py-[.25rem]"
    >
      {{ $set['title'] }}
    </h2>

    <div
      class="grid grid-cols-12 md:gap-[1.875rem] gap-[1.25rem] md:mt-[1.825rem] mt-[1rem] md:mb-[1.8rem] mb-[1.25rem]"
    >
        <statamic:collection:events as="events" limit="3">
            @foreach($events as $event)
                <x-ui.event-card
                    class="lg:col-span-4 md:col-span-6 col-span-12"
                    :event="$event"
                />
            @endforeach
        </statamic:collection>
    </div>

    <button
      class="bg-primary-red hover:bg-white hover:text-primary-red transition-colors text-white font-bold border-black border-2"
    >
      <a href="/events" class="py-[.875rem] px-[1.25rem] inline-block">
        See All Events
      </a>
    </button>
</section>
