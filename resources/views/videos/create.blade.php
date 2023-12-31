<x-layout>
    <x-slot name='content'>
        <div id="upload">
            <div class="row">
                <!-- upload -->
                <div class="col-md-8">
                    <x-validation-error></x-validation-error>
                    <h1 class="page-title"><span>آپلود</span> ویدیو</h1>
                    <form action="{{route('videos.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>@lang('videos.name')</label>
                                <input type="text" name='name' value="{{old('name')}}" class="form-control" placeholder="@lang('videos.name')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.length')</label>
                                <input type="text" name='length'value="{{old('length')}}" class="form-control" placeholder="@lang('videos.length')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.slug')</label>
                                <input type="text" name='slug' value="{{old('slug')}}" class="form-control" placeholder="@lang('videos.slug')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.url')</label>
                                <input type="text" name='url' value="{{old('url')}}" class="form-control" placeholder="@lang('videos.url')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.thumbnail')</label>
                                <input type="text" name='thumbnail' value="{{old('thumbnail')}}" class="form-control" placeholder="@lang('videos.thumbnail')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.category')</label>
                                <select class="form-control" name='category_id' id="category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label>@lang('videos.description')</label>
                                <textarea class="form-control" value="{{old('description')}}" name='description' rows="4" placeholder="@lang('videos.description')"></textarea>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" id="contact_submit" class="btn btn-dm">@lang('videos.save')</button>
                            </div>
                        </div>
                    </form>
                </div><!-- // col-md-8 -->

                <div class="col-md-4">
                    <a href="#"><img src="{{asset('img/upload-adv.png')}}" alt=""></a>
                </div><!-- // col-md-8 -->
                <!-- // upload -->
            </div><!-- // row -->
        </div><!-- // upload -->
    </x-slot>
</x-layout>