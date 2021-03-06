﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head lang="en">
    <meta charset="utf-8">
    <title>{{$list->title}}</title>
    <meta name="keywords" content="{{$list->keyword}}">
    <meta name="description" content="{{$list->describe}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="/homes/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/homes/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/homes/css/slick.css" />
    <link href="/homes/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/homes/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="/homes/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/homes/css/ui-select.css" />
    <!-- <script src="/homes/js/owl.carousel.min.js"></script> -->
    <!-- <link rel="stylesheet" href="/homes/css/main.css"/>-->
    <link rel="stylesheet" href="/homes/css/style.css" />
    <link rel="stylesheet" href="/homes/css/media.css" />
    <!-- <script src="/homes/js/jquery-1.11.2.min.js"></script> -->
    <script src="/homes/js/jquery.min.js"></script>
    <script src="/homes/js/bootstrap.min.js"></script>
    <script src="/homes/js/wow.min.js"></script>
    <!-- <script src="/homes/js/owl.carousel.min.js"></script> -->
    <script src="/homes/js/owl.carousel.js"></script>
    <script src="/homes/js/jquery.superslide.2.1.1.js"></script>
    <script src="/homes/js/picturefill.min.js"></script>
    <script src="/homes/js/slick.min.js"></script>
    <script src="/homes/js/jquery.animatenumber.min.js"></script>
    <script src="/homes/js/myjs.js"></script>
    <script src="/homes/js/jquery.vide.js"></script>
    <!--[if lt IE 9]>
      <script src="/homes/js/html5shiv.min.js"></script>
      <script src="/homes/js/respond.min.js"></script>
    <![endif]-->
    <script>document.createElement("picture");
      $(function() {
        var wow = new WOW({
          boxClass: 'wow',
          animateClass: 'animated',
          offset: 0,
          mobile: true,
          live: true
        });
        wow.init();
      })</script>
    <script type="text/javascript">//图片滚动 调用方法 imgscroll({speed: 30,amount: 1,dir: "up"});
      $.fn.imgscroll = function(o) {
        var defaults = {
          speed: 40,
          amount: 0,
          width: 1,
          dir: "left"
        };
        o = $.extend(defaults, o);

        return this.each(function() {
          var _li = $("li", this);
          _li.parent().parent().css({
            overflow: "hidden",
            position: "relative"
          }); //div
          _li.parent().css({
            margin: "0",
            padding: "0",
            overflow: "hidden",
            position: "relative",
            "list-style": "none"
          }); //ul
          _li.css({
            position: "relative",
            overflow: "hidden"
          }); //li
          if (o.dir == "left") _li.css({
            float: "left"
          });

          //初始大小
          var _li_size = 0;
          for (var i = 0; i < _li.size(); i++) _li_size += o.dir == "left" ? _li.eq(i).outerWidth(true) : _li.eq(i).outerHeight(true);

          //循环所需要的元素
          if (o.dir == "left") _li.parent().css({
            width: (_li_size * 3) + "px"
          });
          _li.parent().empty().append(_li.clone()).append(_li.clone()).append(_li.clone());
          _li = $("li", this);

          //滚动
          var _li_scroll = 0;
          function goto() {
            _li_scroll += o.width;
            if (_li_scroll > _li_size) {
              _li_scroll = 0;
              _li.parent().css(o.dir == "left" ? {
                left: -_li_scroll
              }: {
                top: -_li_scroll
              });
              _li_scroll += o.width;
            }
            _li.parent().animate(o.dir == "left" ? {
              left: -_li_scroll
            }: {
              top: -_li_scroll
            },
            o.amount);
          }

          //开始
          var move = setInterval(function() {
            goto();
          },
          o.speed);
          _li.parent().hover(function() {
            clearInterval(move);
          },
          function() {
            clearInterval(move);
            move = setInterval(function() {
              goto();
            },
            o.speed);
          });
        });
      };</script>
  </head>
  
  <body class="body xz ">
