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

                <form action="/nav/update" method="post" class="form-horizontal form-border" id="form" novalidate="novalidate">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">导航名称</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" maxlength="5" name="name" id="input1" value="{{$nav->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">导航地址</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="url" id="input2" value="{{$nav->url}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">所属导航</label>
                        <?php $num = 1?>
                        <div class="col-sm-6">
                            <select class="form-control" name="nid">
                            @foreach($navlist as $k=>$v)
                                @if($v->id != 1 && $nav->nid != 0)
                                 <option value="{{$v->id}}" @if($v->nid == $nav->id) selected @endif>{{$v->name}}</option>
                                @else
                                    <?php $num++?>
                                    @if($num == count($navlist))
                                     <option value="0" selected>一级栏目</option>
                                    @endif
                                @endif
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-8 col-sm-10">
                            <input type="hidden" name='id' value="{{$nav->id}}">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-primary">提交修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection