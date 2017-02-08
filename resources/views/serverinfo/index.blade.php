@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">服务器信息</strong> / <small>Serverinfo</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="{{ url('/serverinfo/create') }}" class="am-btn am-btn-success">
                            <span class="am-icon-plus"> 新增</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main" id="example">
                    <thead>
                        <tr>
                            <th>IP</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($serverinfos as $serverinfo)
                        <tr>
                            <th>{{ $serverinfo->ip }}</th>
                            <th>{{ $serverinfo->username }}</th>
                            <th>{{ $serverinfo->password }}</th>
                            <th>{{ $serverinfo->description }}</th>
                            <th>
                                <a href="{{ url('/serverinfo/' .$serverinfo->id .'/edit') }}" class="am-btn am-btn-xs am-btn-secondary">
                                    <span class="am-icon-edit"> 编辑</span>
                                </a>
                                <form action="{{ url('/serverinfo/' .$serverinfo->id) }}" method="POST" style="display: inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="am-btn am-btn-xs am-btn-danger">
                                        <span class="am-icon-trash"> 删除</span>
                                    </button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('layouts.jquery')
@include('layouts.datatables')
@endsection
