<x-layout>
    <x-slot name='content'>
        <div id="all-output" class="col-md-100">
            <!-- Category Cover Image -->
            <div id="category-cover-image">
                <div class="image-in">
                    <img src="{{asset('img/category-img.jpg')}}" alt="">
                </div>
                <h1 class="title"><i class="fa fa-music"></i> {{$category->name}}</h1>
                <ul class="category-info">
                    <li>97,174,199 اشتراک </li>
                    <li>255,525,456 بازدید</li>
                    <li>45,23,65 کانال</li>
                </ul>
            </div>
            <!-- // Category Cover Image -->

            <!-- category -->
            <div id="category">
                <div class="row">
                    <div class="col-md-2">
                        <div class="share-in">
                            <h1 class="title">اشتراک در</h1>
                            <ul class="social-link">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> 11200 </a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> 514 </a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i> 514 </a></li>
                                <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i> 155 </a></li>
                            </ul>
                        </div>

                    </div><!-- // col-md-2 -->

                    <div class="col-md-10">

                        <div class="row">
                            @foreach($videos as $video)
                            <x-video-box :video="$video"></x-video-box>
                            @endforeach
                        </div>



                        <!-- Loading More Videos -->
                        <!-- <div id="loading-more">
                            <i class="fa fa-refresh faa-spin animated"></i> <span>در حال بارگیری بیشتر</span>
                        </div> -->
                        <!-- // Loading More Videos -->

                    </div>
                    <div class="row text-center">
                        {{$videos->links()}}

                    </div>



                </div><!-- // row -->
            </div>
            <!-- // category -->

        </div>
    </x-slot>
</x-layout>