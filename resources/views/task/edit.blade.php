@extends('layouts.amaze')

@section('content')

<div class="admin-content">
    <div class="admin-content-body">
        <form class="am-form" action="{{ url('/task/' .$task->id) }}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="doc-ipt-username">员工号</label>
                <input type="text" value="{{ Auth::user()->name }}" disabled>
                <input type="hidden" name="user_name" id="doc-ipt-username" value="{{ Auth::user()->name }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-cusid">客户号</label>
                <input type="text" name="cus_id" id="doc-ipt-cusid" value="{{ $task->cus_id }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-custel">客户电话</label>
                <input type="text" name="cus_tel" id="doc-ipt-custel" value="{{ $task->cus_tel }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-calldate">拨打日期</label>
                <input type="date" name="call_date" id="doc-ipt-calldate" value="{{ $task->call_date }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-callwhy">拨打事由</label>
                <input type="text" name="call_why" id="doc-ipt-callwhy" value="{{ $task->call_why }}">
            </div>
            <div class="am-form-group">
                <label>拨打成功</label>
                @if ($task->call_ok == "是")
                <div class="am-radio">
                    <label>
                        <input type="radio" name="call_ok" id="call_ok_yes" value="是" checked>是
                    </label>
                </div>
                <div class="am-radio">
                    <label>
                        <input type="radio" name="call_ok" id="call_ok_no" value="否">否
                    </label>
                </div>
                @else
                <div class="am-radio">
                    <label>
                        <input type="radio" name="call_ok" id="call_ok_yes" value="是">是
                    </label>
                </div>
                <div class="am-radio">
                    <label>
                        <input type="radio" name="call_ok" id="call_ok_no" value="否" checked>否
                    </label>
                </div>
                @endif      
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-callbak">备注</label>
                <input type="text" name="call_bak" id="doc-ipt-callbak" value="{{ $task->call_bak }}">
            </div>
            <p>
                <button type="submit" class="am-btn am-btn-default">提交</button>
            </p>
        </from>
    </div>
</div>
@endsection
