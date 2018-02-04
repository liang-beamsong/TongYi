<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head lang="en">
    <meta charset="utf-8">
    <title>卓美品致-国内儿童英文戏剧教育的领跑者</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
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
  
  <body>
     @extends('layout.header')
    <section class="owl-carousel banner">
      @foreach($carousel as $k=>$v)
      <div class="item">
        <a href="/166.html" target="_blank">
          <picture>
            <source srcset="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20180110/713727b704fc0f5505a538fba9b409da.jpg" media="(max-width: 767px)">
              <img src="{{$v->path}}" /></picture>
        </a>
      </div>
      @endforeach
    </section>
    <script>jQuery(document).ready(function($) {
        $('.banner').owlCarousel({
          items: 1,
          loop: true,
          margin: 0,
          autoplay: 3000
        });
      });</script>
    <section class="section_01">
      <div class="title tc container">
        <span class="span1 db">卓美品致 — 为3-18岁孩子提供
          <br>英文戏剧教育</span>
        <span class="span2 db fa">Provide pure English drama education
          <br>for children aged 3-18</span></div>
      <div class="container In_map rel">
        <span class="span1 db tc">卓美将欧美经典英文戏剧课程引进中国
          <br />旨在为3-18岁的青少儿提供纯正英文戏剧教育
          <br />在英文戏剧中，释放孩子的天性，绽放自我
          <br />激发各种潜能，发展创造力和想象力
          <br />建立自信心与同理心，拓展国际视野，提升英文口语能力，增强沟通力和团队协作力
          <br />目前，卓美品致已在北京、上海、重庆、青岛等地拥有12家校区
          <br />为中国的青少儿带来了全新的成长方式
          <bdo class="bdo_01 db">卓美将全球领先的Helen O' Grady
            <br />英文戏剧教育课程体系引入中国</bdo>1979年创立 &nbsp; 总部在英国 &nbsp;&nbsp;1500家分支机构 &nbsp;
          <br />遍布全球32个国家和地区
          <br />600多万孩子的成长经验 &nbsp;
          <br />源自世界规模最大的儿童戏剧教育机构</span>
        <img src="/homes/picture/in_bg_map2.png" alt="" class="db auto mg1 wow zoomIn">
        <img src="/homes/picture/in_bg_map.png" alt="" class="db auto abs mg2"></div>
    </section>
    <section class="section_02">
      <div class="title tc container">
        <span class="span1 db">卓美优势</span>
        <span class="span2 db fa">advantage</span></div>
      <div class="title_tit tc">
        <span class="span1 db">关于人生经历的典礼, 奇妙而美好的成长之地</span>
        <span class="span2 db">选择我们的六大理由</span></div>
      <div class="container-fluid youshi tc">
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".0s">
          <a href="/109.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="/homes/picture/d57ca192d6881651c6f6e37d1ce36e26.jpg" class="db guodu"></span>
            <span class="span1 db one">全外教英文授课</span>
            <span class="span2 db two">由英国Helen O' Grady戏剧学院
              <br>进行全球师资选拔，进行英文授课</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".1s">
          <a href="/110.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="/homes/picture/83c3ddccb377a1cfbbeaf8334c6c9a41.jpg" class="db guodu"></span>
            <span class="span1 db one">专业舞台见证成长</span>
            <span class="span2 db two">孩子们阶段性学习成果通过专业的
              <br>剧场、舞台进行精彩展示</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".2s">
          <a href="/111.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="/homes/picture/ae55f746ca8dc8d3bcc02f408d2d95ae.jpg" class="db guodu"></span>
            <span class="span1 db one">专注培养孩子高感性</span>
            <span class="span2 db two">国内首家以英文戏剧方式培养孩子
              <br>综合素质的教育机构</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".3s">
          <a href="/112.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="/homes/picture/657bc2a3353c9c6a4b3801a982fd9037.jpg" class="db guodu"></span>
            <span class="span1 db one">基于伦敦圣三一学院戏剧考试教学大纲</span>
            <span class="span2 db two">卓美品致为圣三一学院戏剧和演说考级
              <br>在北京唯一指定考点</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".4s">
          <a href="/113.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="/homes/picture/2eb25668b6a1a62df77deaf53224784a.jpg" class="db guodu"></span>
            <span class="span1 db one">引入拥有38年历史的国际戏剧课程体系</span>
            <span class="span2 db two">课程源自全世界规模最大的
              <br>儿童戏剧教育机构</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".5s">
          <a href="/114.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="/homes/picture/9176708bac7fd61d058c6dbaa28a83d1.jpg" class="db guodu"></span>
            <span class="span1 db one">冯小刚导演倾情注资</span>
            <span class="span2 db two">著名导演冯小刚注资的专业
              <br>青少儿英文戏剧教育机构</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="section_03 ovh rel huan_bg" section class="section_03 ovh rel huan_bg" data-bg="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170824/1876617480b8c1f03ddeee7230891ec9.jpg" data-bg2="images/8c0230cf0fbf7cbf54c663ff32bf5b78.jpg" style="background:url('http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170824/8c0230cf0fbf7cbf54c663ff32bf5b78.jpg') center center no-repeat;">
      <div class="wenzi tr">
        <b class="db b1 fa i guodu">WE&nbsp;ARE&nbsp;NOT
          <br/>ONLY&nbsp;TEACHING&nbsp;ENGLISH
          <br/>WE&nbsp;ARE&nbsp;DEVELOPING
          <br/>CHILDREN’S&nbsp;ABILITY</b>
        <span class="span1 db i">我们不仅教孩子英语
          <br>更注重培养孩子的能力</span>
        <b class="db b2 i">
          <br /></b>
        <a href="/about.html" target="_self" class="dib rel guodu">了解更多
          <i></i>
          <bdo class="bdo1 abs guodu"></bdo>
          <bdo class="bdo2 abs guodu"></bdo>
        </a>
      </div>
    </section>
    <section class="section_04">
      <div class="title tc container">
        <span class="span1 db">卓美课程</span>
        <span class="span2 db fa">class</span></div>
      <div class="title_tit tc">
        <span class="span1 db">家长们往往会很惊异孩子参与到整个演出
          <br />过程中所表现出的热情、执着和坚韧
          <br />接受过戏剧表演培训的孩子 &nbsp;
          <br />通常能更好的处理问题
          <br />有强烈的自信、清晰的语言表达能力
          <br />从而他们的生活变得更美好</span></div>
      <div class="container-fluid div_class">
        @foreach($curriculum as $k=>$v)
        <div class="col-md-6">
          <a href="/hog.html" target="_self" title="HOG课程" class="db rel ovh">
            <img src="{{$v->path}}" class="db guodu">
            <span class="span_mc abs guodu"></span>
            <span class="span1 db abs">
              <b class="b1 db">{{$v->title}}</b>
              <bdo class="bdo_01 db">{{$v->describe}}</bdo>
              <span href="/hog.html" target="_self" class="dib rel">
                <bdo class="bdo1 abs db guodu"></bdo>
                <bdo class="bdo2 abs db guodu"></bdo>了解更多
                <img src="/homes/picture/tip_02.png" alt=""></span></span>
          </a>
        </div>
        @endforeach
      </div>
    </section>
    <section class="section_05">
      <div class="container">
        <div class="div1 fix">
          <div class="col-md-6 div_huodong">
            <div class="div_title rel">
              <span class="span1">卓美活动
                <bdo class="fa">/ activity</bdo>
                <a href="http://www.dreamaker.com.cn/activity.html" class="abs">更多</a></span>
            </div>
            <div class="divv1">
              <a href="http://www.dreamaker.com.cn/178.html" title="2018卓美英文戏剧节" class="div_top db fix rel">
                <span class="db abs span1 ovh">
                  <img src="/homes/picture/6590af11471bd196492971b43345a37d.jpg" alt="2018卓美英文戏剧节" class="db guodu"></span>
                <span class="span2 db">
                  <b class="db b1 one">2018卓美英文戏剧节</b>
                  <bdo class="bdo1">2017-12-27</bdo>
                  <bdo class="db bdo2 two">2018年1月6日至20日
                    <br>四部剧九场演出
                    <br>经典新作异彩纷呈！</bdo></span>
              </a>
              <ul class="div_ul">
                <li>
                  <a href="http://www.dreamaker.com.cn/177.html" title="12月卓美剧团公演" class="db one guodu">12月卓美剧团公演</a>
                  <span class="abs">2017-12-21</span></li>
                <li>
                  <a href="http://www.dreamaker.com.cn/174.html" title="12月圣诞节活动【限时】" class="db one guodu">12月圣诞节活动【限时】</a>
                  <span class="abs">2017-12-01</span></li>
                <li>
                  <a href="http://www.dreamaker.com.cn/165.html" title="卓美冬令营【2018】" class="db one guodu">卓美冬令营【2018】</a>
                  <span class="abs">2017-11-01</span></li>
                <li>
                  <a href="http://www.dreamaker.com.cn/162.html" title="英文戏剧工作坊" class="db one guodu">英文戏剧工作坊</a>
                  <span class="abs">2017-11-01</span></li>
                <li>
                  <a href="http://www.dreamaker.com.cn/156.html" title="11月感恩节活动【限时】" class="db one guodu">11月感恩节活动【限时】</a>
                  <span class="abs">2017-11-01</span></li>
                <li>
                  <a href="http://www.dreamaker.com.cn/146.html" title="10月尖叫万圣节【活动】" class="db one guodu">10月尖叫万圣节【活动】</a>
                  <span class="abs">2017-10-01</span></li>
                <li>
                  <a href="http://www.dreamaker.com.cn/86.html" title="“探索之旅” 夏令营【2017】" class="db one guodu">“探索之旅” 夏令营【2017】</a>
                  <span class="abs">2017-01-28</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 div_dongtai">
            <div class="div_title rel">
              <span class="span1">卓美动态
                <bdo class="fa">/ dynamic</bdo>
                <a href="http://www.dreamaker.com.cn/channel.html" class="abs">更多</a></span>
            </div>
            <div class="gundong">
              <div class="scrolltop">
                <ul>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/183.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2018</bdo>
                        <bdo class="bdo2 db">01-20</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">山东卫视《育儿大作战》登录卓美招募家庭喽！</bdo>
                        <bdo class="bdo2 db two">国内首档大型家长成长类真人秀——《育儿大作战》</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/181.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2018</bdo>
                        <bdo class="bdo2 db">01-01</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美戏剧讲堂+亲子工作坊=做戏剧，我们是认真的！</bdo>
                        <bdo class="bdo2 db two">①家长戏剧讲堂
                          <br>②亲子戏剧工作坊
                          <br>让舞台之光照亮每个孩子的童年……</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/155.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2018</bdo>
                        <bdo class="bdo2 db">01-20</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美无戏剧不教育,以戏剧致学！</bdo>
                        <bdo class="bdo2 db two">戏剧无国界，作为教育传播的代表，戏剧教育正在以自身独特的方式向世界展示其特色和魅力。放眼看国外，早在英国、美国等教育发达国家，英文戏剧教育是从幼儿园到大学的基础课程，而在中国戏剧教育的理念还在普及。从2015年9月国务院发布了《关于全面加强和改进学校美育工作的意见》要求在中小学开设戏剧教育课程，戏剧教育也被越来越多的国内教育工作者认可。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/154.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2018</bdo>
                        <bdo class="bdo2 db">01-08</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美戏剧访谈：圣三一资深考官谈戏剧教育对孩子成长的价</bdo>
                        <bdo class="bdo2 db two">在9月刚刚结束的英国伦敦圣三一学院戏剧和演说等级考试中，卓美学员接受了来自圣三一学院英国总部的资深考官Gwyneth Powell的专业测评，再次取得通过率100%，优秀率高达53%的优异成绩。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/160.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">11-01</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美品致西直门校区即将盛大开业！</bdo>
                        <bdo class="bdo2 db two">12月31日前报名的新学员，将享受到前所未有的优惠折扣!</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/143.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">09-12</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">每一个孩子其实都喜欢表演</bdo>
                        <bdo class="bdo2 db two">“我希望我的孩子因为在卓美的戏剧经历，未来可以成为一个‘有意思的人’。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/142.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">09-04</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">有“戏”的课堂 让喜欢游戏的孩子爱上学习</bdo>
                        <bdo class="bdo2 db two">父母也经常给孩子讲道理，为什么自家的孩子就不爱学习呢？</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/139.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-28</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美剧团经典童话大剧《童话大冒险》西区剧场巡演</bdo>
                        <bdo class="bdo2 db two">卓美剧团连演不衰的童话剧精品《童话大冒险》将将在西区剧场重磅归来！不仅给孩子带来浓郁的童话艺术氛围，还能让孩子在真实的氛围中体会人物、场景、以及语言上的表现力，从而丰富想象力。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/126.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-21</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美品致迎来开学季，望京校区率先启动迎新活动！</bdo>
                        <bdo class="bdo2 db two">新学期伊始，卓美品致望京校区为我们带来一场欢乐、温馨，富有家庭氛围的开学季欢乐Party！</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/121.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-15</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美的课程符合对孩子性格的塑造和培养</bdo>
                        <bdo class="bdo2 db two">卓美英文戏剧是我自己在网络上看到的一个课程，第一印象感觉比较符合我对孩子性格塑造和培养的希望。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/116.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-14</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">中国式焦虑-家长们除了焦虑该做什么</bdo>
                        <bdo class="bdo2 db two">剖析中国家长们的种种焦虑，并不是批判教育制度，而是希望告诉同样焦虑的家长们，为什么我们会如此焦虑呢？</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/115.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-14</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">一张图表看清积极父母和消极父母的区别</bdo>
                        <bdo class="bdo2 db two">今天，就与大家分享几张家庭教育表，从“对待家庭关系、当孩子出现问题、对待孩子的学习、家庭教育观”四个角度，全面读懂积极父母和消极父母的根本差异。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/114.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-10</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美品致-冯小刚导演注资的青少儿英文戏剧教育机构</bdo>
                        <bdo class="bdo2 db two">2010年10月卓美联合中国青少年发展服务中心、中国少年儿童手拉手艺术团以及上海戏剧学院戏剧文学系，举办了第二届校园戏剧展演交流活动，也就是在这个活动中，著名导演冯小刚宣布对卓美品致进行注资。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/113.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-10</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美品致引入全球领先的Helen O' Grady英文戏剧课程体系</bdo>
                        <bdo class="bdo2 db two">卓美品致引入全球领先的海伦·奥格雷迪（Helen O' Grady）英文戏剧（Drama in Education）课程体系，现为Helen O’Grady戏剧教育学院在中国的分支机构，为4-18岁的中国青少年儿童带来了全新的成长体验。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/112.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-10</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美剧团联合伦敦圣三一学院开办戏剧和演说等级考试讲座</bdo>
                        <bdo class="bdo2 db two">卓美品致旗下卓美剧团为打破国内现有英语教学模式及应试教育现状，基于自身教学体系同伦敦圣三一戏剧和演说考试大纲的相辅相成，通过教师、学生和行业专家全面研究和讨论，大力推行伦敦圣三一学院戏剧和演说考试在中国的落地与实施，在2016年12月成功获得考点资格认证。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/111.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-10</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美品致：在戏剧中塑造孩子的高感性</bdo>
                        <bdo class="bdo2 db two">高感性“具有创造力、同理心、能观察趋势，以及为事物赋予意义”的高感性人群将成为未来世界的主人。高感性人群善于观察趋势和机会，能细致捕捉人与人之间最微妙的情感，创造优美或感动人心的作品，编织引人入胜的故事，将看似不相干的概念相结合进而转化为新事物。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/110.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-10</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美剧团：戏剧教育结硕果，专业舞台见证成长</bdo>
                        <bdo class="bdo2 db two">他们大多是8~12岁的孩子们。现场观众无不感叹于他们超强的舞台表现力和深厚的台词功底，戏剧的力量竟如此玄妙，孩子们在戏剧中成长，在表演中释放和爆发出惊人的力量。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/109.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-10</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">卓美品致采用全外教英文授课</bdo>
                        <bdo class="bdo2 db two">卓美品致外籍老师均由Helen O' Grady戏剧学院进行全球师资选拔，并经过其专业系统的培训，他们具备戏剧等综合艺术素养和国际化教育背景，拥有硕士/学士学位以及国际认可的英文教学通用证书TESOL/TEFL（TEFL/TESOL）或戏剧艺术学士学位Bachelor of Arts Degree in Drama证书。</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/108.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-09</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">【祈福九寨沟】意外来之前，请收好这份地震自救手册！-</bdo>
                        <bdo class="bdo2 db two">我们不知道明天和意外哪个先到，但我们可以在意外来之前做好准备，最权威地震逃生手册关键时刻能就自救</bdo></span>
                    </a>
                  </li>
                  <li class="fix">
                    <a href="http://www.dreamaker.com.cn/105.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu">2017</bdo>
                        <bdo class="bdo2 db">08-08</bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">害羞只是表象，坚强才是她的内在！</bdo>
                        <bdo class="bdo2 db two">卓美品致戏剧课中孩子们通过另外的一种方式去感受生活的喜怒哀乐，在情景中扮演不同的角色去释放自己，提高孩子的表现力，让孩子更自信变得大胆自信，妈妈更坚信戏剧课程对孩子的性格塑造有帮助。</bdo></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section_06 rel">
      <div class="div_biaoti abs">
        <span class="span1 guodu b db  xz " data-video="http://www.dreamaker.com.cn/static/upfile/videos/file/20170803/nancy.mp4">名家访谈</span>
        <span class="span1 guodu b db " data-video="http://www.dreamaker.com.cn/static/upfile/videos/file/20170803/xqhj.mp4">教学环境</span>
        <span class="span1 guodu b db " data-video="http://www.dreamaker.com.cn/static/upfile/videos/file/20170802/53m.mp4">家长访谈</span>
        <span class="span2 guodu db" data-video="http://www.dreamaker.com.cn/static/upfile/videos/file/20170803/nancy.mp4">
          <img src="/homes/picture/tip_03.png" alt="">点击观看视频</span></div>
      <div class="div_tu_q">
        <div class="div1">
          <picture>
            <source srcset="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170715/6135dca581e2e044a28f86389baad85f.jpg" media="(max-width: 767px)">
              <img src="/homes/picture/c61798ada2d9bb59c860e2b15e18869c.jpg" alt="名家访谈 " title="1" /></picture>
        </div>
        <div class="div1">
          <picture>
            <source srcset="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170807/642a245333cb1c60b6c3e2229dd07eb1.jpg" media="(max-width: 767px)">
              <img src="/homes/picture/a512d90d0fb7e1b284af1bf3e997cdb2.jpg" alt="教学环境" title="1" /></picture>
        </div>
        <div class="div1">
          <picture>
            <source srcset="http://www.dreamaker.com.cn/static/upfile/imgs_new/image/20170807/c6b30a1855106fe94488e5f0a5f7d0ab.jpg" media="(max-width: 767px)">
              <img src="/homes/picture/0accebe2cffd2d41bf18ac254c18f944.jpg" alt="家长访谈" title="1" /></picture>
        </div>
      </div>
      <div class="div_video">
        <div class="div1">
          <!--<img src="/homes/picture/c6b30a1855106fe94488e5f0a5f7d0ab.jpg" class="db mg1">-->
          <div id="video"></div>
          <img src="/homes/picture/cha2.png" alt="" class="mg2 db guodu"></div>
      </div>
    </section>
    <section class="section_07">
      <div class="title tc container">
        <span class="span1 db">合作伙伴</span>
        <span class="span2 db fa">partners</span></div>
      <div class="title_tit tc">
        <span class="span1 db">2011年至今，北京一线小学先后将卓美品致英文戏剧引入校园，并进行了校本课、课外班、学生剧团等多种尝试，
          <br>已有50余所合作校，近5000名孩子参加了英文戏剧课程。</span></div>
      <div class="container">
        <div class="div_p ovh">
          <div class="slider single-item div_partner">
            <div>
              <a href="#" target="_self" class="ovh guodu">
                <img src="/homes/picture/33e4dea8998da4b7660c8525d90d32f3.png"></a>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/0ecb9287ee992fe2830f3bc22ffffdb5.png"></a>
            </div>
            <div>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/00245bc6ed261752fa522c9d316b7284.png"></a>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/1dfdb2585a55b2fdc0dd6090ec98727f.png"></a>
            </div>
            <div>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/37fe60389d12f603fee58e0e74a4347a.png"></a>
              <a href="" target="_blank" class="ovh guodu">
                <img src="/homes/picture/f87d5deebe759ba32e7fb9b605a3828d.png"></a>
            </div>
            <div>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/5f9bf842ed6abc15b57702752af7a15a.png"></a>
              <a href="" target="_self" class="ovh guodu">
                <img src="/homes/picture/be77776865bf6cb82793e622f1a51bfe.png"></a>
            </div>
            <div>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/f9a5a939c5eefa1d9be64e9551f98a9a.png"></a>
              <a href="" target="_self" class="ovh guodu">
                <img src="/homes/picture/5ffcc72947543824b7c5f6068ef38b47.png"></a>
            </div>
            <div>
              <a href="#" target="_blank" class="ovh guodu">
                <img src="/homes/picture/b905644614f4df0b18b07c2435509302.png"></a>
              <a href="" target="_self" class="ovh guodu">
                <img src="/homes/picture/3348fbfb1c1e036c8ea906e7945278a9.png"></a>
            </div>
            <div>
              <div></div>
            </div>
            <script>$('.div_partner').slick({
                slidesToShow: 6,
                slidesToScroll: 6,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                responsive: [{
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    autoplay: true,
                    autoplaySpeed: 3000,
                  }
                },
                {
                  breakpoint: 991,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    autoplay: true,
                    autoplaySpeed: 3000,
                  }
                },
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 3000,
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 3000,
                  }
                }]
              });</script>
          </div>
    </section>
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
            <input type="hidden" name="info[url]" value="www.dreamaker.com.cn">
            <input type="submit" class="put_public but_01" value="立即报名"></form>
        </div>
      </div>
    </section>
    @extends('layout.footer')
    <link rel="stylesheet" href="/homes/css/validform_v5.css" type="text/css" media="all" />
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