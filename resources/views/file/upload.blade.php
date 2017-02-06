@extends('layouts.amaze')

@section('content')
<form class="am-form" action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="am-form-group am-form-file">
        <button type="button" class="am-btn am-btn-danger am-btn-sm">
            <i class="am-icon-cloud-upload"></i> 选择要上传的文件
        </button>
        <input id="doc-form-file" type="file" name="source">
    </div>
    <div id="file-list"></div>
    <p>
        <button type="submit" class="am-btn am-btn-default">提交</button>
    </p>
</from>
@endsection
