<?php /* Smarty version 2.6.26, created on 2014-05-29 12:30:00
         compiled from mEdit.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<select name = 'menu'>
  <?php echo $this->_tpl_vars['option']; ?>

  <option value=0>顶级菜单33</option>
  <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
   <option value=<?php echo $this->_tpl_vars['loop']['m_id']; ?>
> <?php echo $this->_tpl_vars['loop']['m_name']; ?>
 </option>
  <?php endforeach; endif; unset($_from); ?>
</select>


</body>
</html>