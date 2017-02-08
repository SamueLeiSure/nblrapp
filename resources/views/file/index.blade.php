@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">我的公文</strong> / <small>Myfiles</small></div>
        </div>
        <hr>
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="{{ url('/file/create') }}" class="am-btn am-btn-success">
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
                            <th>标题</th>
                            <th>文号</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <th>{{ $file->title }}</th>
                            <th>{{ $file->code }}</th>
                            <th>
                                <a href="{{ url('/file/' .$file->id) }}" class="am-btn am-btn-xs am-btn-warning">
                                    <span class="am-icon-archive"> 查看</span>
                                </a>
                                <form action="{{ url('/file/' .$file->id) }}" method="POST" style="display: inline;">
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
