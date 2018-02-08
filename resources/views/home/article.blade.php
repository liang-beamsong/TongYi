<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head lang="en">
    <meta charset="utf-8">
    <title>童翼课程</title>
    <meta name="keywords" content="童翼课程童翼课程童翼课程童翼课程">
    <meta name="description" content="童翼课程童翼课程童翼课程童翼课程童翼课程童翼课程童翼课程童翼课程童翼课程">
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
    <section class="pp_banner huan_bg rel" data-bg="/homes/images/2899022d31f49e123b252284eb98523b.jpg" data-bg2="/homes/images/2899022d31f49e123b252284eb98523b.jpg">
      <div class="container">
        <span class="db span1">
          <a style="color:white" href="/165.html" target="_blank"></a></span>
        <span class="db span2 two"></span>
      </div>
      <a href="/165.html" target="_blank" class="banner_mc abs"></a>
    </section>
    <section class="pp_banner_s" style="">
      <a href="/165.html" target="_blank" class="db">
        <img src="/homes/picture/8cd5f86f99c86b298e13a4cf70b03e82.jpg"></a>
    </section>
    @foreach($article as $k=>$v)
    <section class="container pp_section_01">
      <div class="title tc container">
        <span class="span1 db">{{$v[0]->name}}</span>
        <span class="span2 db fa">latest activity</span></div>
      <section class="kc_section_02 pp_sec fix">
        @foreach($v as $j=>$x)
        <div class="col-sm-4">
          <a href="/article/{{$x->id}}.html"  class="db a1 tc">
            <span class="db ovh">
              <img src="{{$x->path}}"  class="db guodu"></span>
            <span class="span1 db one">{{$x->title}}</span></a>
        </div>
        @endforeach
      </section>
    </section>
    @endforeach
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