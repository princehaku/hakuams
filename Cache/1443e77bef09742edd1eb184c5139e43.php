<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>用户登录</TITLE>
<LINK href="<?php echo ($pub); ?>/style/Default.css" type=text/css rel=stylesheet>
<LINK href="<?php echo ($pub); ?>/style/xtree.css" type=text/css rel=stylesheet>
<LINK href="<?php echo ($pub); ?>/style/User_Login.css" type=text/css rel=stylesheet>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<BODY id="userlogin_body">
<DIV></DIV>

<DIV id="user_login">
<DL>
  <DD id="user_top">
  <UL>
    <LI class="user_top_l"></LI>
    <LI class="user_top_c"></LI>
    <LI class="user_top_r"></LI></UL>
  <DD id="user_main">
  <UL>
    <LI class="user_main_l"></LI>
    <LI class="user_main_c">
    <DIV class="user_main_box">
    <UL>  <form style="margin: 0;" action="/hakuams/index.php/User/login" method="post">
      <LI class="user_main_text">用户名： </LI>
      <LI class="user_main_input"><INPUT class="TxtUserNameCssClass" id="TxtUserName"
      maxLength="20" name="username"> </LI></UL>
    <UL>
      <LI class="user_main_text">密 码： </LI>
      <LI class="user_main_input"><INPUT class="TxtPasswordCssClass" id="TxtPassword"
      type="password" name="password"> </LI></UL>
    <UL>
      <LI class="user_main_text">验证码： </LI>
      <LI class="user_main_input">
      <input name="verify" class="TxtVerifyCssClass" id="authcode"  size="8" maxlength="4">
      <img id="authcodeImg" src="/hakuams/index.php/Public/verify" style="cursor: pointer;" onClick="cgverify();" alt="点击刷新验证码" title="点击刷新验证码" /></LI></UL></DIV></LI>
    <LI class="user_main_r"><INPUT class="IbtnEnterCssClass" id="IbtnEnter"
    style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" type="image" src="<?php echo ($pub); ?>/Images/user_botton.gif" name="IbtnEnter"> </LI></UL>
  <DD id="user_bottom">
  <UL>
    <LI class="user_bottom_l"></LI>
    <LI class="user_bottom_c"><SPAN style="MARGIN-TOP: 40px"></SPAN> </LI>
    <LI class="user_bottom_r"></LI></UL></DD></DL></DIV>
<DIV></DIV>
<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
</BODY></HTML>