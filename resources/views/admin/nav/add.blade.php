@extends('layout.admin')

@section('title', '后台首页')

@section('link')
<link rel="stylesheet" href="/admins/assets/plugins/dataTables/css/dataTables.css">
<style>
  table{
    text-align: center;
  }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">导航修改</h3>
                <div class="actions pull-right">
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">

                <form action="/nav/insert" method="post" class="form-horizontal form-border" id="form" novalidate="novalidate">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">导航名称</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" maxlength="5" name="name" id="input1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">导航地址</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="url" id="input2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">所属导航</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="nid">
                            @foreach($nav as $k=>$v)
                                @if($v->id != 1)
                                 <option value="{{$v->id}}">{{$v->name}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-8 col-sm-10">
                            <button type="submit" class="btn btn-primary">提交信息</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection