<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head lang="en">
    <meta charset="utf-8">
    <title>卓美戏剧3-4岁课程</title>
    <meta name="keywords" content="卓美戏剧3-4岁课程">
    <meta name="description" content="卓美戏剧3-4岁课程">
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
        <a href='http://www.dreamaker.com.cn/'>首页</a>&gt;
        <a href='http://www.dreamaker.com.cn/activity.html'>卓美活动</a>&gt;
        <a class='on' href='http://www.dreamaker.com.cn/news/6.html'>最新活动</a></section>
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

              <div class="col-sm-4 paddingzhi">
                <a href="http://www.dreamaker.com.cn/178.html" class="db a1 tc" title="2018卓美英文戏剧节">
                  <span class="db ovh">
                    <img src="/homes/picture/6590af11471bd196492971b43345a37d.jpg" alt="2018卓美英文戏剧节" class="db guodu"></span>
                  <span class="span1 db one">2018卓美英文戏剧节</span></a>
              </div>
            </section>
          </div>
        </div>
        <div class="nr_R fr">
          <div class="nrxq_right">
            <div class="nrxq_main5 fix">
              <p class="fl">童翼动态</p>
              <span class="fr">
                <a href="http://www.dreamaker.com.cn/channel.html">更多</a></span>
            </div>
            <div class="nrxq_main6">
              <div class="nrxq_main6_1">
                <a href="http://www.dreamaker.com.cn/183.html" title="山东卫视《育儿大作战》登录卓美招募家庭喽！">
                  <img src="/homes/picture/5023f6f79966513c304107f81e41cc91.png" alt="山东卫视《育儿大作战》登录卓美招募家庭喽！" class="db guodu"></a>
              </div>
              <div class="nrxq_main6_2">
                <div class="div1">
                  <a href="http://www.dreamaker.com.cn/183.html" title="山东卫视《育儿大作战》登录卓美招募家庭喽！">山东卫视《育儿大作战》登录卓美招募家庭喽！</a></div>
                <div class="div2">国内首档大型家长成长类真人秀——《育儿大作战》</div></div>
              <div class="nrxq_main6_3">
                <ul>
                  <li>
                    <a href="http://www.dreamaker.com.cn/181.html" title="卓美戏剧讲堂+亲子工作坊=做戏剧，我们是认真的！">卓美戏剧讲堂+亲子工作坊=做戏剧，我们是认真的！
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="nrxq_main6" style="margin-top:50px;">
              <div class="nrxq_main6_1">
                <a href="http://m.dreamaker.com.cn/shop/commodity/5a1404ce584eda40b693af0b" target="_blank">
                  <img src="/homes/picture/b6a7676486b8b80b15af1cdb962bc22b.png" alt="" class="db guodu"></a>
              </div>
            </div>
            <div class="nrxq_main5 fix">
              <p class="fl">童翼活动</p>
              <span class="fr">
                <a href="http://www.dreamaker.com.cn/activity.html">更多</a></span>
            </div>
            <div class="nrxq_main6">
              <div class="nrxq_main6_1">
                <a href="http://www.dreamaker.com.cn/178.html" title="2018卓美英文戏剧节">
                  <img src="/homes/picture/6590af11471bd196492971b43345a37d.jpg" class="db guodu"></a>
              </div>
              <div class="nrxq_main6_2">
                <div class="div1">
                  <a href="http://www.dreamaker.com.cn/178.html" 　title="2018卓美英文戏剧节">2018卓美英文戏剧节</a>
                </div>
              </div>
              <div class="nrxq_main6_3">
                <ul>
                  <li>
                    <a href="http://www.dreamaker.com.cn/177.html" title="12月卓美剧团公演">12月卓美剧团公演</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="c_fx">
      <ul>
        <!--href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http://www.dreamaker.com.cn/"-->
        <li>
          <a onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)">
            <img src="/homes/picture/xq_tip_01.png" alt=""></a>
        </li>
        <li>
          <a href="http://connect.qq.com/widget/shareqq/index.html?title=qqhaoyou&url=http://www.dreamaker.com.cn/&desc=卓美品致-国内儿童英文戏剧教育的领跑者&pics=&site=卓美品致-国内儿童英文戏剧教育的领跑者" target="_blank">
            <img src="/homes/picture/xq_tip_02.png" alt=""></a>
        </li>
        <!--<li><a href="#"><img src="/homes/picture/xq_tip_03.png" alt=""></a></li>-->
        <li>
          <a href="http://v.t.sina.com.cn/share/share.php?url=http://www.dreamaker.com.cn/&title='卓美品致-国内儿童英文戏剧教育的领跑者'" target="_blank">
            <img src="/homes/picture/xq_tip_04.png" alt=""></a>
        </li>
      </ul>
    </div>
    <script>function AddFavorite(sURL, sTitle) {
        try {
          window.external.addFavorite(sURL, sTitle);
        } catch(e) {
          try {
            window.sidebar.addPanel(sTitle, sURL, "");
          } catch(e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
          }
        }
      }</script>
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
            <input type="hidden" name="info[url]" value="www.dreamaker.com.cn/166.html">
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