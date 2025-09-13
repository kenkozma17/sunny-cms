@php
$context = $__data;
@endphp
@extends('layouts.404-layout')
@section('template_content')
<div class="mt-[7.5rem] min-h-[600px]">
    <div class="flex justify-center items-center">
        <div class="pr-6 max-w-[400px]">
            @if (isset($context['brand']->logo))
                @php $logo = $context['brand']->logo @endphp
                @if ($logo->extension() === 'svg')
                    @php $svg = file_get_contents($logo->resolvedPath()); @endphp
                    {!! $svg !!}
                @else
                    <img src="{{ $logo->manipulate(['w' => 300]) ?? '' }}" alt="{{ $logo->alt ? '' }}">
                @endif
            @else
                <span>Logo here</span>
            @endif
        </div>
        <div class="border-l-2 pl-6 max-w-[400px]">
            <h1>Oops!</h1>
            <p class="mt-[1rem]">We couldn't find the page you were looking for.</p>
            <a class="cursor-pointer py-[.875rem] px-[1.25rem] inline-block bg-primary-red hover:bg-white hover:text-primary-red transition-colors text-white font-bold border-black border-2 mt-[1.75rem] md:w-auto w-full" href="/">Go Home</a>
        </div>
    </div>
</div>
@endsection
