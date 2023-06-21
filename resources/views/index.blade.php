<x-layout>
    <x-slot name='content'>
        <!-- latest video component  -->
    <x-latest-videos></x-latest-videos>
<h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
<div class="row">
    <!-- // video-item -->
    @foreach($mostViewedVideos as $video)
    <x-video-box :video="$video"></x-video-box>

    @endforeach
</div>

<h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
<div class="row">
    @foreach($mostPopularVideos as $video)
    <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
</div>
    </x-slot>
</x-layout>
