-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-09 02:50:27
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kexie`
--

-- --------------------------------------------------------

--
-- 表的结构 `rs_active`
--

CREATE TABLE `rs_active` (
  `id` int(11) NOT NULL,
  `act_user` varchar(30) NOT NULL COMMENT '申请者ID',
  `act_title` varchar(100) NOT NULL COMMENT '活动标题',
  `act_unit` varchar(50) NOT NULL COMMENT '活动组织单位',
  `act_time` varchar(30) NOT NULL COMMENT '活动时间',
  `phone` varchar(30) NOT NULL COMMENT '组织人电话',
  `place` varchar(100) NOT NULL COMMENT '活动地点',
  `content` longtext NOT NULL COMMENT '活动内容',
  `state` int(11) NOT NULL COMMENT '审批状态',
  `act_reson` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rs_inform`
--

CREATE TABLE `rs_inform` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '通知标题',
  `content` longtext NOT NULL,
  `chit` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rs_inform`
--

INSERT INTO `rs_inform` (`id`, `title`, `content`, `chit`, `date`) VALUES
(1, '测试', '<p>仅测试用！！！！</p>', 0, '2017年05月22日');

-- --------------------------------------------------------

--
-- 表的结构 `rs_user`
--

CREATE TABLE `rs_user` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL COMMENT '账号',
  `pwd` varchar(100) NOT NULL COMMENT '密码',
  `status` int(11) NOT NULL COMMENT '用户类型',
  `unit` varchar(50) DEFAULT NULL COMMENT '单位名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rs_user`
--

INSERT INTO `rs_user` (`id`, `user`, `pwd`, `status`, `unit`) VALUES
(1, 'root', '63a9f0ea7bb98050796b649e85481845', 0, '山东建筑大学'),
(2, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 1, '软件152'),
(103, '201511104001', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(104, '201511104002', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(105, '201511104003', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(106, '201511104004', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(107, '201511104005', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(108, '201511104006', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(109, '201511104007', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(110, '201511104008', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(111, '201511104009', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(112, '201511104010', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(113, '201511104011', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(114, '201511104012', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(115, '201511104013', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(116, '201511104014', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(117, '201511104015', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(118, '201511104016', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(119, '201511104017', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(120, '201511104018', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(121, '201511104019', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(122, '201511104020', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(123, '201511104021', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(124, '201511104022', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(125, '201511104023', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(126, '201511104024', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(127, '201511104025', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(128, '201511104026', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(129, '201511104027', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(130, '201511104028', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(131, '201511104029', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(132, '201511104030', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(133, '201511104031', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(134, '201511104032', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(135, '201511104033', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(136, '201511104034', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(137, '201511104035', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(138, '201511104036', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(139, '201511104037', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(140, '201511104038', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(141, '201511104039', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(142, '201511104040', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(143, '201511104041', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(144, '201511104042', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(145, '201511104043', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(146, '201511104044', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(147, '201511104045', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(148, '201511104046', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(149, '201511104047', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(150, '201511104048', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(151, '201511104049', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(152, '201511104050', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(153, '201511104051', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(154, '201511104052', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(155, '201511104053', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(156, '201511104054', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(157, '201511104055', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(158, '201511104056', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(159, '201511104057', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(160, '201511104058', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(161, '201511104059', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(162, '201511104060', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(163, '201511104061', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(164, '201511104062', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(165, '201511104063', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(166, '201511104064', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(167, '201511104065', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(168, '201511104066', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(169, '201511104067', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(170, '201511104068', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(171, '201511104069', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(172, '201511104070', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(173, '201511104071', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(174, '201511104072', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(175, '201511104073', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(176, '201511104074', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(177, '201511104075', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(178, '201511104076', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(179, '201511104077', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(180, '201511104078', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(181, '201511104079', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(182, '201511104080', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(183, '201511104081', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(184, '201511104082', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(185, '201511104083', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(186, '201511104084', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(187, '201511104085', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(188, '201511104086', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(189, '201511104087', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(190, '201511104088', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(191, '201511104089', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(192, '201511104090', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(193, '201511104091', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(194, '201511104092', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(195, '201511104093', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(196, '201511104094', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(197, '201511104095', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(198, '201511104096', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(199, '201511104097', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(200, '201511104098', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学'),
(201, '201511104099', 'e10adc3949ba59abbe56e057f20f883e', 1, '山东建筑大学');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rs_active`
--
ALTER TABLE `rs_active`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rs_inform`
--
ALTER TABLE `rs_inform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rs_user`
--
ALTER TABLE `rs_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `rs_active`
--
ALTER TABLE `rs_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `rs_inform`
--
ALTER TABLE `rs_inform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `rs_user`
--
ALTER TABLE `rs_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
