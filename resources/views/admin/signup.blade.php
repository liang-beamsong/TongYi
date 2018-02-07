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
          <h3 class="panel-title">报名列表</h3></div>
        <div class="panel-body">
          <div role="grid" id="example_wrapper" class="dataTables_wrapper form-inline no-footer">
          <form action="/message/siglist">
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
                    <input type="search" name="name" class="form-control input-sm" aria-controls="example">
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
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;text-align: center;">姓名</th>
                  <th aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;text-align: center;">年龄</th>
                  <th aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;text-align: center;">手机</th>
                  <th aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;text-align: center;">邮箱</th>
                  <th aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;text-align: center;">备注</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;text-align: center;">操作</th></tr>
              </thead>
              <tbody>
                    @foreach($signup as $k=>$v)
                        <tr class="even" style="text-align: center;">
                            <td style="width: 50px;">{{$num++}}</td>
                            <td>{{$v->name}}</td>
                            <td>{{$v->age}}</td>
                            <td>{{$v->phone}}</td>
                            <td>{{$v->email}}</td>
                            <td>{{$v->remarks}}</td>
                            <td><a href="/message/delete?id={{$v->id}}">永久删除</a></td>
                        </tr>
                    @endforeach
              </tbody>
            </table>
            <div class="row">
              <div class="col-xs-6"></div>
              <div class="col-xs-6">
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                   <ul class="pagination">
                      {!! $signup->appends($request->only(['list_length','name']))->render() !!} 
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