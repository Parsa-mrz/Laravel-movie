<x-auth-layout>
    <x-slot name='content'>
        @section('class-body','log_in_page')
        <div id="log-in" class="site-form log-in-form">
      
      	<div id="log-in-head">
        	<h1>ورود</h1>
            <div id="logo"><a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt=""></a></div>
        </div>
        
        <div class="form-output">
        	<form action="{{route('login.store')}}" method="POST">
                @csrf
				<div class="form-group label-floating">
					<label class="control-label">ایمیل</label>
					<input class="form-control" name="email" placeholder="" type="email">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">رمز عبور</label>
					<input class="form-control" placeholder="" name="password" type="password">
				</div>
                
				<div class="remember">
					<div class="checkbox">
						<label>
							<input name="optionsCheckboxes" type="checkbox" name="remember">
								مرا به خاطر بسپار
						</label>
					</div>
					<a href="#" class="forgot">رمز عبور من را فراموش کرده ام</a>
				</div>
                
				<input class="btn btn-lg btn-primary full-width" type="submit" value="ورود">

			  <div class="or"></div>
				<p>آیا شما یک حساب کاربری ندارید؟ <a href="{{route('register.create')}}">ثبت نام کنید!</a> </p>
            </form>
        </div>
      </div>
    </x-slot>
</x-auth-layout>