@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">签章信息</strong> / <small>Tgsign</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="{{ url('/tgsign/create') }}" class="am-btn am-btn-success">
                            <span class="am-icon-plus"> 新增</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="am-g">
            <div class="am-u-sm-8">
                <table class="am-table am-table-striped am-table-hover table-main" id="example">
                    <thead>
                        <tr>
                            <th>属地</th>
                            <th>姓名</th>
                            <th>状态</th>
                            <th>日期</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tgsigns as $tgsign)
                        <tr>
                            <th>{{ $tgsign->county }}</th>
                            <th>{{ $tgsign->name }}</th>
                            <th>{{ $tgsign->state }}</th>
                            <th>{{ $tgsign->updated_at }}</th>
                            <th>
                                <a href="{{ url('/tgsign/' .$tgsign->id .'/edit') }}" class="am-btn am-btn-xs am-btn-secondary">
                                    <span class="am-icon-edit"> 编辑</span>
                                </a>
                                <form action="{{ url('/tgsign/' .$tgsign->id) }}" method="POST" style="display: inline;">
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
            <div id="donut-example" class="am-u-sm-4" style="margin-top: 4em;"></div>
        </div>
    </div>
</div>
@include('layouts.jquery')
@include('layouts.datatables')
@include('layouts.morris')
@endsection
