@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">电话记录</strong> / <small>Tel-record</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-8">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="{{ url('/task/create') }}" class="am-btn am-btn-success">
                            <span class="am-icon-plus"> 新增</span>
                        </a>
                        <button class="am-btn am-btn-warning" data-am-collapse="{target: '#search-collapse'}">
                            <span class="am-icon-search"> 查询</span>
                        </button>
                        <a href="{{ url('/task') }}" class="am-btn am-btn-danger">
                            <span class="am-icon-refresh"> 重置</span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="am-collapse" id="search-collapse">
                    <form action="{{ url('/searchtask') }}" class="am-form-inline" method="POST">
                        {{ csrf_field() }}
                        @if (Auth::user()->role == 1)
                        <div class="am-form-group">
                            <input type="text" class="am-form-field" placeholder="员工号" name="user_name">
                        </div>
                        @else
                        <div class="am-form-group">
                            <input type="text" class="am-form-field" value="{{ Auth::user()->name }}" disabled>
                            <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                        </div>
                        @endif
                        <div class="am-form-group">
                            <input type="text" class="am-form-field" placeholder="客户号" name="cus_id">
                        </div>
                        <br>
                        <div class="am-form-group">
                            <input type="text" class="am-form-field" placeholder="客户电话" name="cus_tel">
                        </div>
                        <div class="am-form-group">
                            <input type="text" class="am-form-field" placeholder="拨打事由" name="call_why">
                        </div>
                        <div class="am-form-group">
                            <input type="text" class="am-form-field" placeholder="备注" name="call_bak">
                        </div>
                        <div class="am-form-group">
                            <input type="date" class="am-form-field" placeholder="拨打日期" name="call_date">
                        </div>
                        <div class="am-form-group">
                            <label>拨打成功:</label>
                            <div class="am-radio">
                                <label>
                                    <input type="radio" name="call_ok" value="是">是
                                </label>
                            </div>
                            <div class="am-radio">
                                <label>
                                    <input type="radio" name="call_ok" value="否">否
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="am-btn am-btn-default">提交</button>
                    </form>
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
                            <th>员工号</th>
                            <th>客户号</th>
                            <th>客户电话</th>
                            <th>拨打日期</th>
                            <th>拨打事由</th>
                            <th>拨打成功</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <th>{{ $task->user_name }}</th>
                            <th>{{ $task->cus_id }}</th>
                            <th>{{ $task->cus_tel }}</th>
                            <th>{{ $task->call_date }}</th>
                            <th>{{ $task->call_why }}</th>
                            <th>{{ $task->call_ok }}</th>
                            <th>{{ $task->call_bak }}</th>
                            <th>
                                <a href="{{ url('/task/' .$task->id .'/edit') }}" class="am-btn am-btn-xs am-btn-secondary">
                                    <span class="am-icon-edit"> 编辑</span>
                                </a>
                                <form action="{{ url('/task/' .$task->id) }}" method="POST" style="display: inline;">
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
@section('jsgroup')
@include('layouts.datatables')
@endsection
@endsection
