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
        <span class="span1 db">童翼优势</span>
        <span class="span2 db fa">advantage</span></div>
      <div class="title_tit tc">
        <span class="span1 db">关于人生经历的典礼, 奇妙而美好的成长之地</span>
        <span class="span2 db">选择我们的六大理由</span></div>
      <div class="container-fluid youshi tc">
        @foreach($advantage as $k=>$v)
        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=".0s">
          <a href="/advantages/{{$v->id}}.html" target="_self" class="db rel">
            <span class="db ovh">
              <img src="{{$v->path}}" class="db guodu"></span>
            <span class="span1 db one">{{$v->title}}</span>
            <span class="span2 db two">{{$v->describe}}</span>
            <span class="span3 db abs tc">
              <bdo class="xian dib guodu"></bdo>
            </span>
          </a>
        </div>
        @endforeach
      </div>
    </section>
    <section class="section_03 ovh rel huan_bg" section class="section_03 ovh rel huan_bg" data-bg="/homes/images/8c0230cf0fbf7cbf54c663ff32bf5b78.jpg" data-bg2="/homes/images/8c0230cf0fbf7cbf54c663ff32bf5b78.jpg">
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
        <span class="span1 db">童翼课程</span>
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
          <a href="/articles/{{$v->id}}.html" target="_self" title="HOG课程" class="db rel ovh">
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
              <span class="span1">童翼活动
                <bdo class="fa">/ activity</bdo>
                <a href="#" class="abs">更多</a></span>
            </div>
            <div class="divv1">
            @foreach($activity as $k=>$v)
              <?php $num++?>
              @if($num == 1)
              <a href="/activitys/{{$v->id}}.html" class="div_top db fix rel">
                <span class="db abs span1 ovh">
                  <img src="{{$v->path}}" class="db guodu"></span>
                <span class="span2 db">
                  <b class="db b1 one">{{$v->title}}</b>
                  <bdo class="bdo1"><?php echo date('Y-m-d',$v->time)?></bdo>
                  <bdo class="db bdo2 two">{{$v->describe}}</bdo></span>
              </a>
              @else
                  @if($num == 2)
                     <ul class="div_ul">
                        <li>
                          <a href="/activitys/{{$v->id}}.html" class="db one guodu">{{$v->title}}</a>
                          <span class="abs"><?php echo date('Y-m-d',$v->time)?></span>
                        </li>
                  @else
                        <li>
                          <a href="/activitys/{{$v->id}}.html" class="db one guodu">{{$v->title}}</a>
                          <span class="abs"><?php echo date('Y-m-d',$v->time)?></span>
                        </li>
                  @endif
              @endif
              @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-6 div_dongtai">
            <div class="div_title rel">
              <span class="span1">童翼动态
                <bdo class="fa">/ dynamic</bdo>
                <a href="http://www.dreamaker.com.cn/channel.html" class="abs">更多</a></span>
            </div>
            <div class="gundong">
              <div class="scrolltop">
                <ul>
                @foreach($dynamic as $k=>$v)
                  <li class="fix">
                    <a href="/dynamics/{{$v->id}}.html">
                      <span class="span_left tc db abs">
                        <bdo class="bdo1 db guodu"><?php echo date('Y',$v->time)?></bdo>
                        <bdo class="bdo2 db"><?php echo date('m-d',$v->time)?></bdo></span>
                      <span class="span_right db">
                        <bdo class="bdo1 db one guodu">{{$v->title}}</bdo>
                        <bdo class="bdo2 db two">{{$v->describe}}</bdo></span>
                    </a>
                  </li>
                @endforeach
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
          <?php $str=''?>
            @foreach($partner as $k=>$v)
                <?php 
                    $number++; 
                    $str.='<a href="#" target="_self" class="ovh guodu"><img src="'.$v->path.'"><span>'.$v->title.'</span></a>';
                    if($number%2 == 0 ){
                      echo '<div>'.$str.'</div>';
                      $str = '';
                    }
                    if($number == count($partner) && $number%2 != 0){
                      echo '<div>'.$str.'</div>';
                    }
                ?>
            @endforeach
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