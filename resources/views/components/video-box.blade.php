<div class="col-lg-4 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">{{$video->lengthInhuman}}</small>
                <a href="{{route('videos.show',$video->slug)}}"><img src="{{$video->thumbnail}}" alt=""></a>
            </div>
            <div class="video-info">
                <a href="{{route('videos.show',$video->slug)}}" class="title">{{$video->description}}</a>
                <a href="{{route('videos.edit',$video->slug)}}">
                    <i class="fa fa-pencil">

                    </i>
                </a>
                <a class="channel-name" href="#">مهرداد سامی<span>
                        <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                <span class="date"><i class="fa fa-clock-o"></i>{{$video->created_at}}</span>
                <span class="date"><i class="fa fa-tag"></i><a href="#">{{$video->category?->name}}</a></span>
            </div>
        </div>
    </div>