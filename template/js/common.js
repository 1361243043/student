/**
*desc  公共js验证函数
*date  2013/6/19/星期三
*author M.W.Q
*/
function checkalls(e,checks)
{
	var cbs=document.getElementsByName(checks);
	for(var i=0;i<cbs.length;i++)
	{
		cbs[i].checked=e.checked;
	}
}
function delcheck(checks)
{
	var rs=false;
	var cb=document.getElementsByName(checks);
	for(var i=0;i<cb.length;i++)
	{
		if(cb[i].checked==true)
		{
			rs=true;
		}
	}
	if(rs==true)
	{
		return confirm('你确定删除吗？');
	}
	else
	{
		alert('至少选择一项进行删除');
		return false;
	}
	return true;
}
//
//
//
//*************************************验证添加毕业鉴定信息*************************************************//
//
//
function addStuFront()
{
	//年级非空验证
	if(form1.grade.value==''||form1.grade.value.length==null)
	{
		alert('请选择年级！');
		return false;
	}
	//班级非空验证
	if(form1.class_id.value==''||form1.class_id.value.length==null)
	{
		alert('请选择班级！');
		return false;
	}
	//学生姓名非空验证
	if(form1.bj_stuname.value==''||form1.bj_stuname.value.length==null)
	{
		alert('请选择学生姓名！');
		return false;
	}
	//离校时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var job_date=form1.bj_date.value;
	if(job_date==''||job_date.length==null)
	{
		alert('请填写离校时间！');
		form1.bj_date.focus();
		return false;
	}
	else if(!date.test(job_date))
	{
		alert('请输入正确的时间格式！');
		form1.bj_date.focus();
		return false;
	}
	//带队老师非空验证
	if(form1.bj_lead_teacher.value==''||form1.bj_lead_teacher.value.length==null)
	{
		alert('请选择带队老师！');
		return false;
	}
	//综合成绩非空验证
	if(form1.bj_mul_result.value==''||form1.bj_mul_result.value.length==null)
	{
		alert('请选择综合成绩！');
		return false;
	}
	//就业城市非空验证
	if(form1.bj_jobcity.value==''||form1.bj_jobcity.value.length==null)
	{
		alert('请填写就业城市！');
		form1.bj_jobcity.focus();
		return false;
	}
}
//
//
//
//*************************************验证修改毕业鉴定信息*************************************************//
//
//
function modStuFront1()
{
	//日常表现非空验证
	if(form1.bj_daily_show.value==''||form1.bj_daily_show.value.length==null)
	{
		alert('请填写日常表现！');
		form1.bj_daily_show.focus();
		return false;
	}
}
function modStuFront()
{
	//离校时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var job_date=form1.bj_date.value;
	if(job_date==''||job_date.length==null)
	{
		alert('请填写离校时间！');
		form1.bj_date.focus();
		return false;
	}
	else if(!date.test(job_date))
	{
		alert('请输入正确的时间格式！');
		form1.bj_date.focus();
		return false;
	}
}
//
//
//
//*************************************验证添加就业信息*************************************************//
//
//
function addStuLater()
{
	//年级非空验证
	if(form1.grade.value==''||form1.grade.value.length==null)
	{
		alert('请选择年级！');
		return false;
	}
	//班级非空验证
	if(form1.class_id.value==''||form1.class_id.value.length==null)
	{
		alert('请选择班级！');
		return false;
	}
	//学生姓名非空验证
	if(form1.bj_stuname.value==''||form1.bj_stuname.value.length==null)
	{
		alert('请选择学生姓名！');
		return false;
	}
	//就业单位非空验证
	if(form1.aj_job_company.value==''||form1.aj_job_company.value.length==null)
	{
		alert('请填写工作单位！');
		form1.aj_job_company.focus();
		return false;
	}
	//工作职位非空验证
	if(form1.aj_post.value==''||form1.aj_post.value.length==null)
	{
		alert('请填写工作职位！');
		form1.aj_post.focus();
		return false;
	}
	//工作时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var job_date=form1.aj_job_date.value;
	if(job_date==''||job_date.length==null)
	{
		alert('请填写工作时间！');
		form1.aj_job_date.focus();
		return false;
	}
	else if(!date.test(job_date))
	{
		alert('请输入正确的时间格式！');
		form1.aj_job_date.focus();
		return false;
	}
	//就业城市非空验证
	if(form1.aj_jobcity.value==''||form1.aj_jobcity.value.length==null)
	{
		alert('请填写就业城市！');
		return false;
	}
	
	//电话验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.aj_student_phone.value;
	if(phone.length==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.aj_student_phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.aj_student_phone.focus();
		return false;
	}
	//工作待遇非空验证
	if(form1.aj_job_pay.value==''||form1.aj_job_pay.value.length==null)
	{
		alert('请填写工作待遇！');
		form1.aj_job_pay.focus();
		return false;
	}
	//个人地址非空验证
	if(form1.aj_my_address.value==''||form1.aj_my_address.value.length==null)
	{
		alert('请填写个人地址！');
		form1.aj_my_address.focus();
		return false;
	}
	//公司地址非空验证
	if(form1.aj_address.value==''||form1.aj_address.value.length==null)
	{
		alert('请填写公司地址！');
		form1.aj_address.focus();
		return false;
	}

	//公司简介非空验证
	if(form1.aj_company_show.value==''||form1.aj_company_show.value.length==null)
	{
		alert('请填写公司简介！');
		form1.aj_company_show.focus();
		return false;
	}
}
//
//
//
//*************************************验证修改就业信息*************************************************//
//
//
function modStuLater()
{
	//就业单位非空验证
	if(form1.aj_job_company.value==''||form1.aj_job_company.value.length==null)
	{
		alert('请填写工作单位！');
		form1.aj_job_company.focus();
		return false;
	}
		//工作职位非空验证
	if(form1.aj_post.value==''||form1.aj_post.value.length==null)
	{
		alert('请填写工作职位！');
		form1.aj_post.focus();
		return false;
	}
	//工作时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var job_date=form1.aj_job_date.value;
	if(job_date==''||job_date.length==null)
	{
		alert('请填写工作时间！');
		form1.aj_job_date.focus();
		return false;
	}
	else if(!date.test(job_date))
	{
		alert('请输入正确的时间格式！');
		form1.aj_job_date.focus();
		return false;
	}
	//就业城市非空验证
	if(form1.aj_jobcity.value==''||form1.aj_jobcity.value.length==null)
	{
		alert('请选择就业城市！');
		return false;
	}
	//电话验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.aj_student_phone.value;
	if(phone.length==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.aj_student_phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.aj_student_phone.focus();
		return false;
	}
	//工作待遇非空验证
	if(form1.aj_job_pay.value==''||form1.aj_job_pay.value.length==null)
	{
		alert('请填写工作待遇！');
		form1.aj_job_pay.focus();
		return false;
	}
	//个人地址非空验证
	if(form1.aj_my_address.value==''||form1.aj_my_address.value.length==null)
	{
		alert('请填写个人地址！');
		form1.aj_my_address.focus();
		return false;
	}
	//公司地址非空验证
	if(form1.aj_address.value==''||form1.aj_address.value.length==null)
	{
		alert('请填写公司地址！');
		form1.aj_address.focus();
		return false;
	}
	//公司简介非空验证
	if(form1.aj_company_show.value==''||form1.aj_company_show.value.length==null)
	{
		alert('请填写公司简介！');
		form1.aj_company_show.focus();
		return false;
	}
	
}
//
//
//
//*************************************验证修改收费管理*************************************************//
//
//
function editmoney()
{
	//缴费项目非空验证
	if(form1.leixing.value==''||form1.leixing.value.length==null)
	{
		alert('请选择缴费项目！');
		return false;
	}
	//实缴金额非空验证
	if(form1.jiao.value==''||form1.jiao.value.length==null)
	{
		alert('实缴金额不能为空');
		form1.jiao.focus();
		return false;
	}
		//已缴金额非空验证
	if(form1.yijiao.value==''||form1.yijiao.value.length==null)
	{
		alert('实缴金额不能为空');
		form1.yijiao.focus();
		return false;
	}
		//欠费金额非空验证
	if(form1.qian.value==''||form1.qian.value.length==null)
	{
		alert('实缴金额不能为空');
		form1.qian.focus();
		return false;
	}

	//时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var start_date=form1.data.value;
	var end_date=form1.end.value;
	if(start_date==''||start_date.length==null)
	{
		alert('请填写缴费时间！');
		form1.data.focus();
		return false;
	}
	else if(!date.test(start_date))
	{
		alert('请输入正确的时间格式！');
		form1.data.focus();
		return false;
	}
	if(end_date==''||end_date.length==null)
	{
		alert('请填写清款时间！');
		form1.end.focus();
		return false;
	}
	else if(!date.test(end_date))
	{
		alert('请输入正确的时间格式！');
		form1.end.focus();
		return false;
	}
	//收款人非空验证
	if(form1.add_name.value==''||form1.add_name.value.length==null)
	{
		alert('请填写收款人！');
		return false;
	}
	//审核非空验证
	if(form1.beizhu.value==''||form1.beizhu.value.length==null)
	{
		alert('请填写是否审核！');
		form1.beizhu.focus();
		return false;
	}
}
//
//
//*************************************验证费用类型管理添加*************************************************//
//
//
function addMoneyList()
{
	 if(form1.type.value.length==''||form1.type.value.length==null)
	  {
		 alert('学费类型名称不能为空');
		 form1.type.focus();
		 return false;
	  }
	if(form1.money.value.length==''||form1.money.value.length==null)
	 {
		 alert('学费金额不能为空');
		 form1.money.focus();
		 return false;
	 }
	//时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var start_date=form1.begin.value;
	var end_date=form1.end.value;
	if(start_date==''||start_date.length==null)
	{
		alert('请填写缴费时间！');
		form1.begin.focus();
		return false;
	}
	else if(!date.test(start_date))
	{
		alert('请输入正确的时间格式！');
		form1.begin.focus();
		return false;
	}
	if(end_date==''||end_date.length==null)
	{
		alert('请填写清款时间！');
		form1.end.focus();
		return false;
	}
	else if(!date.test(end_date))
	{
		alert('请输入正确的时间格式！');
		form1.end.focus();
		return false;
	}
}
//
//
//
//*************************************验证添加收费管理*************************************************//
//
//
function addmoney()
{    
	//年级非空验证
	if(form1.grade.value==''||form1.grade.value.length==null)
	{
		alert('请选择年级！');
		form1.grade.focus();
		return false;
	}
	//班级非空验证
	if(form1.class_id.value==''||form1.class_id.value.length==null)
	{
		alert('请选择班级！');
		form1.class_id.focus();
		return false;
	}
	//用户名非空验证
	if(form1.bj_stuname.value==''||form1.bj_stuname.value.length==null)
	{
		alert('请选择学生！');
		form1.bj_stuname.focus();
		return false;
	}
	//缴费项目非空验证
	if(form1.xiangmu.value==''||form1.xiangmu.value.length==null)
	{
		alert('请选择缴费项目！');
		return false;
	}
	//实缴金额非空验证
	if(form1.yingjiao.value==''||form1.yingjiao.value.length==null)
	{
		alert('实缴金额不能为空');
		form1.yingjiao.focus();
		return false;
	}
		//已缴金额非空验证
	if(form1.yijiao.value==''||form1.yijiao.value.length==null)
	{
		alert('实缴金额不能为空');
		form1.yijiao.focus();
		return false;
	}
		//欠费金额非空验证
	if(form1.qian.value==''||form1.qian.value.length==null)
	{
		alert('实缴金额不能为空');
		form1.qian.focus();
		return false;
	}

	//时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var start_date=form1.date1.value;
	var end_date=form1.date2.value;
	if(start_date==''||start_date.length==null)
	{
		alert('请填写缴费时间！');
		form1.date1.focus();
		return false;
	}
	else if(!date.test(start_date))
	{
		alert('请输入正确的时间格式！');
		form1.date1.focus();
		return false;
	}
	if(end_date==''||end_date.length==null)
	{
		alert('请填写清款时间！');
		form1.date2.focus();
		return false;
	}
	else if(!date.test(end_date))
	{
		alert('请输入正确的时间格式！');
		form1.date2.focus();
		return false;
	}
	//收款人非空验证
	if(form1.shou.value==''||form1.shou.value.length==null)
	{
		alert('请选择是否审核！');
		return false;
	}
	//审核非空验证
	if(form1.nei.value==''||form1.nei.value.length==null)
	{
		alert('请选择是否审核！');
		form1.nei.focus();
		return false;
	}
}
//
//
//*************************************验证费用类型管理添加*************************************************//
//
//
function addMoney2()
{
	 if(form1.te_type.value.length==''||form1.te_type.value.length==null)
	  {
		 alert('学费类型名称不能为空');
		 form1.te_type.focus();
		 return false;
	  }
	if(form1.te_money.value.length==''||form1.te_money.value.length==null)
	 {
		 alert('学费金额不能为空');
		 form1.te_money.focus();
		 return false;
	 }
	//时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var start_date=form1.te_date_begin.value;
	var end_date=form1.te_date_end.value;
	if(start_date==''||start_date.length==null)
	{
		alert('请填写缴费时间！');
		form1.te_date_begin.focus();
		return false;
	}
	else if(!date.test(start_date))
	{
		alert('请输入正确的时间格式！');
		form1.te_date_begin.focus();
		return false;
	}
	if(end_date==''||end_date.length==null)
	{
		alert('请填写清款时间！');
		form1.te_date_end.focus();
		return false;
	}
	else if(!date.test(end_date))
	{
		alert('请输入正确的时间格式！');
		form1.te_date_end.focus();
		return false;
	}
	return true;
}
//
//
//*************************************验证费用类型管理修改*************************************************//
//
//
function editmoneylist()
{
	 if(form1.type.value.length==''||form1.type.value.length==null)
	  {
		 alert('学费类型名称不能为空');
		 form1.type.focus();
		 return false;
	  }
	if(form1.money.value.length==''||form1.money.value.length==null)
	 {
		 alert('学费金额不能为空');
		 form1.money.focus();
		 return false;
	 }
	//时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var start_date=form1.begin.value;
	var end_date=form1.end.value;
	if(start_date==''||start_date.length==null)
	{
		alert('请填写缴费时间！');
		form1.begin.focus();
		return false;
	}
	else if(!date.test(start_date))
	{
		alert('请输入正确的时间格式！');
		form1.begin.focus();
		return false;
	}
	if(end_date==''||end_date.length==null)
	{
		alert('请填写清款时间！');
		form1.end.focus();
		return false;
	}
	else if(!date.test(end_date))
	{
		alert('请输入正确的时间格式！');
		form1.end.focus();
		return false;
	}
	return true;
}
//
//
//
//*************************************验证学生维护添加*************************************************//
//
//
function checkstudent()
{
	//用户名非空验证
	if(form1.name.value.length==0||form1.name.value=='')
	{
		alert('请填写学生姓名！');
		form1.name.focus();
		return false;
	}
	//密码验证
	if(form1.pwd.value=='')
	{
		alert('密码不能为空！');
		form1.pwd.focus();
		return false
	}
	else if(form1.pwd.value.length<6)
	{ 
		alert('密码不少于六位！');
		form1.pwd.focus();
		return false;
	}
	//出生日期检验
	var birthday_1= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var  birthday=form1.bir.value;
	if(birthday.length==0||birthday=='')
	{
		alert('请输入学生出生日期！');
		form1.bir.focus();
		return false;
	}
	else if(birthday.length<8)
	{
		alert('请输入正确的日期格式！');
		form1.bir.focus();
		return false;
	}
	//用户身份证号验证
	var card_1= /^([0-9xX]{18})$/;
	var card=form1.card.value;
	if(card.length==null||card=='')
	{ 
		alert('身份证号不少于十八位且不能为空！');
		form1.card.focus();
		return false;
	}
	else if(!card_1.test(card))
	{
		alert('请输入正确的身份证号格式！');
		form1.card.focus();
		return false;
	}
		//年龄验证
	if(form1.age.value.length==0||form1.age.value=='')
	{ 
		alert('年龄不能为空！');
		form1.age.focus();
		return false;
	}
	else if (form1.age.value.length>2)
	{
		alert('年龄数不能大于两位！');
		form1.age.focus();
		return false;
	}
	//民族检验
	if(form1.nation.value.length==0||form1.nation.value=='')
	{
		alert('请选择学生民族！');
		return false;
	}
	//班级验证
	if(form1.class_id.value.length==0||form1.class_id.value=='')
	{
		alert('班级不能为空！');
		return false;
	}
	//宿舍验证
	if(form1.dor.value.length==0||form1.dor.value=='')
	{
		alert('宿舍不能为空！');
		form1.dor.focus();
		return false;
	}
	//家长姓名验证
	if(form1.father.value.length==0||form1.father.value=='')
	{
		alert('家长姓名不能为空！');
		form1.father.focus();
		return false;
	}
	//家庭地址验证
	if(form1.address.value.length==0||form1.address.value=='')
	{
		alert('家庭地址不能为空！');
		form1.address.focus();
		return false;
	}
	//联系方式验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.phone.value;
	if(phone.length==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.phone.focus();
		return false;
	}
	
	
}
//
//
//
//*************************************验证老师维护添加/修改*************************************************//
//
//
function checkteacher()
{
	//用户名非空验证
	if(form1.t_name.value.length==0||form1.t_name.value==null)
	{
		alert('请填写教师姓名！');
		form1.t_name.focus();
		return false;
	}
	//密码验证
	if(form1.t_pwd.value=='')
	{
		alert('密码不能为空！');
		form1.t_pwd.focus();
		return false
	}
	else if(form1.t_pwd.value.length<6)
	{ 
		alert('密码不少于六位！');
		form1.t_pwd.focus();
		return false;
	}
	//角色验证
	if(form1.t_role.value==''||form1.t_name.value.length==0)
	{
		alert('角色不能为空！');
		form1.t_role.focus();
		return false
	}
	//年龄验证
	if(form1.t_age.value.length==0||form1.t_age.value=='')
	{ 
		alert('年龄不能为空！');
		form1.t_age.focus();
		return false;
	}
	else if (form1.t_age.value.length>2)
	{
		alert('年龄数不能大于两位！');
		form1.t_age.focus();
		return false;
	}

	//民族检验
	if(form1.t_nation.value.length==0||form1.t_nation.value=='')
	{
		alert('请选择学生民族！');
		return false;
	}
	//出生日期检验
	var birthday_1= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var  birthday=form1.t_birthday.value;
	if(birthday.length==0||birthday=='')
	{
		alert('请输入出生日期！');
		form1.t_birthday.focus();
		return false;
	}
	else if(birthday.length<8)
	{
		alert('请输入正确的日期格式！');
		form1.t_birthday.focus();
		return false;
	}
	//用户身份证号验证
	var card_1= /^([0-9xX]{18})$/;
	var card=form1.t_card.value;
	if(card.length==null||card=='')
	{ 
		alert('身份证号不少于十八位且不能为空！');
		form1.t_card.focus();
		return false;
	}
	else if(!card_1.test(card))
	{
		alert('请输入正确的身份证号格式！');
		form1.t_card.focus();
		return false;
	}
	//家庭地址验证
	if(form1.t_address.value.length==0||form1.t_address.value=='')
	{
		alert('家庭地址不能为空！');
		form1.t_address.focus();
		return false;
	}
	//联系方式验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.t_phone.value;
	if(phone.length==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.t_phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.t_phone.focus();
		return false;
	}
}
//
//
//
//*************************************验证老师维护添加/修改*************************************************//
//
//
function checkteacher()
{
	//用户名非空验证
	if(form1.t_name.value.length==0||form1.t_name.value==null)
	{
		alert('请填写教师姓名！');
		form1.t_name.focus();
		return false;
	}
	//密码验证
	if(form1.t_pwd.value=='')
	{
		alert('密码不能为空！');
		form1.t_pwd.focus();
		return false
	}
	else if(form1.t_pwd.value.length<6)
	{ 
		alert('密码不少于六位！');
		form1.t_pwd.focus();
		return false;
	}
	//角色验证
	if(form1.t_role.value==''||form1.t_name.value.length==0)
	{
		alert('角色不能为空！');
		form1.t_role.focus();
		return false
	}
	//年龄验证
	if(form1.t_age.value.length==0||form1.t_age.value=='')
	{ 
		alert('年龄不能为空！');
		form1.t_age.focus();
		return false;
	}
	else if (form1.t_age.value.length>2)
	{
		alert('年龄数不能大于两位！');
		form1.t_age.focus();
		return false;
	}

	//民族检验
	if(form1.t_nation.value.length==0||form1.t_nation.value=='')
	{
		alert('请选择学生民族！');
		return false;
	}
	//出生日期检验
	var birthday_1= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var  birthday=form1.t_birthday.value;
	if(birthday.length==0||birthday=='')
	{
		alert('请输入出生日期！');
		form1.t_birthday.focus();
		return false;
	}
	else if(birthday.length<8)
	{
		alert('请输入正确的日期格式！');
		form1.t_birthday.focus();
		return false;
	}
	//用户身份证号验证
	var card_1= /^([0-9xX]{18})$/;
	var card=form1.t_card.value;
	if(card.length==null||card=='')
	{ 
		alert('身份证号不少于十八位且不能为空！');
		form1.t_card.focus();
		return false;
	}
	else if(!card_1.test(card))
	{
		alert('请输入正确的身份证号格式！');
		form1.t_card.focus();
		return false;
	}
	//家庭地址验证
	if(form1.t_address.value.length==0||form1.t_address.value=='')
	{
		alert('家庭地址不能为空！');
		form1.t_address.focus();
		return false;
	}
	//联系方式验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.t_phone.value;
	if(phone.length==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.t_phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.t_phone.focus();
		return false;
	}
}
//
//
//
//*************************************验证学生的添加*************************************************//
//
//
function addstudent()
{
	//学生非空验证
	if(form1.name.value.length==''||form1.name.value.length==null)
	{
		alert('请填写学生姓名！');
		form1.name.focus();
		return false;
	}
	//设置登陆密码非空验证
	if(form1.pwd.value.length==''||form1.pwd.value.length==null)
	{
		alert('请设置登陆密码！');
		form1.pwd.focus();
		return false;
	}
	//设置出生日期非空验证
	var phe= /^([0-9/-]{10})$/;
	var bir=form1.bir.value;
	if(bir==''||bir.length==null)
	{
		alert('请输入出生日期！');
		form1.bir.focus();
		return false;
	}
	else if(!phe.test(bir))
	{
		alert('请输入正确的出生日期！');
		form1.bir.focus();
		return false;
	}
	//设置身份证号码非空验证
	var phe= /^([0-9]{18}||[0-9]{17}[Xx]{1})$/;
	var card=form1.card.value;
	if(card==''||card.length==null)
	{
		alert('请输入身份证号！');
		form1.card.focus();
		return false;
	}
	else if(!phe.test(card))
	{
		alert('请输入正确的身份证号！');
		form1.card.focus();
		return false;
	}
	//设置年龄非空验证
	var phe= /^([0-9]{2})$/;
	var age=form1.age.value;
	if(age==''||age.length==null)
	{
		alert('请输入年龄！');
		form1.age.focus();
		return false;
	}
	else if(!phe.test(age))
	{
		alert('请输入正确的年龄！');
		form1.age.focus();
		return false;
	}
	//设置民族非空验证
	if(form1.nation.value.length==''||form1.nation.value.length==null)
	{
		alert('请填民族！');
		form1.nation.focus();
		return false;
	}
	//设置班级非空验证
	if(form1.classid.value.length==''||form1.classid.value.length==null)
	{
		alert('请填班级！');
		form1.classid.focus();
		return false;
	}
	//设置宿舍非空验证
	var phe= /^([0-9]{3})$/;
	var dor=form1.dor.value;
	if(dor==''||dor.length==null)
	{
		alert('请输入宿舍！');
		form1.dor.focus();
		return false;
	}
	else if(!phe.test(dor))
	{
		alert('请输入正确的宿舍！');
		form1.dor.focus();
		return false;
	}
	//设置家长非空验证
	if(form1.father.value.length==''||form1.father.value.length==null)
	{
		alert('请填家长姓名！');
		form1.father.focus();
		return false;
	}
	//设置家庭住址非空验证
	if(form1.address.value.length==''||form1.address.value.length==null)
	{
		alert('请填家庭住址！');
		form1.address.focus();
		return false;
	}
	//电话验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.phone.value;
	if(phone==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.phone.focus();
		return false;
	}
	//qq号
	var phe= /^([0-9]{6}||[0-9]{7}||[0-9]{8}||[0-9]{9}||[0-9]{10}||[0-9]{11})$/;
	var QQ=form1.QQ.value;
	if(!phe.test(QQ))
	{
		alert('请输入正确的QQ！');
		form1.QQ.focus();
		return false;
	}
	return true;
}
//
//
//
//*************************************验证学生的修改*************************************************//
//
//
function modstudent()
{
	//设置出生日期非空验证
	var phe= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var bir=form1.bir.value;
	if(bir==''||bir.length==null)
	{
		alert('请输入出生日期！');
		form1.bir.focus();
		return false;
	}
	else if(!phe.test(bir))
	{
		alert('请输入正确的出生日期！');
		form1.bir.focus();
		return false;
	}
	//设置身份证号码非空验证
	var phe= /^([0-9]{18}||[0-9]{17}[Xx]{1})$/;
	var card=form1.card.value;
	if(card==''||card.length==null)
	{
		alert('请输入身份证号！');
		form1.card.focus();
		return false;
	}
	else if(!phe.test(card))
	{
		alert('请输入正确的身份证号！');
		form1.card.focus();
		return false;
	}
	//设置年龄非空验证
	var phe= /^([0-9]{2})$/;
	var age=form1.age.value;
	if(age==''||age.length==null)
	{
		alert('请输入年龄！');
		form1.age.focus();
		return false;
	}
	else if(!phe.test(age))
	{
		alert('请输入正确的年龄！');
		form1.age.focus();
		return false;
	}
	//设置民族非空验证
	if(form1.nation.value.length==''||form1.nation.value.length==null)
	{
		alert('请填民族！');
		form1.nation.focus();
		return false;
	}
	//设置班级非空验证
	if(form1.classid.value.length==''||form1.classid.value.length==null)
	{
		alert('请填班级！');
		form1.classid.focus();
		return false;
	}
	//设置宿舍非空验证
	var phe= /^([0-9]{3})$/;
	var dor=form1.dor.value;
	if(dor==''||dor.length==null)
	{
		alert('请输入宿舍！');
		form1.dor.focus();
		return false;
	}
	else if(!phe.test(dor))
	{
		alert('请输入正确的宿舍！');
		form1.dor.focus();
		return false;
	}
	//设置家长非空验证
	if(form1.father.value.length==''||form1.father.value.length==null)
	{
		alert('请填家长姓名！');
		form1.father.focus();
		return false;
	}
	//设置家庭住址非空验证
	if(form1.address.value.length==''||form1.address.value.length==null)
	{
		alert('请填家庭住址！');
		form1.address.focus();
		return false;
	}
	//电话验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.phone.value;
	if(phone==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.phone.focus();
		return false;
	}
	//qq号
	var phe= /^([0-9]{6}||[0-9]{7}||[0-9]{8}||[0-9]{9}||[0-9]{10}||[0-9]{11})$/;
	var QQ=form1.QQ.value;
	if(!phe.test(QQ))
	{
		alert('请输入正确的QQ！');
		form1.QQ.focus();
		return false;
	}
	return true;
}
//
//
//
//*************************************验证密码修改*************************************************//
//
//
function modstudent()
{
	//设置出生日期非空验证
	var phe= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var bir=form1.bir.value;
	if(bir==''||bir.length==null)
	{
		alert('请输入出生日期！');
		form1.bir.focus();
		return false;
	}
	else if(!phe.test(bir))
	{
		alert('请输入正确的出生日期！');
		form1.bir.focus();
		return false;
	}
	//设置身份证号码非空验证
	var phe= /^([0-9]{18}||[0-9]{17}[Xx]{1})$/;
	var card=form1.card.value;
	if(card==''||card.length==null)
	{
		alert('请输入身份证号！');
		form1.card.focus();
		return false;
	}
	else if(!phe.test(card))
	{
		alert('请输入正确的身份证号！');
		form1.card.focus();
		return false;
	}
	//设置年龄非空验证
	var phe= /^([0-9]{2})$/;
	var age=form1.age.value;
	if(age==''||age.length==null)
	{
		alert('请输入年龄！');
		form1.age.focus();
		return false;
	}
	else if(!phe.test(age))
	{
		alert('请输入正确的年龄！');
		form1.age.focus();
		return false;
	}
	//设置民族非空验证
	if(form1.nation.value.length==''||form1.nation.value.length==null)
	{
		alert('请填民族！');
		form1.nation.focus();
		return false;
	}
	//设置班级非空验证
	if(form1.classid.value.length==''||form1.classid.value.length==null)
	{
		alert('请填班级！');
		form1.classid.focus();
		return false;
	}
	//设置宿舍非空验证
	var phe= /^([0-9]{3})$/;
	var dor=form1.dor.value;
	if(dor==''||dor.length==null)
	{
		alert('请输入宿舍！');
		form1.dor.focus();
		return false;
	}
	else if(!phe.test(dor))
	{
		alert('请输入正确的宿舍！');
		form1.dor.focus();
		return false;
	}
	//设置家长非空验证
	if(form1.father.value.length==''||form1.father.value.length==null)
	{
		alert('请填家长姓名！');
		form1.father.focus();
		return false;
	}
	//设置家庭住址非空验证
	if(form1.address.value.length==''||form1.address.value.length==null)
	{
		alert('请填家庭住址！');
		form1.address.focus();
		return false;
	}
	//电话验证
	var phe= /^(1[0-9]{10})$/;
	var phone=form1.phone.value;
	if(phone==''||phone.length==null)
	{
		alert('请输入手机号！');
		form1.phone.focus();
		return false;
	}
	else if(!phe.test(phone))
	{
		alert('请输入正确的手机号！');
		form1.phone.focus();
		return false;
	}
	//qq号
	var phe= /^([0-9]{6}||[0-9]{7}||[0-9]{8}||[0-9]{9}||[0-9]{10}||[0-9]{11})$/;
	var QQ=form1.QQ.value;
	if(!phe.test(QQ))
	{
		alert('请输入正确的QQ！');
		form1.QQ.focus();
		return false;
	}
	return true;
}
//
//
//
//*************************************验证添加成考信息*************************************************//
//
//
function addExamList()
{
	//年级非空验证
	if(form1.grade.value==''||form1.grade.value.length==null)
	{
		alert('请选择年级！');
		return false;
	}
	//班级非空验证
	if(form1.class_id.value==''||form1.class_id.value.length==null)
	{
		alert('请选择班级！');
		return false;
	}
	//学生姓名非空验证
	if(form1.bj_stuname.value==''||form1.bj_stuname.value.length==null)
	{
		alert('请选择学生姓名！');
		return false;
	}
	//离校时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var job_date=form1.at_date.value;
	if(job_date==''||job_date.length==null)
	{
		alert('请填写报名时间！');
		form1.at_date.focus();
		return false;
	}
	else if(!date.test(job_date))
	{
		alert('请输入正确的时间格式！');
		form1.at_date.focus();
		return false;
	}
	//考试成绩非空验证
	if(form1.at_result.value==''||form1.at_result.value.length==null)
	{
		alert('请填写考试成绩！');
		form1.at_result.focus();
		return false;
	}
}
//
//
//
//*************************************验证修改成考信息*************************************************//
//
//
function modExamList()
{
	//离校时间非空验证
	var date= /^([0-9]{4}[/-]{1}[0-9]{2}[/-]{1}[0-9]{2})$/;
	var job_date=form1.at_date.value;
	if(job_date==''||job_date.length==null)
	{
		alert('请填写报名时间！');
		form1.at_date.focus();
		return false;
	}
	else if(!date.test(job_date))
	{
		alert('请输入正确的时间格式！');
		form1.at_date.focus();
		return false;
	}
	//考试成绩非空验证
	if(form1.at_result.value==''||form1.at_result.value.length==null)
	{
		alert('请填写考试成绩！');
		form1.at_result.focus();
		return false;
	}
	
}
//
//
//
//*************************************验证添加/修改角色*************************************************//
//
//
function base()
{
	//角色名非空验证
	if(form1.ro_name.value==''||form1.ro_name.value.length==null)
	{
		alert('请填写角色名！');
		form1.ro_name.focus();
		return false;
	}
}
//
//
//*************************************验证添加/修改班级*************************************************//
//
//
function classid()
{
	//年级非空验证
	if(form1.mr_grade.value==''||form1.mr_grade.value.length==null)
	{
		alert('请填写年级！');
		form1.mr_grade.focus();
		return false;
	}
	//班级非空验证
	if(form1.mr_classid.value==''||form1.mr_classid.value.length==null)
	{
		alert('请填写班级！');
		form1.mr_classid.focus();
		return false;
	}
	//辅导员非空验证
	if(form1.mr_coach.value==''||form1.mr_coach.value.length==null)
	{
		alert('请填写辅导员！');
		form1.mr_coach.focus();
		return false;
	}
}

//
//*************************************验证添加/修改模块*************************************************//
//
//
function menu()
{
	//中文名称非空验证
	if(form1.m_name.value==''||form1.m_name.value.length==null)
	{
		alert('请填写中文名称！');
		form1.m_name.focus();
		return false;
	}
}
