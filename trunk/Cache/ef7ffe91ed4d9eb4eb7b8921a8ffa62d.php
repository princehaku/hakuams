<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">

<?php if(is_array($doc)): ?><?php $i = 0;?><?php $__LIST__ = $doc?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><H1><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?>
</H1>

<DIV >
<DIV ><SPAN ><?php echo (timeto(is_array($vo)?$vo["date"]:$vo->date)); ?></SPAN>  </DIV>


</DIV>
<DIV>
  <P><?php echo (is_array($vo)?$vo["content"]:$vo->content); ?>　</P>
</DIV><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
</BODY></HTML>