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
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">活动列表</h3></div>
        <div class="panel-body">
          <div role="grid" id="example_wrapper" class="dataTables_wrapper form-inline no-footer">
          <form action="/activity/list">
            <div class="row">
              <div class="col-xs-6">
                <div class="dataTables_length" id="example_length">
                  <label>
                    <select name="list_length" aria-controls="example" class="form-control input-sm">
                      <option value="10" @if($request->input('list_length') == '10') selected @endif>10</option>
                      <option value="25" @if($request->input('list_length') == '25') selected @endif>25</option>
                      <option value="50" @if($request->input('list_length') == '50') selected @endif>50</option>
                      <option value="100" @if($request->input('list_length') == '100') selected @endif>100</option>
                      </select>
                    </label>
                </div>
              </div>
              <div class="col-xs-6">
                <div id="example_filter" class="dataTables_filter">
                  <label>搜索:
                    <input type="search" name="title" class="form-control input-sm" aria-controls="example">
                    <button class="btn btn-info" style="margin-top: 5px;">搜索</button>
                  </label>
                </div>
              </div>
            </div>
            </form>
            <table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" aria-describedby="example_info" style="width: 100%;">
              <thead>
                <tr role="row">
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column ascending" style="width: 50px;text-align: center;">#</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;text-align: center;">标题</th>
                  <th aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;text-align: center;">关键词</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;text-align: center;">操作</th></tr>
              </thead>
              <tbody>
                    @foreach($activity as $k=>$v)
                        <tr class="even" style="text-align: center;">
                            <td style="width: 50px;">{{$num++}}</td>
                            <td>{{$v->title}}</td>
                            <td>{{$v->keyword}}</td>
                            <td><a href="/activity/edit?id={{$v->id}}">修改</a> | <a href="/activity/dele?id={{$v->id}}">删除</a></td>
                        </tr>
                    @endforeach
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-6"></div>
              <div class="col-xs-6">
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                   <ul class="pagination">
                      {!! $activity->appends($request->only(['list_length','title']))->render() !!} 
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection