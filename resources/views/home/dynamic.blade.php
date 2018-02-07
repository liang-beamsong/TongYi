<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head lang="en">
    <meta charset="utf-8">
    <title>最新动态</title>
    <meta name="keywords" content="最新动态,童翼动态列表,童翼动态">
    <meta name="description" content="最新动态,童翼动态列表,童翼动态">
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
    <section class="kc_banner huan_bg rel" data-bg="/homes/images/eb2483b4119309b7bb0d466f90dee5b6.jpg" data-bg2="/homes/images/eb2483b4119309b7bb0d466f90dee5b6.jpg">
      <div class="container">
        <span class="db span1">让孩子成为自己的人生导演</span>
        <span class="db span2 two">接受过戏剧表演培训的孩子，通常能更好的处理问题，有强烈的自信， 以及清晰的语言表达能力，从而他们的生活会更美好！</span></div>
      <a href="#" target="_self" class="banner_mc abs"></a>
    </section>
    <section class="kc_banner_s" style="">
      <a href="#" target="_self" class="db">
        <img src="/homes/picture/bcd2719ea98c41a14ae2b44663b8ff22.jpg"></a>
    </section>
    <section class="kc_section_01">
      <div class="container fix">
        <form  method="post" action="/dynamic">
          <div class="div1 fl">
            <div class="divv1">
              <input type="text" name='title' class="select_01 select"  style="width: 100%;"/>
            </div>
          </div>
          <div class="div2 fl">
            <input type="submit" class="but_01" value="搜索动态"></div>
        </form>
      </div>
    </section>
    <section class="container">
      <section class="kc_section_02 fix">
      @foreach($dynamic as $k=>$v)
        <div class="col-md-4 col-sm-6">
          <a href="/dynamics/{{$v->id}}.html"  class="db a1 tc">
            <span class="db ovh">
              <img src="{{$v->path}}" class="db guodu"></span>
            <span class="span1 db one">{{$v->title}}</span>
            <span class="span2 db one">{{$v->describe}}</span></a>
        </div>
      @endforeach
      </section>
      <div style="float:right;">{!! $dynamic->appends($request->only(['list_length','title']))->render() !!} </div>
      
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