<x-auth-layout>
    <x-slot name='content'>
        @section('class-body','sing-up-page')
        <div id="log-in" class="site-form log-in-form">

            <div id="log-in-head">
                <h1>ثبت نام</h1>
                <div id="logo"><a href="{{route('index')}}"><img src="asset('img/logo.png')" alt=""></a></div>
            </div>

            <div class="form-output">
                <x-validation-error></x-validation-error>
                <form action="{{route('register.store')}}" method="POST">
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label">@lang('auth.name')</label>
                        <input class="form-control" name="name" placeholder="" type="text">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">@lang('auth.email')</label>
                        <input class="form-control" placeholder="" name="email" type="email">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">@lang('auth.password')</label>
                        <input class="form-control" placeholder="" name="password" type="password">
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">@lang('auth.password.confirmation')</label>
                        <input class="form-control" placeholder="" name="password-confirmation" type="password">
                    </div>


                    <div class="remember">
                        <div class="checkbox">
                            <label>
                                <input name="optionsCheckboxes" type="checkbox">
                                @lang('auth.remember')
                            </label>
                        </div>
                    </div>
                    <input class="btn btn-lg btn-primary full-width" type="submit" value="@lang('auth.signup')">

                    <div class="or"></div>

                    <p>شما یک حساب کاربری دارید؟ <a href="{{route('login.create')}}"> ورود!</a> </p>
                </form>
            </div>
        </div>
    </x-slot>
</x-auth-layout>