@extends('layouts.layout')

@section('template_content')
    <!-- <section class="bard-content mx-auto max-w-7xl">
        {{ $title }}
    </section> -->

    @if (isset($replicator_field))
        @foreach ($replicator_field as $set)
            @if ($set['type'] === 'banner')
                <x-layout.wrapper>
                    @include('components.flex.banner')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'upcoming_events')
                <x-layout.wrapper>
                    @include('components.flex.upcoming-events')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'current_promotions')
                <x-layout.wrapper>
                    @include('components.flex.current-promotions')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'tenants')
                <div class="bg-[#F0F0F0]">
                    <x-layout.wrapper>
                        @include('components.flex.tenants')
                    </x-layout.wrapper>
                </div>
            @endif

            @if ($set['type'] === 'content_and_image')
                <x-layout.wrapper>
                    @include('components.flex.content-image')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'content_block')
                <x-layout.wrapper>
                    @include('components.flex.content-block')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'gallery')
                <x-layout.wrapper>
                    @include('components.flex.gallery')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'heading_and_images')
                <x-layout.wrapper>
                    @include('components.flex.heading-images-below')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'events_list')
                <x-layout.wrapper>
                    @include('components.flex.events-list')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'tenants_list')
                <x-layout.wrapper>
                    @include('components.flex.tenants-list')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'content_and_image_alt')
                <x-layout.wrapper>
                    @include('components.flex.content-image-alt')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'contact_form')
                <x-layout.wrapper>
                    @include('components.flex.contact-form')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'promos_list')
                <x-layout.wrapper>
                    @include('components.flex.promos-list')
                </x-layout.wrapper>
            @endif
        @endforeach
    @endif
@endsection
