<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8" />
<meta http-equiv='Refresh' content='<?php echo ($waitSecond); ?>;URL=<?php echo ($jumpUrl); ?>'>
</HEAD>
<body bgcolor="#99CCCC">
	  <TABLE  cellpadding=0 cellspacing=0 class="info" align="center" width="500">
	<TR class="header">
		<td><?php echo ($msgTitle); ?></td>
	</TR>
	<?php if(isset($message)): ?><TR">
		<TD style="color:blue;text-align:center;"><?php echo ($message); ?></TD>
	</TR><?php endif; ?>
	<?php if(isset($error)): ?><TR>
		<TD style="color:red;text-align:center;"><?php echo ($error); ?></TD>
	</TR><?php endif; ?>
	<?php if(isset($closeWin)): ?><TR>
		<TD style="text-align:center;">系统将在 <span style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> 秒后自动关闭。<br />如果不想等待,直接点击 <A HREF="<?php echo ($jumpUrl); ?>" target="_parent">这里</A> 关闭</TD>
	</TR><?php endif; ?>
	<?php if(!isset($closeWin)): ?><TR>
		<TD style="text-align:center;">系统将在 <span style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> 秒后自动跳转。<br />如果不想等待,直接点击 <A HREF="<?php echo ($jumpUrl); ?>" target="_parent">这里</A> 跳转</TD>
	</TR><?php endif; ?>
	</TABLE>
</BODY>
</HTML>