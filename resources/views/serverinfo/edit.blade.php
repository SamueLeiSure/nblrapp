@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <form class="am-form" action="{{ url('/serverinfo/' .$serverinfo->id) }}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="doc-ipt-ip">IP</label>
                <input type="text" name="ip" id="doc-ipt-ip" value="{{ $serverinfo->ip }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-username">用户名</label>
                <input type="text" name="username" id="doc-ipt-username" value="{{ $serverinfo->username }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-password">密码</label>
                <input type="text" name="password" id="doc-ipt-password" value="{{ $serverinfo->password }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-description">备注</label>
                <textarea rows="5" name="description" id="doc-ipt-description" placeholder="请输入备注">{{ $serverinfo->description }}</textarea>
            </div>
            <p>
                <button type="submit" class="am-btn am-btn-default">提交</button>
            </p>
        </from>
    </div>
</div>
@endsection
