@extends('layouts.layout')
@section('template_content')
<div class="md:pb-[4.3rem] pb-[2rem] bg-secondary-beige">
    <x-layout.wrapper>
        <section class="relative md:h-[430px] h-[330px] md:mb-[2.5rem] mb-[1.875rem]">
            <div class="absolute top-0 right-0 left-0 bottom-0 bg-black/40 z-10"></div>
            <img class="absolute inset-0 w-full object-cover h-full"
                src="{{$banner['banner_image']}}">
            <p
            class="text-white font-bold break-words z-10 absolute bottom-[1.5rem] right-[2rem] left-[2rem] leading-none uppercase lg:text-[4rem] md:text-[3.25rem] text-[2.5rem]"
            >
            {{ $banner['banner_title'] }}
            </p>
        </section>
        <h1 class="text-primary-gray">{{$title}}</h1>

      <div
        class="rounded-md bg-white border-2 border-black md:mt-[1rem] mt-[.75rem] md:p-[2.25rem] p-[1.5rem] grid grid-cols-12 gap-[1rem]"
      >
        <div class="lg:col-span-8 col-span-12 lg:order-first order-last">
          <p class="font-bold md:text-[2rem] text-[1.25rem] mb-[1rem]">
            Event Details
          </p>
          <div class="content-block">
            @foreach ($content as $set)
                @if($set->type === 'text')
                    <div class="max-w-[1100px] mx-auto md:mb-[3rem] mb-[1.5rem]">
                        {!! $set->text !!}
                    </div>
                @endif

                @if($set->type === 'video_embed')
                    <div class="mx-auto aspect-video" style="width: {{ $set->width }}%">
                        <iframe width="100%" height="100%" src="{{ $set->url }}" frameborder="0"></iframe>
                    </div>
                @endif
            @endforeach
          </div>
        </div>
        <div class="lg:col-span-4 col-span-12 lg:order-last order-first">
            <div class="bg-primary-red border-2 border-black p-[1.375rem]">
                <p class="text-white md:text-[2rem] text-[1.25rem] font-bold">
                @if($start_date && $end_date)
                    {{ Statamic::modify($start_date)->format('M d') . ' - ' . Statamic::modify($end_date)->format('M d, Y') }}
                @else
                    {{ Statamic::modify($start_date)->format('M d, Y') }}
                @endif
                </p>
                <p
                class="text-white md:text-[1.5rem] text-[1.25rem] md:mt-[1rem] mt-[.75rem] md:mb-[1.25rem] mb-[.95rem]"
                >
                {{ Statamic::modify($start_time)->format('g:ma') }}
                @if($end_time->value())
                    - {{ Statamic::modify($end_time)->format('g:ma') }}
                @endif
                </p>
                <p class="text-white font-bold">
                {{$location}}
                </p>
            </div>
          <a
            target="_blank"
            class="font-bold mt-[1.5rem] inline-block text-blue-700 hover:underline"
            href="https://www.facebook.com/sharer/sharer.php?u=https://viractowncenter.com/events/{{ $slug }}"
            >Share on Facebook</a
          >
        </div>
      </div>
      </x-layout.wrapper>
  </div>
@endsection
