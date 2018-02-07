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
<section id="main-content">
<div class="row">
  @foreach($message as $k=>$v)
  <div class="col-md-6">
    <div class="panel panel-solid-info">
      <div class="panel-heading">
        <h3 class="panel-title">{{$v->title}}</h3>
        <div class="actions pull-right">
          <i class="fa fa-chevron-down"></i>
          <i class="fa fa-times" onclick="deletes('{{$v->id}}');"></i>
        </div>
      </div>
      <div class="panel-body">{{$v->content}}</div>
      <div class="panel-footer">联系方式: {{$v->contact}} 时间:<?php echo date('Y-m-d H:i',$v->time)?> </div>
    </div>
  </div>
<script>
  function deletes(id)
  {
    $.get('/message/dele', {'id':id}, function(data){
        var data = JSON.parse(data);
        if(data.status == '502'){
          alert('删除失败');
        }else if(data.status == '200'){
          location.href='/message/list';
        }
    });
  }
</script>
  @endforeach
</div>
</section>
@endsection