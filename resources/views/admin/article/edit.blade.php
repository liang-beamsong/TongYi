@extends('layout.admin')

@section('title', '后台首页')

@section('link')
<!-- 配置文件 -->
<script type="text/javascript" src="/admins/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admins/ueditor/ueditor.all.js"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="margin-left: 20px;">修改文章</h3>
            </div>
            <div class="panel-body">
                <form action="/article/update" method="post" enctype="multipart/form-data" class="form-horizontal form-border" id="form" novalidate="novalidate">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">标题</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" maxlength="30" name="title" id="input1" required="" value="{{$article->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">关键词</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" maxlength="50" name="keyword" id="input2" required="" value="{{$article->keyword}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">描述</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" maxlength="100" name="describe" id="input13">{{$article->describe}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">选择分类</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="nav_id">
                            @foreach($nav as $k=>$v)
                                @if($v->id != 1)
                                 <option value="{{$v->id}}" @if($v->id == $article->nav_id) selected @endif>{{$v->name}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">缩略图</label>
                        <div class="col-sm-10">
                            <input type="file"  name="path" id="input1" style="margin-top: 3px;" value="{{$article->path}}">
                        </div>
                    </div>
                    <div class="form-group" style="width: 100%;">
                        <label class="col-sm-1 control-label">正文</label>
                        <div class="col-sm-10">
                            <script id="editor" name="content" type="text/plain" style="width:101.5%;height:450px;">{!!$article->content!!}</script><br>
                            <input type="hidden" name="id" value="{{$article->id}}">
                            <input type="hidden" name="OriginalPath" value="{{$article->path}}">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-primary" style="float: right;">发布文章</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>
@endsection