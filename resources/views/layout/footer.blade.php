<?php 
  $links = ReadLinks();
  $bnav = BottomNavigation();
?>
<section class="baoming">
  <div class="container">
    <div class="div1 fix rel">
      <!--<b class="b1"><img src="/homes/picture/phone.png" alt="">4006781872 转 1</b>-->
      <form name="form2" class="registerform2" id="form2">
        <div class="divv1 fix">
          <div class="col-md-3 col-sm-6">
            <div class="div_put">
              <input type="text" class="put_public put_01" id="names" maxlength="4" name="name" placeholder="请输入姓名！"></div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="div_put">
              <input type="text" class="put_public put_01" id="ages" name="age" maxlength="3" placeholder="请输入孩子年龄！"></div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="div_put">
              <input type="text" class="put_public put_01" id="phones" name="phone" maxlength="11" nullmsg="请填写您的手机号" errormsg="请您填写11位手机号" placeholder="填写11位手机号" datatype="m"></div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="div_put">
              <input type="text" class="put_public put_01" id="emails" name="email" maxlength="20" nullmsg="请填写您的邮箱" errormsg="请填写您的邮箱" placeholder="请填写您的邮箱" datatype="m"></div>
          </div>
          <div class="divv2">
              <div class="div_put2 rel" style="">
              <input type="text" class="put_public put_01" id="remark" maxlength="10" name="remarks" nullmsg="您期望我们什么时间与您联系" errormsg="您期望我们什么时间与您联系" placeholder="您期望我们什么时间与您联系" datatype="m"></div>
          </div>
          
        </div>
        <span id="msgdemo3" style="margin-top:5px;"></span>
        <input type="submit" class="put_public but_01" value="立即报名" onclick="signup();return false;"></form>
    </div>
  </div>
</section>
<script>
  function signup()
  {
    var names = $('#names').val();
    var ages = $('#ages').val(); 
    var phones = $('#phones').val(); 
    var emails = $('#emails').val(); 
    var remark = $('#remark').val(); 
    $.post('messages/signup', {'name':names,'age':ages,'phone':phones,'email':emails,'remarks':remark}, function(data){
      var data = JSON.parse(data);
      if(data.status == '502'){
        alert('提交失败')
      }else if(data.status == '200'){
        alert('提交成功');
        $('#remark,#emails,#phones,#names,#ages').val(''); 
      }
    });
  }
</script>
<footer class="footer rel">
      <a id="top" class="db abs">
        <img src="/homes/picture/top.png" alt=""></a>
      <div class="container">
        <div class="foot_top fix">
          <div class="col-md-6 fix">
          @foreach($bnav as $k=>$v)
            <div class="col-sm-3">
              <ul>
                <li>
                  <a href="http://www.dreamaker.com.cn/course.html">{{$v->name}}</a>
                </li>
              </ul>
            </div>
          @endforeach
          </div>
          <div class="col-md-6 fix">
            <div class="fix">
              <div class="div_right">
                <span style="white-space:normal;">Room 103, courtyard No. 5, No. 59, Changhe Wan District,&nbsp;</span>
                <br style="white-space:normal;" />
                <span style="white-space:normal;">Beijing Haidian District sorghum Bridge, Changhe Wan Street</span>
                <br style="white-space:normal;" />
                <span style="white-space:normal;">北京市海淀区西直门高粱桥斜街长河湾小区59号院5号楼103室</span>
                <span style="white-space:normal;"></span>
                <div class="bdsharebuttonbox mt20">
                  <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                  <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="foot_center fix">
          <span class="span1 fl">友情链接：</span>
          @foreach($links as $k=>$v)
          <a href="{{$v->url}}" target="_blank">{{$v->name}}</a>丨
          @endforeach
        </div>
      <div class="foot_bottom tc">
        <div class="container-fluid">
          <span style="white-space:normal;">All Rights Reserved&nbsp;</span>北京童翼时代国际文化有限公司 &nbsp;Copyright 2017
          <span style="white-space:normal;">童翼品致&nbsp;</span>&nbsp;
          <a style="padding-bottom:0px;margin:0px;outline-style:none;outline-color:invert;padding-left:0px;outline-width:0px;padding-right:0px;font-family:微软雅黑,;color:#707070;text-decoration:none;padding-top:0px;" href="http://icp.chinaz.com/info?q=dreamaker.com.cn" target="_blank">
            <span style="color:#000000;">京ICP备11024770号</span></a>
          <span style="FONT-FAMILY: 微软雅黑,; COLOR: #ffffff" white-space:normal;background-color:#333333;?="">&nbsp;</span>
        </div>
      </div>
    </footer>