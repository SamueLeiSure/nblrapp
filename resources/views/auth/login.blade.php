@extends('layouts.login')

@section('content')
<form class="am-form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="am-form-group">
        <label for="doc-ipt-username">用户名</label>
        <input type="text" name="username" id="doc-ipt-username" value="{{ old('username') }}" placeholder="请输入用户名" required autofocus>
        @if ($errors->has('username'))
        <span>
            <strong>{{ $errors->first('username') }}</strong>
        </span>
        @endif
    </div>

    <div class="am-form-group">
        <label for="doc-ipt-password">密码</label>
        <input type="password" name="password" id="doc-ipt-password" value="{{ old('password') }}" required>
        @if ($errors->has('password'))
        <span>
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="am-form-group">
        <label for="remember-me">
            <input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
        </label>
    </div>

    <div class="am-cf">
        <button type="submit" class="am-btn am-btn-primary am-btn-sm am-fl">
            <span class="am-icon-globe"> 登录</span>
        </button>
    </div>
</form>
@endsection
