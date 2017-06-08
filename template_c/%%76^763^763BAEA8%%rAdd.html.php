<?php /* Smarty version 2.6.26, created on 2014-05-31 00:39:18
         compiled from rAdd.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action='' method='post' >
  用户名：<input type='text' name='user' ><br/>
 权限：

  <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
    <?php if ($this->_tpl_vars['loop']['f_id'] == 0): ?>
    <p style="color:red;font-size:12px;"><?php echo $this->_tpl_vars['loop']['m_name']; ?>
</p>
    <?php else: ?>
    <input type='checkbox' name='power[]' value=<?php echo $this->_tpl_vars['loop']['m_id']; ?>
 ><?php echo $this->_tpl_vars['loop']['m_name']; ?>

    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
  <br/>
  <input type='submit' name='sub' value='添加'>
</form>
</body>
</html>