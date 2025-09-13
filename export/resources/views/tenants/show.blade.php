@php
$coordinates = null;
if($location_lat && $location_long) {
    $coordinates = $location_lat . ',' . $location_long;
}
@endphp
@extends('layouts.layout')
@section('template_content')
<div class="md:pb-[4.3rem] pb-[2rem] bg-secondary-beige">
    <x-layout.wrapper>
        <section class="relative md:h-[430px] h-[330px] md:mb-[2.5rem] mb-[1.875rem]">
            <div class="absolute top-0 right-0 left-0 bottom-0 bg-black/40 z-10"></div>
            <img class="absolute inset-0 w-full object-cover h-full"
                src="{{ $banner['banner_image'] }}">
            <p
            class="text-white font-bold break-words z-10 absolute bottom-[1.5rem] right-[2rem] left-[2rem] leading-none uppercase lg:text-[4rem] md:text-[3.25rem] text-[2.5rem]"
            >
            {{ $banner['banner_title']}}
            </p>
        </section>
        <h1 class="text-primary-gray">{{$title}}</h1>

        <div
        class="rounded-md bg-white border-2 border-black md:mt-[1rem] mt-[.75rem] md:p-[2.25rem] p-[1.25rem] grid grid-cols-12 gap-[1rem]"
      >
        <div class="lg:col-span-6 col-span-12 flex flex-col gap-[1.5rem]">
          <!-- Store Hours -->
          <div>
            <p class="font-bold text-[1.5rem] mb-[.5rem]">Operational Hours</p>
            {!! $hours !!}
          </div>

            <!-- Phone -->
            @if($phone)
                <div>
                    <p class="font-bold text-[1.5rem] mb-[.5rem]">Phone</p>
                    <p>{{$phone}}</p>
                </div>
            @endif

            <!-- Email -->
            @if($email)
                <div>
                    <p class="font-bold text-[1.5rem] mb-[.5rem]">Email</p>
                    <a href="mailto:{{ $email }}" class="text-blue-600 hover:underline">{{
                    $email
                    }}</a>
                </div>
           @endif

          <!-- Website -->
            @if($website)
                <div v-if="tenant.website">
                    <p class="font-bold text-[1.5rem] mb-[.5rem]">Website</p>
                    <a
                    target="_blank"
                    href="{{$website}}"
                    class="text-blue-600 hover:underline"
                    >{{ $website }}</a
                    >
                </div>
            @endif

          <!-- About -->
          <div v-if="tenant.about">
            <p class="font-bold text-[1.5rem] mb-[.5rem]">About</p>
            <div class="content">
              {{ $about }}

              video iframe
            </div>
          </div>
        </div>
        <div class="lg:col-span-6 col-span-12 flex flex-col gap-[1.5rem]">
            <!-- Location -->
            @if($coordinates)
            <div class="md:order-last order-first">
                <p class="font-bold text-[1.5rem]">Location</p>
                <p class="mb-[1rem]">{{ $address }}</p>
                <div class="border-2 border-black rounded-md">
                <iframe
                    src="https://www.google.com/maps?q={{$coordinates}}&z=16&output=embed"
                    width="100%"
                    height="450"
                    class="rounded-md"
                    loading="lazy"
                >
                </iframe>
                </div>
            </div>
            @endif

          <!-- Social Media -->
          <div
            v-if="tenant.instagram || tenant.facebook"
            class="md:order-last order-first"
          >
            <p class="font-bold text-[1.5rem]">Social Media</p>
            <div class="flex gap-[1rem] mt-[.5rem]">
              <a class="text-blue-600 hover:underline" href="{{$facebook_link}}" target="_blank">
                <x-icons.facebook  />
              </a>
              <a class="text-blue-600 hover:underline" href="{{$instagram_link}}" target="_blank">
                <x-icons.instagram  />
              </a>
            </div>
          </div>
        </div>
      </div>
    </x-layout.wrapper>
</div>
@endsection
