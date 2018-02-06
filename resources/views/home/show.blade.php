<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head lang="en">
    <meta charset="utf-8">
    <title>{{$show->title}}</title>
    <meta name="keywords" content="{{$show->keyword}}">
    <meta name="description" content="{{$show->describe}}">
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
    <link rel="stylesheet" href="/homes/css/media-zl.css" />
    @extends('layout.header')
    <section class="kc_banner huan_bg rel" data-bg="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170808/bcd2719ea98c41a14ae2b44663b8ff22.jpg" data-bg2="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170715/eb2483b4119309b7bb0d466f90dee5b6.jpg" style="background: url(&quot;http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170715/eb2483b4119309b7bb0d466f90dee5b6.jpg&quot;) center top / cover no-repeat;">
        <div class="container">
          <span class="db span1">让孩子成为自己的人生导演</span>
          <span class="db span2 two">
            接受过戏剧表演培训的孩子，通常能更好的处理问题，有强烈的自信， 以及清晰的语言表达能力，从而他们的生活会更美好！    </span>
        </div>
        <a href="#" target="_self" class="banner_mc abs"></a>
    </section>
    <section class="container" style="font-size: 15px;">
        <div style="margin-top: 50px;"></div>
        <div class="title tc mb35">
          <span class="span1 db">{{$show->title}}</span>
          <span class="span2 db fa">{{$show->describe}}</span>
        </div>
        <div class="mod-02 tc mb35">{!!$show->content!!}</div>
      
    </section>
    <script>var decimal_places = 0;
      var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 100;
      var bianliang = 0;
      $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.mod-03').offset().top) - 600 && bianliang == 0) {
          bianliang = 1;
          $('.decimals').each(function() {
            var datashu = $(this).attr('data-shu');
            $(this).animateNumber({
              number: datashu * decimal_factor,
              numberStep: function(now, tween) {
                var floored_number = parseInt(now / decimal_factor),
                target = $(tween.elem);
                if (decimal_places > 0) {
                  // force decimal places even if they are 0
                  floored_number = floored_number.toFixed(decimal_places);
                  // replace '.' separator with ','
                  floored_number = floored_number.toString().replace('.', '.');
                }
                target.text(floored_number);
              }
            },
            1500);
          })
        }
      })</script>
    <section class="baoming">
      <div class="container">
        <div class="div1 fix rel">
          <!--<b class="b1"><img src="/homes/picture/phone.png" alt="">4006781872 转 1</b>-->
          <form name="form2" class="registerform2" id="form2" method="post" action="http://www.dreamaker.com.cn/message/saveAjax2">
            <div class="divv1 fix">
              <div class="col-md-3 col-sm-6">
                <div class="div_put">
                  <input type="text" class="put_public put_01" name="info[mname]" placeholder="请输入姓名！"></div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="div_put">
                  <input type="text" class="put_public put_01" name="info[age]" placeholder="请输入孩子年龄！"></div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="div_put">
                  <input type="text" class="put_public put_01" name="info[tel]" nullmsg="请填写您的手机号" errormsg="请您填写11位手机号" placeholder="填写11位手机号" datatype="m"></div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="div_put">
                  <div class="select_01 select">
                    <select class="ui-select" name="info[xiaoqu_id]" style="width: 100%;" datatype="*" nullmsg="请您选择咨询校区">
                      <option value="">请您选择咨询校区</option>
                      <option value="19">北京牡丹园校区</option>
                      <option value="32">北京西直门校区</option>
                      <option value="21">北京双井校区</option>
                      <option value="20">北京公主坟校区</option>
                      <option value="6">北京望京校区</option>
                      <option value="22">北京金源校区</option>
                      <option value="23">北京亚运村校区</option>
                      <option value="9">北京常营校区</option>
                      <option value="12">上海五角场校区</option>
                      <option value="14">上海徐家汇校区</option>
                      <option value="26">上海古北校区</option>
                      <option value="36">石家庄长安校区</option>
                      <option value="39">沈阳K11校区</option>
                      <option value="42">郑州蓝堡湾校区</option>
                      <option value="27">重庆渝北校区</option>
                      <option value="28">青岛五四广场校区</option></select>
                  </div>
                </div>
              </div>
            </div>
            <div class="divv2">
              <div class="div_put2 rel">
                <input type="text" class="put_public put_02" name="txtCode" datatype="*" nullmsg="请输入验证码" placeholder="请输入验证码">
                <img src="/homes/picture/6c025acc7e6d46f783e49246d35db143.gif" width="83" height="30" class="abs bm_yzm" onClick="this.src='http://www.dreamaker.com.cn/utils/captcha/'+Math.random();"></div>
            </div>
            <span id="msgdemo3" style="margin-top:5px;"></span>
            <input type="hidden" name="info[from]" value="">
            <input type="hidden" name="info[url]" value="www.dreamaker.com.cn/show.html">
            <input type="submit" class="put_public but_01" value="立即报名"></form>
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