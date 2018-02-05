@extends('layout.admin')

@section('title', '后台首页')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">修改链接</h3>
        <div class="actions pull-right">
          <i class="fa fa-chevron-down"></i>
          <i class="fa fa-times"></i>
        </div>
      </div>
      <div class="panel-body">
        <form action="/links/update" method="post" class="form-horizontal form-border" id="form" novalidate="novalidate">
          <div class="form-group">
            <label class="col-sm-3 control-label">网站名称</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="name" id="input1" maxlength="20" value="{{$links->name}}"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">网站地址</label>
            <div class="col-sm-6">
              <input type="url" class="form-control" name="url" id="input2" value="{{$links->url}}"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-8 col-sm-10">
              <input type="hidden" name="id" value="{{$links->id}}">
              <button type="submit" class="btn btn-primary">提交</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
