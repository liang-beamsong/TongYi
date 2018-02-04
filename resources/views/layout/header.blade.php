<?php 
    $homenav = NavigationCall();
    $logo = ReadLogo();
?>
<div class="index_nav">
      <nav class="navbar navbar-default">
        <div class="nav-left">
          <img src="/homes/picture/nav-01.png" alt=""></div>
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.dreamaker.com.cn/">
              <picture>
                <source srcset="/home" media="(max-width: 767px)">
                  <img src="{{$logo->path}}" />
                </picture>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="other navbar-right">
              <div class="img-bg">
                <img src="/homes/picture/nav-02.png" alt=""></div>
              <div class="language">
                <span>
                  <a href="http://www.dreamaker.com.cn/message.html">预约试听</a></span></div>
              <div class="tel">4006781872 转 1</div></div>
            <ul class="nav navbar-nav  navbar-right">
              @foreach($homenav as $k=>$v)
              <li>
                <a href="{{$v->url}}">{{$v->name}}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </nav>
    </div>