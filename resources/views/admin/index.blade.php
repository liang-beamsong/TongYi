@extends('layout.admin')

@section('title', '后台首页')

@section('content')

<section id="main-content">
    <!--tiles start-->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-tile detail tile-blue">
                <div class="content">
                    <h1 class="text-left timer" data-from="0" data-to="32" data-speed="2500"></h1>
                    <p>未处理订单</p>
                </div>
                <div class="icon"><i class="fa fa fa-envelope"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-tile detail tile-purple">
                <div class="content">
                    <h1 class="text-left timer" data-to="105" data-speed="2500"></h1>
                    <p>成交金额</p>
                </div>
                <div class="icon"><i class="fa fa-bar-chart-o"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-tile detail tile-red">
                <div class="content">
                    <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"></h1>
                    <p>新增用户</p>
                </div>
                <div class="icon"><i class="fa fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-tile detail tile-turquoise">
                <div class="content">
                    <h1 class="text-left timer" data-from="0" data-to="56" data-speed="2500"></h1>
                    <p>新增评论</p>
                </div>
                <div class="icon"><i class="fa fa-comments"></i>
                </div>
            </div>
        </div>
    </div>
    <!--tiles end-->
</section>
@endsection