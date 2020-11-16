<link href="{{ asset('admin/assets/css/bootstrap.min.css')}}"  rel="stylesheet"/>

<!-- Animation library for notifications   -->
<link href="{{ asset('admin/assets/css/animate.min.css')}}"  rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="{{ asset('admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}"  rel="stylesheet"/>


<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="{{ asset('admin/assets/css/demo.css')}} "/>
<link href="{{ asset('auth/assets/css/login.css')}}"  rel="stylesheet"/>

@if($message = Session::get('danger'))
<div class="alert alert-danger">
    <button type="button" aria-hidden="true" class="close">×</button>
<span><b> Hello </b> {{$message}}</span>
</div>
@endif




    <form method="POST" action="/postlogin">
    <div class="login-card">
        <h1>Log-in</h1><br>
        @csrf
        <input type="text" name="email" placeholder="Username" autocomplete="off">
        <input type="password" name="password" placeholder="Password">
        <input type="submit"  class="login login-submit">
    </form>
    </div>

