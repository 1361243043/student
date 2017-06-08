-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 12 日 07:27
-- 服务器版本: 5.1.41
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `student`
--

-- --------------------------------------------------------

--
-- 表的结构 `spr_after_job`
--

CREATE TABLE IF NOT EXISTS `spr_after_job` (
  `aj_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `aj_student_name` int(8) NOT NULL COMMENT '姓名',
  `aj_class_id` int(6) NOT NULL COMMENT '原所在班级',
  `aj_job_company` varchar(60) NOT NULL COMMENT '单位名称',
  `aj_post` varchar(20) NOT NULL COMMENT '职位',
  `aj_job_date` date NOT NULL COMMENT '工作日期',
  `aj_jobcity` varchar(10) NOT NULL COMMENT '就业城市',
  `aj_student_phone` varchar(12) NOT NULL COMMENT '手机号',
  `aj_job_pay` varchar(100) NOT NULL COMMENT '待遇',
  `aj_my_address` varchar(100) NOT NULL COMMENT '个人住址',
  `aj_address` varchar(100) NOT NULL COMMENT '公司地址',
  `aj_company_show` text NOT NULL COMMENT '公司简介',
  PRIMARY KEY (`aj_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `spr_after_job`
--

INSERT INTO `spr_after_job` (`aj_id`, `aj_student_name`, `aj_class_id`, `aj_job_company`, `aj_post`, `aj_job_date`, `aj_jobcity`, `aj_student_phone`, `aj_job_pay`, `aj_my_address`, `aj_address`, `aj_company_show`) VALUES
(5, 1, 5, '北京', '程序员', '0000-00-00', '北京', '13864366783', '12222', '莱芜', '北京', '多发点'),
(3, 2, 3, '北京信息科技公司', '技术主管', '0000-00-00', '上海', '15263450648', '5000', '莱芜', '北京', '好'),
(6, 2, 5, '北京', '第三方', '0000-00-00', '上海', '13876878783', '232', '来', '爱上', '待疯'),
(7, 1, 5, '待疯', '待疯', '2013-06-19', '北京', '13565748739', '343', '待疯', '爱国', '爱人'),
(8, 1, 5, '待疯', '待疯', '2013-06-19', '北京', '13565748739', '343', '待疯', '爱国', '爱人');

-- --------------------------------------------------------

--
-- 表的结构 `spr_before_job`
--

CREATE TABLE IF NOT EXISTS `spr_before_job` (
  `bj_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `bj_studentid` int(11) NOT NULL COMMENT '学生编号',
  `bj_mul_result` varchar(10) NOT NULL COMMENT '综合成绩',
  `bj_jobcity` varchar(30) NOT NULL COMMENT '就业城市',
  `bj_lead_teacher` int(5) NOT NULL COMMENT '带队老师',
  `bj_date` date NOT NULL COMMENT '离校日期',
  `bj_is_sure` varchar(10) NOT NULL COMMENT '校长是否确认',
  `bj_daily_show` varchar(200) NOT NULL COMMENT '日常表现',
  PRIMARY KEY (`bj_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `spr_before_job`
--

INSERT INTO `spr_before_job` (`bj_id`, `bj_studentid`, `bj_mul_result`, `bj_jobcity`, `bj_lead_teacher`, `bj_date`, `bj_is_sure`, `bj_daily_show`) VALUES
(13, 2, '良好', '上海', 3, '2013-06-12', '是', ''),
(14, 1, '优秀', '北京', 1, '2013-06-12', '是', ''),
(9, 3, '不合格', '上海', 3, '2013-06-12', '是', '很好');

-- --------------------------------------------------------

--
-- 表的结构 `spr_charge`
--

CREATE TABLE IF NOT EXISTS `spr_charge` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `ch_type` int(4) NOT NULL COMMENT '收费类型',
  `ch_must_money` int(6) NOT NULL COMMENT '应缴金额',
  `ch_real_money` int(6) NOT NULL COMMENT '已交金额',
  `ch_debt_money` int(6) NOT NULL COMMENT '欠款金额',
  `ch_student_id` int(11) NOT NULL COMMENT '学生编号',
  `ch_isverify` varchar(12) NOT NULL COMMENT '是否审核',
  `ch_end_date` date DEFAULT NULL COMMENT '截止缴费日期',
  `add_name` varchar(10) DEFAULT NULL COMMENT '收费人',
  `add_date` date DEFAULT NULL COMMENT '收费日期',
  `ch_remarks` varchar(100) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`ch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `spr_charge`
--

INSERT INTO `spr_charge` (`ch_id`, `ch_type`, `ch_must_money`, `ch_real_money`, `ch_debt_money`, `ch_student_id`, `ch_isverify`, `ch_end_date`, `add_name`, `add_date`, `ch_remarks`) VALUES
(1, 1, 11000, 10000, 1000, 1, '是', '2013-06-05', '万书凯', '2013-06-13', 'okok忐忑'),
(2, 1, 26800, 26800, 0, 3, '是', '2013-06-05', '万淑凯', '2013-06-19', '是'),
(3, 1, 11000, 0, 11000, 2, '是', '2013-06-04', '万淑凯', '2013-06-19', '是'),
(6, 1, 11000, 11000, 0, 5, '', '2013-06-11', '毛', '2013-06-11', '嗯');

-- --------------------------------------------------------

--
-- 表的结构 `spr_ck`
--

CREATE TABLE IF NOT EXISTS `spr_ck` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `at_type` int(11) NOT NULL COMMENT '学生编号',
  `at_date` date NOT NULL COMMENT '报名日期',
  `at_result` int(4) NOT NULL COMMENT '成绩',
  `at_issign` varchar(10) NOT NULL COMMENT '是否报名',
  `at_ispass` varchar(10) NOT NULL COMMENT '是否通过',
  PRIMARY KEY (`at_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `spr_ck`
--

INSERT INTO `spr_ck` (`at_id`, `at_type`, `at_date`, `at_result`, `at_issign`, `at_ispass`) VALUES
(1, 2, '0000-00-00', 10001, '报名', '通过'),
(2, 4, '2013-06-10', 10, '报名', '未通过'),
(3, 1, '0000-00-00', 111, '报名', '通过');

-- --------------------------------------------------------

--
-- 表的结构 `spr_class`
--

CREATE TABLE IF NOT EXISTS `spr_class` (
  `mr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `mr_classid` varchar(20) NOT NULL COMMENT '班级名称',
  `mr_grade` varchar(10) NOT NULL COMMENT '年级',
  `mr_coach` int(8) NOT NULL COMMENT '辅导员',
  PRIMARY KEY (`mr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `spr_class`
--

INSERT INTO `spr_class` (`mr_id`, `mr_classid`, `mr_grade`, `mr_coach`) VALUES
(2, '12级php2班', '2012级', 3),
(3, '12级java班', '2012级', 5),
(4, '12级php3班', '2012级', 1),
(5, '12级美工一班', '2012级', 2),
(6, '12级美工2 班', '2012级', 1),
(7, '12级美工三班', '2012级', 1),
(8, '11级php一班', '2011级', 1),
(9, '11级php二班', '2011级', 1),
(10, '11级美工一班', '2011级', 1),
(11, '11级美工二班', '2011级', 7),
(12, '13级预科班', '2013级', 7);

-- --------------------------------------------------------

--
-- 表的结构 `spr_menu`
--

CREATE TABLE IF NOT EXISTS `spr_menu` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `m_name` varchar(20) NOT NULL COMMENT '中文名称',
  `m_href` varchar(100) NOT NULL COMMENT '导航链接',
  `f_id` int(6) NOT NULL COMMENT '父级导航编号',
  `m_grade` int(4) DEFAULT NULL COMMENT '优先级',
  `is_mark` int(2) DEFAULT NULL COMMENT '标识',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `spr_menu`
--

INSERT INTO `spr_menu` (`m_id`, `m_name`, `m_href`, `f_id`, `m_grade`, `is_mark`) VALUES
(20, '费用收缴', '', 0, 1, 1),
(21, '收费管理', 'money.php', 20, 1, 1),
(16, '学生信息', '', 0, 1, 1),
(17, '学生管理', 'student.php', 16, 1, 1),
(18, '模块信息', '', 0, 1, 1),
(19, '模块管理', 'menu.php', 18, 1, 1),
(22, '费用类型管理', 'moneyList.php', 20, 1, 1),
(23, '成考信息', '', 0, 1, 1),
(24, '成考信息管理', 'examsList.php', 23, 1, 1),
(26, '就业', '', 0, 1, 1),
(27, '就业前信息管理', 'studentintofront.php', 26, 1, 1),
(28, '就业后信息管理', 'stuAfterJob.php', 26, 1, 1),
(29, '用户管理', '', 0, 1, 1),
(30, '角色管理', 'base.php', 29, 1, 1),
(47, '学生信息添加', 'studentAdd.php', 16, 1, 0),
(32, '用户维护', 'stuInfoManage.php', 29, 1, 1),
(33, '系统维护', '', 0, 1, 1),
(34, '班级管理', 'class.php', 33, 1, 1),
(41, '收费管理添加', 'addmoney.php', 20, 1, 0),
(35, '就业前信息添加', 'studfrontadd.php', 26, 1, 0),
(36, '就业前信息修改', 'studfrontedit.php', 26, 1, 0),
(37, '就业前信息删除', 'delstudentintofront.php', 26, 1, 0),
(38, '班级添加', 'Addclass.php', 33, 1, 0),
(39, '班级修改', 'Editclass.php', 33, 1, 0),
(40, '班级删除', 'delclass.php', 33, 1, 0),
(42, '收费管理修改', 'editmoney.php', 20, 1, 0),
(43, '收费管理删除', 'delmoney.php', 20, 1, 0),
(44, '费用类型添加', 'moneyListadd.php', 20, 1, 0),
(45, '费用类型修改', 'moneyListUp.php', 20, 1, 0),
(46, '费用类型删除', 'delmoneylist.php', 20, 1, 0),
(48, '学生信息修改', 'studentUp.php', 16, 1, 0),
(49, '学生信息删除', 'delstudent.php', 16, 1, 0),
(50, '成考信息添加', 'addExamsList.php', 23, 1, 0),
(51, '成考信息修改', 'modExamsList.php', 23, 1, 0),
(52, '成考信息删除', 'delExamsList.php', 23, 1, 0),
(53, '就业后信息添加', 'addStuAfterJob.php', 26, 1, 0),
(54, '就业后信息修改', 'updStudAfterJob.php', 26, 1, 0),
(55, '就业后信息删除', 'delStuAfterJob.php', 26, 1, 0),
(56, '用户维护添加', 'stuInfoAdd.php', 29, 1, 0),
(57, '用户维护修改', 'stuInfoEdit.php', 29, 1, 0),
(58, '用户维护删除', 'delstuInfoManage.php', 29, 1, 0),
(59, '模块信息添加', 'addmenu.php', 18, 1, 0),
(60, '模块信息修改', 'Editmenu.php', 18, 1, 0),
(61, '模块信息删除', 'delMenu.php', 18, 1, 0),
(62, '角色管理添加', 'addBase.php', 29, 1, 0),
(63, '角色管理修改', 'modBase.php', 29, 1, 0),
(64, '角色管理删除', 'delbase.php', 29, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `spr_role`
--

CREATE TABLE IF NOT EXISTS `spr_role` (
  `ro_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `ro_name` varchar(20) NOT NULL COMMENT '名称',
  `ro_power` varchar(255) DEFAULT NULL COMMENT '权限',
  PRIMARY KEY (`ro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `spr_role`
--

INSERT INTO `spr_role` (`ro_id`, `ro_name`, `ro_power`) VALUES
(22, '校长', '21,22,41,42,43,44,45,46,17,47,48,49,19,59,60,61,24,50,51,52,27,28,35,36,37,53,54,55,30,32,56,57,58,62,63,64,34,38,39,40'),
(25, 'PHP专业管理员', '21,22,41,42,43,49,60,61'),
(21, '辅导员', '17,47,48,49,24,50,51,52,27,28,35,36,37,53,54,55,34'),
(20, '财务', '21,22,41,42,43,44,45,46,17,24,27,28'),
(23, '学生', '17,48,24,27,28,34'),
(18, '一般老师', '17,24,27,28,34'),
(24, '管理员', '19,59,60,61,36,30,32,56,57,58,62,63,64,34,38,39,40');

-- --------------------------------------------------------

--
-- 表的结构 `spr_student`
--

CREATE TABLE IF NOT EXISTS `spr_student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学生编号',
  `s_name` varchar(10) NOT NULL COMMENT '学生姓名',
  `s_pwd` varchar(16) NOT NULL COMMENT '登录密码',
  `s_age` int(3) NOT NULL COMMENT '年龄',
  `s_card` varchar(19) NOT NULL COMMENT '身份证',
  `s_birthday` date NOT NULL COMMENT '出生日期',
  `s_address` varchar(60) NOT NULL COMMENT '住址',
  `s_class` int(4) NOT NULL COMMENT '班级',
  `s_dormitory` varchar(6) NOT NULL COMMENT '宿舍',
  `s_phone` varchar(13) NOT NULL COMMENT '手机号',
  `s_nation` varchar(6) NOT NULL COMMENT '民族',
  `s_father` varchar(10) NOT NULL COMMENT '家长姓名',
  `s_father_phone` varchar(13) DEFAULT NULL COMMENT '家长电话',
  `s_schooltimes` date DEFAULT NULL COMMENT '入学时间',
  `s_sex` varchar(4) NOT NULL COMMENT '性别',
  `s_qq` varchar(12) DEFAULT NULL COMMENT 'QQ号码',
  `s_head` varchar(50) DEFAULT NULL COMMENT '学生头像',
  `is_atschool` varchar(10) DEFAULT NULL COMMENT '是否在校',
  `is_role` int(4) DEFAULT NULL COMMENT '角色',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `spr_student`
--

INSERT INTO `spr_student` (`s_id`, `s_name`, `s_pwd`, `s_age`, `s_card`, `s_birthday`, `s_address`, `s_class`, `s_dormitory`, `s_phone`, `s_nation`, `s_father`, `s_father_phone`, `s_schooltimes`, `s_sex`, `s_qq`, `s_head`, `is_atschool`, `is_role`) VALUES
(1, '毛文强', '123456', 20, '371202199308323332', '1993-08-04', '中国雪野', 5, '604', '15263450648', '汉', '毛', '13863455921', '2012-07-01', '男', '304653089', '1371729197.gif', '是', 23);

-- --------------------------------------------------------

--
-- 表的结构 `spr_teacher`
--

CREATE TABLE IF NOT EXISTS `spr_teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '老师编号',
  `t_name` varchar(10) NOT NULL COMMENT '老师姓名',
  `t_pwd` varchar(16) NOT NULL COMMENT '登录密码',
  `t_age` int(3) NOT NULL COMMENT '年龄',
  `t_card` varchar(21) NOT NULL COMMENT '身份证',
  `t_birthday` date NOT NULL COMMENT '出生日期',
  `t_address` varchar(60) NOT NULL COMMENT '家庭住址',
  `t_phone` varchar(12) NOT NULL COMMENT '手机号',
  `t_nation` varchar(6) NOT NULL COMMENT '民族',
  `t_role` int(8) NOT NULL COMMENT '角色',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `spr_teacher`
--

INSERT INTO `spr_teacher` (`t_id`, `t_name`, `t_pwd`, `t_age`, `t_card`, `t_birthday`, `t_address`, `t_phone`, `t_nation`, `t_role`) VALUES
(1, 'admin', '123456', 40, '371209877309089773', '1973-06-21', '山东莱芜', '13897653728', '汉族', 22),
(2, '毛文强', '123456', 45, '371204277896939772', '1968-06-29', '山东泰安', '17686379834', '汉族', 22),
(3, '刘鹏', '123456', 35, '371206733897940992', '1978-06-25', '山东泰安', '15287938743', '汉族', 18);

-- --------------------------------------------------------

--
-- 表的结构 `spr_xf_sort`
--

CREATE TABLE IF NOT EXISTS `spr_xf_sort` (
  `te_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学费编号',
  `te_type` varchar(50) NOT NULL COMMENT '学费类型名称',
  `te_money` int(6) NOT NULL COMMENT '收费金额',
  `te_date_begin` date NOT NULL COMMENT '收费开始时间',
  `te_date_end` date NOT NULL COMMENT '收费结束时间',
  PRIMARY KEY (`te_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `spr_xf_sort`
--

INSERT INTO `spr_xf_sort` (`te_id`, `te_type`, `te_money`, `te_date_begin`, `te_date_end`) VALUES
(1, '第一季度', 11000, '2012-07-01', '2012-09-01'),
(6, '第二季度', 11000, '2013-06-13', '2013-06-17'),
(3, '学历费', 4800, '2013-06-01', '2013-06-09');

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(2) NOT NULL,
  `sum` int(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`id`, `sum`) VALUES
(1, 1097633),
(2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
