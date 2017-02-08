@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <form class="am-form" action="{{ url('/serverinfo') }}" method="POST">
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="doc-ipt-ip">IP</label>
                <input type="text" name="ip" id="doc-ipt-ip" placeholder="请输入IP">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-username">用户名</label>
                <input type="text" name="username" id="doc-ipt-username" placeholder="请输入用户名">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-password">密码</label>
                <input type="text" name="password" id="doc-ipt-password" placeholder="请输入密码">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-description">备注</label>
                <textarea rows="5" name="description" id="doc-ipt-description" placeholder="请输入备注"></textarea>
            </div>
            <p>
                <button type="submit" class="am-btn am-btn-default">提交</button>
            </p>
        </from>
    </div>
</div>
@endsection
