@props(['event', 'slug' => 'events'])
@php
    $eventDate = null;
    if($event->start_date) {
        $startDate = $event->start_date;
        $endDate = $event->end_date;
        $eventDate = $startDate;

        if($endDate) {
            $eventDate = $startDate->format('M d') . ' - ' . $endDate->format('d, Y');
        }
    }
@endphp
<div {{ $attributes->merge(['class' => "flex flex-col border border-black bg-[#FFFCEB] z-10 relative transform hover:-translate-y-1 transition-transform duration-300 shadow-lg"]) }}>
    <div class="relative w-full h-[300px] min-h-[300px]">

    @if($eventDate)
        <div
            class="z-10 text-black bg-[#FFFCEB] border-black border inline relative top-[10px] left-[10px] px-[.75rem] py-[.25rem] text-sm font-semibold"
        >
            {{ $eventDate }}
        </div>
    @endif

    @if($event->thumbnail)
        <img
          class="absolute top-0 right-0 left-0 bottom-0 object-cover h-full w-full"
          src="{{ $event->thumbnail }}"
          alt="{{ $event->thumbnail->alt ?? '' }}"
        />
    @endif

    </div>
    <div class="md:p-[1.5rem] p-[1rem] bg-[#FFFCEB] border-t border-black h-full flex flex-col">
      <h3>{{ $event->title }}</h3>
      @if($event->short_description)
        <p class="mt-[.625rem] mb-[1rem]">{{ $event->short_description }}</p>
      @endif
      <p class="font-bold mt-auto">Learn More</p>
      <a
        href="{{$slug}}/{{ $event->slug }}"
        class="absolute top-0 right-0 left-0 bottom-0"
      ></a>
    </div>
  </div>
