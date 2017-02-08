@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <form class="am-form" action="{{ url('/tgsign') }}" method="POST">
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="doc-ipt-county">属地</label>
                <input type="text" name="county" id="doc-ipt-county" placeholder="请输入属地">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-name">姓名</label>
                <input type="text" name="name" id="doc-ipt-name" placeholder="请输入姓名">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-state">状态</label>
                <input type="text" name="state" id="doc-ipt-state" placeholder="请输入状态">
            </div>
            <p>
                <button type="submit" class="am-btn am-btn-default">提交</button>
            </p>
        </from>
    </div>
</div>
@endsection
