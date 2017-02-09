@extends('layouts.login')

@section('content')
<form class="am-form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    
    <div class="am-form-group">
        <label for="doc-ipt-name">名称</label>
        <input type="text" name="name" id="doc-ipt-name" value="{{ old('name') }}" placeholder="请输入名称" required autofocus>
        @if ($errors->has('name'))
        <span>
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>

    <div class="am-form-group">
        <label for="doc-ipt-username">名称</label>
        <input type="text" name="username" id="doc-ipt-username" value="{{ old('username') }}" placeholder="请输入用户名" required>
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
        <label for="doc-ipt-password-confirm">密码</label>
        <input type="password" name="password_confirmation" id="doc-ipt-password-confirm" required>
    </div>

    <div class="am-cf">
        <button type="submit" class="am-btn am-btn-primary am-btn-sm am-fl">
            <span class="am-icon-fire"> 注册</span>
        </button>
    </div>
</form>
@endsection
