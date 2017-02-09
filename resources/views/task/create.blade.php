@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <form class="am-form" action="{{ url('/task') }}" method="POST">
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="doc-ipt-username">员工号</label>
                <input type="text" value="{{ Auth::user()->name }}" disabled>
                <input type="hidden" name="user_name" id="doc-ipt-username" value="{{ Auth::user()->name }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-cusid">客户号</label>
                <input type="text" name="cus_id" id="doc-ipt-cusid" placeholder="请输入客户号" autofocus>
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-custel">客户电话</label>
                <input type="text" name="cus_tel" id="doc-ipt-custel" placeholder="请输入客户电话">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-calldate">拨打日期</label>
                <input type="date" name="call_date" id="doc-ipt-calldate" placeholder="请输入拨打日期">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-callwhy">拨打事由</label>
                <input type="text" name="call_why" id="doc-ipt-callwhy" placeholder="请输入拨打事由">
            </div>
            <div class="am-form-group">
                <label>拨打成功</label>
                <div class="am-radio">
                    <label>
                        <input type="radio" name="call_ok" value="是" checked>是
                    </label>
                </div>
                <div class="am-radio">
                    <label>
                        <input type="radio" name="call_ok" value="否">否
                    </label>
                </div>
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-callbak">备注</label>
                <input type="text" name="call_bak" id="doc-ipt-callbak" placeholder="请输入备注">
            </div>
            <p>
                <button type="submit" class="am-btn am-btn-default">提交</button>
            </p>
        </from>
    </div>
</div>
@endsection
