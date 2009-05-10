<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录</title>
<style type="text/css">
<!--
td {
	color: #F00;
}
-->
</style>
</head>
<body bgcolor="#99CCCC">
<table width="100%" border="0">
  <tr>
    <td><?php echo (is_array($vo)?$vo["msg"]:$vo->msg); ?></td>
  </tr>
</table>
</body>
</html>