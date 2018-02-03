<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  
  <head lang="en">
    <meta charset="utf-8">
    <title>专业的青少儿英文戏剧教育机构-卓美品致</title>
    <meta name="keywords" content="戏剧教育结构,卓美简介,卓美荣誉,卓美发展历程">
    <meta name="description" content="卓美成立于2010年,由著名导演冯小刚注资，已发展为国内青少儿英文戏剧教育的领跑者。7年努力，获得诸多属于卓美的荣誉，在卓美发展历程中，即将迎来七周年。">
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
    <!--other nav-->
    <section class="container other-nav pt30 pb20">
      <a class="on" href="/about.html">卓美简介</a>
      <a href="/channel.html">卓美动态</a>
      <a href="/recruit.html">招聘英才</a>
      <a href="#">加盟卓美</a></section>
    <section class="mod-01 mb90 huan_bg" data-bg="images/33d1bc3d4766cdf9098ea36e21fc9315.jpg" data-bg2="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170721/33d1bc3d4766cdf9098ea36e21fc9315.jpg" style="background: url(http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170721/33d1bc3d4766cdf9098ea36e21fc9315.jpg) center top no-repeat; background-size: cover;">
      <div class="container-fluid fix rel">
        <div class="text">
          <div class="name wow fadeInDown">
            <em>卓美品致</em></div>
          <div class="name mb10 wow fadeInDown">
            <em>专注于面向未来培育高感性人才</em></div>
          <div class="pl10 wow fadeInUp">
            <em>Focus on cultivating highly sensitive talents for the future</em></div>
        </div>
        <div class="col-md-8 col-md-offset-4 map">
          <img src="/homes/picture/z_map1.png" />
          <a href="#" class="anchor a-1 about_dw_1">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_2">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_3">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_4">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_5">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_6">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_7">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_8">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_9">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_10">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_11">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_12">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_13">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_14">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_15">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_16">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_17">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_18">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_19">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_20">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_21">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_22">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_23">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_24">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_25">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_26">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_27">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_28">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_29">
            <span class="bg"></span>
          </a>
          <a href="#" class="anchor a-1 about_dw_30">
            <span class="bg"></span>
          </a>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="title tc mb35">
        <span class="span1 db">卓美简介</span>
        <span class="span2 db fa">A profile of the company</span></div>
      <div class="mod-02 tc mb35">
        <div>
          <div>成立于2010年，由著名导演冯小刚注资
            <br />以戏剧促进中国教育进步为使命
            <br />专注于面向未来培育高感性人才
            <br />致力为中国3-18岁的孩子
            <br />提供专业的英文戏剧教育</div>
          <div>将全球领先的海伦·奥格雷迪（Helen O' Grady）英文戏剧教育课程体系引入中国</div>
          <div>并成立了专业的青少儿英文剧团——卓美剧团</div>
          <div>率先使英文戏剧教育课程
            <br />作为中国孩子的校本课走进了课堂
            <br />凭借丰富的教育经验与优质的产品资源</div>
          <div>为中国孩子量身打造
            <br />与国际先进教育标准同步的教育体系
            <br />
            <span style="line-height:1.5;">始终坚持“尊重、探索、希望、同理心”的价值观，尊重每一个孩子的独特性
              <br />引导他们通过戏剧发现自己，感知世界，探索多样化及一切可能性</span></div>
          <div>目前，已发展为青少儿英文戏剧教育的领跑者</div></div>
      </div>
      <div class="mod-03 auto fix mb40 tc">
        <div class="box wow fadeInUp" data-wow-delay=".0s">
          <div class="box-con">
            <div class="tit">
              <span class="dib decimals" data-shu="8"></span>年</div>
            <div class="content">卓美品致8年专注儿童
              <br/>英文戏剧教育</div></div>
        </div>
        <div class="box wow fadeInUp" data-wow-delay=".1s">
          <div class="box-con">
            <div class="tit">
              <span class="dib decimals" data-shu="10000"></span>
            </div>
            <div class="content">卓美引领了孩子们的成长方式
              <br/>已有一万名孩子
              <br/>受益于英文戏剧教育</div></div>
        </div>
        <div class="box wow fadeInUp" data-wow-delay=".2s">
          <div class="box-con">
            <div class="tit">
              <span class="dib decimals" data-shu="100000"></span>
            </div>
            <div class="content">卓美坚持在国内普及英文戏剧
              <br/>教育，预计到2020年
              <br/>将影响十万中国家庭</div></div>
        </div>
      </div>
      <div class="title tc mb50">
        <span class="span1 db">卓美课程</span>
        <span class="span2 db fa">course</span></div>
      <div class="mod-04 row fix mb60">
        <div class="col-md-6">
          <div class="box">
            <div class="img">
              <a href="/hog.html">
                <img src="/homes/picture/eb894610c56090327bd235d0ab17b6ac.jpg" /></a>
            </div>
            <div class="text">
              <div class="tit">HOG课程</div>
              <div class="mb25 color-bdbdbd">
                <span>
                  <span>Helen O’Grady英文戏剧课程是</span>
                  <span>全球普及度最广的儿童英文戏剧课程之一</span>
                  <span>该学院创立于1979年，是全球规模最大的儿童戏剧教育机构</span>
                  <span>学员超过600万名</span>
                  <span>其课程盛行于全球32个国家和地区</span></span>
              </div>
              <div>注重培养孩子八大能力：高感性思维、纯正英文口语、丰富的想象力、自信阳光的性格、国际化视野、良好社交能力、高度的创造力、团队协作力</div></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img">
              <a href="/theatre.html">
                <img src="/homes/picture/3d0d091905971c87c62fcd270fad6b74.jpg" /></a>
            </div>
            <div class="text">
              <div class="tit">剧团课程</div>
              <div class="mb25 color-bdbdbd">
                <span>
                  <span>卓美品致旗下专业儿童英文剧团</span>
                  <span>配备国际化教师团队，引进欧美最新原版剧目</span>
                  <span>基于圣三一学院戏剧考试教学大纲，开设戏剧表演及音乐剧课程</span>
                  <span>为7岁以上有表演天赋、希望系统学习戏剧表演的孩子</span>
                  <span>提供持续的成长平台</span></span>
              </div>
              <div>在戏剧中发展创造力和想象力，建立自信心与同理心，拓展国际视野，提升英语口语能力，增强沟通和团队协作力</div></div>
          </div>
        </div>
      </div>
    </section>
    <section class="mb90">
      <div class="title container tc mb50">
        <span class="span1 db">发展历程</span>
        <span class="span2 db fa">development path</span></div>
      <div class="block-01 huan_bg" data-bg="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170721/ba0a78be9ed6f3f02f79bcd568c9a39f.jpg" data-bg2="images/c049fc9e3fd4fe1d8b325152de2c25ec.jpg" style="background: url(http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170721/c049fc9e3fd4fe1d8b325152de2c25ec.jpg) center top no-repeat;">
        <div class="container">
          <img src="/homes/picture/z_dian3.png" class="db auto dot-01" />
          <div class="mod-05">
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".0s">
                <div class="day-con">
                  <a href="javascript:void(0)">2010.09</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".0s">
                <div>
                  <a href="http://www.dreamaker.com.cn/13.html">卓美教育成立</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".1s">
                <div class="day-con">
                  <a href="javascript:void(0)">2010.10</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".1s">
                <div>
                  <a href="http://www.dreamaker.com.cn/14.html">卓美教育与中国青少年发展服务中心共同成立“走进美妙的戏剧花园项目组”
                    <br/>在史家小学推广教育戏剧理念
                    <br/></a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".2s">
                <div class="day-con">
                  <a href="javascript:void(0)">2010.12</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".2s">
                <div>
                  <a href="http://www.dreamaker.com.cn/15.html">卓美教育召开“戏剧在青少年教育中的作用”研讨会</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".3s">
                <div class="day-con">
                  <a href="javascript:void(0)">2011.10</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".3s">
                <div>
                  <a href="http://www.dreamaker.com.cn/73.html">卓美教育与中国青少年发展服务中心中国手拉手艺术团、上海戏剧学院在史家小学共同举办“首届全国校园戏剧展演”活动</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".4s">
                <div class="day-con">
                  <a href="javascript:void(0)">2012.02</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".4s">
                <div>
                  <a href="http://www.dreamaker.com.cn/74.html">卓美教育英文戏剧正式进入北师大实验小学、中关村二小、曙光小学等北京一线小学</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".5s">
                <div class="day-con">
                  <a href="javascript:void(0)">2012.07</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".5s">
                <div>
                  <a href="http://www.dreamaker.com.cn/75.html">“卓美杯--走进美妙的戏剧花园”第二届校园戏剧展演交流活动在北京成功举办</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".6s">
                <div class="day-con">
                  <a href="javascript:void(0)">2012.07</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".6s">
                <div>
                  <a href="http://www.dreamaker.com.cn/76.html">冯小刚导演出席“走进美妙的戏剧花园”&nbsp;戏剧展演交流活动并正式宣布注资卓美教育</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".7s">
                <div class="day-con">
                  <a href="javascript:void(0)">2012-2015</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".7s">
                <div>
                  <a href="http://www.dreamaker.com.cn/77.html">卓美教育北京望京、牡丹园、双井、公主坟、金源分校相继开业</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".8s">
                <div class="day-con">
                  <a href="javascript:void(0)">2016.06</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".8s">
                <div>
                  <a href="http://www.dreamaker.com.cn/78.html">卓美剧团在专业剧场举办首场公演为孩子们提供专业舞台展示和表演的机会</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".9s">
                <div class="day-con">
                  <a href="javascript:void(0)">2016</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".9s">
                <div>
                  <a href="http://www.dreamaker.com.cn/79.html">卓美教育正式更名为卓美品致</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".10s">
                <div class="day-con">
                  <a href="javascript:void(0)">2016</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".10s">
                <div>
                  <a href="http://www.dreamaker.com.cn/80.html">卓美品致北京亚运村分校、上海五角场分校、重庆分校、青岛分校相继开业</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".11s">
                <div class="day-con">
                  <a href="javascript:void(0)">2016.12</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".11s">
                <div>
                  <a href="http://www.dreamaker.com.cn/81.html">卓美品致成为英国圣三一学院戏剧和演说考级在北京唯一指定考点</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".12s">
                <div class="day-con">
                  <a href="javascript:void(0)">2016.12</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".12s">
                <div>
                  <a href="http://www.dreamaker.com.cn/82.html">卓美品致成功入围《中国品牌创新发展工程》项目</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".13s">
                <div class="day-con">
                  <a href="javascript:void(0)">2017.04</a></div>
              </div>
              <div class="text wow fadeInRight" data-wow-delay=".13s">
                <div>
                  <a href="http://www.dreamaker.com.cn/83.html">卓美品致北京常营分校开业</a></div>
              </div>
            </div>
            <div class="box">
              <div class="day wow fadeInDown" data-wow-delay=".14s">
                <div class="day-con">
                  <a href="javascript:void(0)">2017</a></div>
              </div>
              <div class="text wow fadeInLeft" data-wow-delay=".14s">
                <div>
                  <a href="http://www.dreamaker.com.cn/84.html">卓美品致上海古北分校和徐家汇分校相继开业</a></div>
              </div>
            </div>
          </div>
          <bdo class="db bdo1 wow fadeInUp" data-wow-delay="1s">
            <a href="/news/14.html" target="_blank">查看更多</a></bdo>
        </div>
      </div>
    </section>
    <section class="container mb75">
      <div class="title container tc mb25">
        <span class="span1 db">卓美荣誉</span>
        <span class="span2 db fa">honor</span></div>
      <!-- <div class="mod-06 mb30 tc">
      <div>2010.09</div>
      <div>卓美品致成立伊始，即被Helen O' Grady总部授权中国区总代理</div>
      <div>2016.12</div>
      <div>卓美品致以其独特的教育理念和卓越的教学成果，成功入围《中国品牌创新发展工程》项目</div>
      <div>2016.12</div>
      <div>卓美品致凭借独特的教学体系、一流的硬件设施、雄厚的师资，成为英国圣三一学院戏剧和演说考级在北京唯一指定考点</div></div> -->
      <div class="mod-07 fix tc">
        <div class="col-md-4">
          <a href="http://www.dreamaker.com.cn/95.html" class="db img" title="卓美董事长张思路受邀中国品牌创新发展论坛">
            <span class="db ovh span1">
              <img src="/homes/picture/6b952b852a6abb625864c120546a3c22.jpg" /></span>
            <span class="span2 db">卓美董事长张思路受邀中国品牌创新发展论坛
              <br></span></a>
        </div>
        <div class="col-md-4">
          <a href="http://www.dreamaker.com.cn/16.html" class="db img" title="卓美品致率先将英文戏剧课程引入北京一线中小学">
            <span class="db ovh span1">
              <img src="/homes/picture/d416a51bb8cd26f065e5b17f9598196b.jpg" /></span>
            <span class="span2 db">卓美品致率先将英文戏剧课程引入北京一线中小学
              <br></span></a>
        </div>
        <div class="col-md-4">
          <a href="http://www.dreamaker.com.cn/97.html" class="db img" title="卓美剧团学员参加伦敦圣三一学院等级考试">
            <span class="db ovh span1">
              <img src="/homes/picture/e087b7805e7d10f7e82f2707685e74c2.jpg" /></span>
            <span class="span2 db">卓美剧团学员参加伦敦圣三一学院等级考试
              <br></span></a>
        </div>
      </div>
    </section>
    <section>
      <div class="title container mb30 tc">
        <span class="span1 db">联系我们</span>
        <span class="span2 db fa">contact us</span></div>
      <div class="mod-08 container mb40 tc">
        <div>
          <a href="http://www.dreamaker.com.cn/campus.html">点击查看各校区咨询热线 ></a></div>
        <div class="fa">Click on the campus Hotline</div></div>
      <div class="block-02">
        <div class="container mod-09 fix">
          <div class="col-sm-6 col-lg-3">
            <img src="/homes/picture/z_icon1.png" class="icon" />
            <div class="text">
              <div class="name">卓美品致官方总机</div>
              <div class="mb15">ZHUO MEIPIN OFFICIAL</div>
              <img src="/homes/picture/da3be476ef5049ed876895be0ec33e68.png" /></div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <img src="/homes/picture/z_icon1.png" class="icon" />
            <div class="text">
              <div class="name">试听课预约热线</div>
              <div class="mb15">AUDITION HOTLINE</div>
              <img src="/homes/picture/3bb63101365497486b756b3bf815c1a4.png" /></div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <img src="/homes/picture/z_icon1.png" class="icon" />
            <div class="text">
              <div class="name">求职咨询热线</div>
              <div class="mb15">JOB APPLICATION HOTLINE</div>
              <img src="/homes/picture/fc106bb7781dec091dffb9214cb99ca5.png" /></div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <img src="/homes/picture/z_icon1.png" class="icon" />
            <div class="text">
              <div class="name">招商加盟热线</div>
              <div class="mb15">MERCHANTS JOINED THE HOTLINE</div>
              <img src="/homes/picture/67401ffc444d464f14b4559783b0cc16.png" /></div>
          </div>
        </div>
      </div>
      <div class="mod-10 huan_bg" data-bg="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170721/7c20fda4fe6e9d0080aa62b02d576f30.jpg" data-bg2="images/6427377afac859a845600b77dc1460f0.jpg" style="background: url('http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170721/6427377afac859a845600b77dc1460f0.jpg') center top no-repeat;">
        <div class="container">
          <div class="mb30">
            <div class="mb30">卓美品致官网（www.dreamaker.com.cn）由卓美品致主办。</div>
            <div class="mb30">卓美品致官方域名为dreamaker.com.cn，网站所涉及的任何资料（包括但不限于文字、图像、图片、照片、音频、视频、图表、标示、广告、商标、商号、域名、程序、版面设计、专栏目录与名称、内容分类标准以及为注册用户提供的任何信息）均受到《中华人民共和国著作权法》、《中华人民共和国商标法》、《中华人民共和国专利法》、《中华人民共和国反不正当竞争法》等相关法律法规的保护，为本网或权利人所有。</div>
            <div class="mb30">上述材料未经许可，不得擅自对其整体或部分进行使用、复制、修改、抄录、转载、链接、传播、摘编、出版、与其他产品捆绑使用或以其他任何方式非法使用本网站所呈现的内容。如果已经本网授权使用的，应在授权范围内使用，并注明“来源：卓美品致／卓美品致官网”。</div>
            <div class="mb30">本网站中凡注明转载自其他主体的内容为转载信息，目的在于传递更多信息，并不代表本网赞同其观点或对其真实性负责。任何第三方在以转载、链接、摘编或者下载等方式使用时，必须保留本网注明的“来源”，并自行承担相关法律责任。</div>
            <div class="mb30">任何第三方不得擅自转载本网提供的信息和服务内容，如需转载，必须取得卓美教育的合法授权。</div>
            <div class="mb30">任何第三方不得盗用本网名义发布、引用、转载信息。</div>
            <div class="mb30">对于违反上述规定侵犯本网站知识产权等合法权益的行为，卓美品致将依法追究其法律责任。</div>
            <div>本网部分资料为网上搜集转载，如著作权人发现本网转载了其拥有著作权的作品且没有事先与著作权人沟通联络，请主动与本网联系，提供相关证明材料，本网将依法处理。如权利人认为本网呈现的内容侵犯其肖像权、名誉权或其他合法权益的，请主动与本网联系，提供相关投诉材料，本网亦将依法处理。</div></div>
        </div>
      </div>
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
            <input type="hidden" name="info[url]" value="www.dreamaker.com.cn/about.html">
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