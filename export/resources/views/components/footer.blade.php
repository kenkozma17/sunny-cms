@props(['context'])
<footer class="bg-primary-red border-t border-black w-full md:py-[4rem] py-[2rem]">
    <x-layout.wrapper>
        <div class="grid grid-cols-12 md:gap-[1rem] md:gap-[2.5rem] gap-y-[2.5rem] py-[2.5rem] justify-center">
            <div class="lg:col-span-3 md:col-span-6 col-span-12">
                <p class="text-white text-[1.5rem] font-bold">{{ $context['footer']->title }}</p>
                <p class="text-white my-[1rem] break-words">{{ $context['company']->address }}</p>
                <p>
                    <img
                    class="w-[4.6rem]"
                    src="{{ $context['brand']->short_logo_white->manipulate(['w' => 300]) ?? '' }}"
                    alt="{{ $context['brand']->short_logo_white->alt ?? '' }}"
                    />
                </p>
            </div>
            @foreach ($context['footer']->footer_sections as $sectionGroup)
                <div class="lg:col-span-3 md:col-span-6 col-span-12">
                    @if ($sectionGroup['type'] === 'footer_section')
                        <div>
                            <p class="text-white md:mb-[.75rem] mb-[.5rem] font-bold text-lg">{{ $sectionGroup['title'] }}</p>
                            @if (!empty($sectionGroup['links']))
                                <ul>
                                    @foreach ($sectionGroup['links'] as $linkGroup)
                                        @if ($linkGroup['type'] === 'link')
                                            <li class="mb-[.5rem]">
                                                <a class="text-white" href="{{ $linkGroup['url'] }}">
                                                    {{ $linkGroup['link_text'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </x-layout.wrapper>
</footer>
