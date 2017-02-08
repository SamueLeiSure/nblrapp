@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <form class="am-form" action="{{ url('/tgsign/' .$tgsign->id) }}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="doc-ipt-county">属地</label>
                <input type="text" name="county" id="doc-ipt-county" value="{{ $tgsign->county }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-name">姓名</label>
                <input type="text" name="name" id="doc-ipt-name" value="{{ $tgsign->name }}">
            </div>
            <div class="am-form-group">
                <label for="doc-ipt-state">状态</label>
                <input type="text" name="state" id="doc-ipt-state" value="{{ $tgsign->state }}">
            </div>
            <p>
                <button type="submit" class="am-btn am-btn-default">提交</button>
            </p>
        </from>
    </div>
</div>
@endsection
