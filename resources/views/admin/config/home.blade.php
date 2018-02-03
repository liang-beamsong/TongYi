@extends('layout.admin')

@section('title', '后台首页')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">seo配置</h3>
        <div class="actions pull-right">
          <i class="fa fa-chevron-down"></i>
          <i class="fa fa-times"></i>
        </div>
      </div>
      <div class="panel-body">
        <form action="/config/seotiong" method="post" class="form-horizontal form-border" id="form" novalidate="novalidate">
          <div class="form-group">
            <label class="col-sm-3 control-label">网站名称</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="title" id="input1" value="{{$hconfig->title}}"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">SEO关键词</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="keyword" id="input1" value="{{$hconfig->keyword}}"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">SEO描述</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="describe" id="input1" value="{{$hconfig->describe}}"></div>
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
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">logo</h3>
        <div class="actions pull-right">
          <i class="fa fa-chevron-down"></i>
          <i class="fa fa-times"></i>
        </div>
      </div>
      <div class="panel-body">
        <form action="/config/logo" method="post" enctype="multipart/form-data" class="form-horizontal form-border" id="form" novalidate="novalidate">
            <div class="form-group">
                <div class="col-sm-6" style="width: 410px;height:57px;margin:0 auto;float: none;">
                    <img src="{{$hconfig->logo}}" style="width: 100%;height: 100%;">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">上传logo</label>
                <div class="col-sm-6">
                    <input type="file"  name="logo" id="input1" style="margin-top: 3px;">
                </div>
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
