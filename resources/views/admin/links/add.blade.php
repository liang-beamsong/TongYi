@extends('layout.admin')

@section('title', '后台首页')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">新增链接</h3>
        <div class="actions pull-right">
          <i class="fa fa-chevron-down"></i>
          <i class="fa fa-times"></i>
        </div>
      </div>
      <div class="panel-body">
        <form action="/links/insert" method="post" class="form-horizontal form-border" id="form" novalidate="novalidate">
          <div class="form-group">
            <label class="col-sm-3 control-label">网站名称</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="name" id="input1" maxlength="20"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">网站地址</label>
            <div class="col-sm-6">
              <input type="url" class="form-control" name="url" id="input2" value="http://"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-8 col-sm-10">
              <button type="submit" class="btn btn-primary">提交</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
