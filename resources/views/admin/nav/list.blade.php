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
          <h3 class="panel-title">导航列表</h3></div>
        <div class="panel-body">
          <div role="grid" id="example_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">
            </div>
            <table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" aria-describedby="example_info" style="width: 100%;">
              <thead>
                <tr role="row">
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column ascending" style="width: 156px;text-align: center;">导航名称</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;text-align: center;">导航地址</th>
                  <th  aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;text-align: center;">操作</th></tr>
              </thead>
              <tbody>
              @foreach($nav as $k=>$v)
                <tr class="odd">
                  <td class="sorting_1">{{$v->name}}</td>
                  <td>{{$v->url}}</td>
                  <td><a href="/nav/edit?id={{$v->id}}">点击修改</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="row">
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection