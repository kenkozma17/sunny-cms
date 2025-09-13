@foreach ($set['content'] as $set)
    @if($set->type === 'text')
        <div class="content-block">
            <div class="max-w-[1100px] mx-auto md:my-[2.5rem] my-[1.5rem]">
                {!! $set->text !!}
            </div>
        </div>
    @endif

    @if($set->type === 'video_embed')
        <div class="content-block">
            <div class="max-w-[1100px] mx-auto aspect-video" style="width: {{ $set->width }}%">
                <iframe width="100%" height="100%" src="{{ $set->url }}" frameborder="0"></iframe>
            </div>
        </div>
    @endif
@endforeach