@extends('layout.header')
    <!--other nav-->
    <section class="nr_bream">
      <section class="container pt30 pb20">
        <a href='/home'>首页</a>&gt;
        <a href='javascript:void(0);'><?php echo PathName($path)?></a></section>
    </section>
    <section class="container ">
      <div class="nrxq_main nrxq_section_01 fix">
        <div class="nr_L fl">
          <div class="nrxq_left">
            <div class="nr_title">
              {{$list->title}}
              <bdo class="db">来源：童翼官网 编辑：童翼官方编辑 时间：<?php echo date('Y-m-d',$list->time)?></bdo>
              </div>
            <div class="nrxq_main1">
                {!!$list->content!!}
              </div>
            <div class="nrxq_main2 fix">
              <span class="fl">上一篇：
                <a href="@if($previous) /{{$path}}/{{$previous->id}}.html @else javascript:void(0); @endif">@if($previous) {{$previous->title}} @else 没有了 @endif </a></span>
              <span class="fl">下一篇：
                <a href="@if($next) /{{$path}}/{{$next->id}}.html @else javascript:void(0); @endif">@if($next) {{$next->title}} @else 没有了 @endif </a></span>
            </div>
            <div class="nrxq_main3">相关文章</div>
            <section class="nrxq_main4 pp_sec fix">
              @foreach($relevant as $k=>$v)
              <div class="col-sm-4 paddingzhi">
                <a href="/{{$path}}/{{$v->id}}.html" class="db a1 tc">
                  <span class="db ovh">
                    <img src="{{$v->path}}" class="db guodu"></span>
                  <span class="span1 db one">{{$v->title}}</span></a>
              </div>
              @endforeach
            </section>
          </div>
        </div>
        <div class="nr_R fr">
          <div class="nrxq_right">
            <div class="nrxq_main5 fix">
              <p class="fl">童翼动态</p>
              <span class="fr">
                <a href="#">更多</a></span>
            </div>
            <div class="nrxq_main6">
              <div class="nrxq_main6_1">
                <a href="/dynamic/{{$dynamic[0]->id}}.html">
                  <img src="{{$dynamic[0]->path}}" class="db guodu"></a>
              </div>
              <div class="nrxq_main6_2">
                <div class="div1">
                  <a href="/dynamic/{{$dynamic[0]->id}}.html">{{$dynamic[0]->title}}</a></div>
              </div>
              <div class="nrxq_main6_3">
                <ul>
                  @foreach($dynamic as $k=>$v)
                      @if($v->id != $dynamic[0]->id)
                        <li>
                          <a href="/dynamic/{{$v->id}}.html">{{$v->title}}</a>
                        </li>
                      @endif 
                  @endforeach
                </ul>
              </div>
            </div>
            
            <div class="nrxq_main5 fix">
              <p class="fl">童翼活动</p>
              <span class="fr">
                <a href="#">更多</a></span>
            </div>
            <div class="nrxq_main6">
              <div class="nrxq_main6_1">
                <a href="/activity/{{$activity[0]->id}}.html" >
                  <img src="{{$activity[0]->path}}" class="db guodu"></a>
              </div>
              <div class="nrxq_main6_2">
                <div class="div1">
                  <a href="/activity/{{$activity[0]->id}}.html">{{$activity[0]->title}}</a>
                </div>
              </div>
              <div class="nrxq_main6_3">
                <ul>
                  @foreach($activity as $k=>$v)
                      @if($v->id != $activity[0]->id)
                        <li>
                          <a href="/activity/{{$v->id}}.html">{{$v->title}}</a>
                        </li>
                      @endif
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @extends('layout.footer')
   </body>
</html>
<script src="/homes/js/ui-select.js"></script>
<script>$('.ui-select').ui_select();</script>
<script type="text/javascript">$(document).ready(function() {
    $(".scrolltop").imgscroll({
      speed: 60,
      //图片滚动速度
      amount: 0,
      //图片滚动过渡时间
      width: 1,
      //图片滚动步数
      dir: "up" // "left" 或 "up" 向左或向上滚动
    });
  });</script>
<script>window._bd_share_config = {
    "common": {
      "bdSnsKey": {},
      "bdText": "",
      "bdMini": "2",
      "bdMiniList": false,
      "bdPic": "",
      "bdStyle": "0",
      "bdSize": "32"
    },
    "share": {}
  };
</script>