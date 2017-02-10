@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户信息</strong> / <small>Userinfo</small></div>
        </div>
        <hr>
        <br>
        <br>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main" id="example">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>用户名</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->username }}</th>
                            <th>
                                @if ($user->role == '1')
                                <a href="{{ url('/admin/user/' .$user->id .'/cancel') }}" class="am-btn am-btn-xs am-btn-danger">
                                    <span class="am-icon-smile-o"> 取消老大</span>
                                </a>
                                @else
                                <a href="{{ url('/admin/user/' .$user->id .'/set') }}" class="am-btn am-btn-xs am-btn-secondary">
                                    <span class="am-icon-wrench"> 设为老大</span>
                                </a>
                                @endif
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('jsgroup')
@include('layouts.datatables')
@endsection
@endsection
