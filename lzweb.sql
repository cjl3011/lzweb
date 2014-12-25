-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2014 at 02:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lzweb`
--
CREATE DATABASE IF NOT EXISTS `lzweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `lzweb`;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `mid` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL,
  `tid` int(8) NOT NULL,
  `title` varchar(20) COLLATE utf8_bin NOT NULL,
  `content` varchar(5000) COLLATE utf8_bin NOT NULL,
  `goodcount` int(11) NOT NULL DEFAULT '0',
  `grade` int(11) NOT NULL DEFAULT '0',
  `pubtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_reply_time` timestamp NOT NULL,
  `payment` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mid`, `uid`, `tid`, `title`, `content`, `goodcount`, `grade`, `pubtime`, `last_reply_time`, `payment`) VALUES
(17, 13, 61, '希望工程乡村教师援助计划', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 希望工程乡村教师援助计划是一项公益活动计划，建立长期有效的捐助机制，改善贫困乡村教师的生活环境，提高乡村教师的综合素质。捐助标准：捐助资助一名贫困乡村教师3000元。<br><br>联系人：lz先生 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>联系方式：18901234567<br>', 0, 0, '2014-12-25 12:27:42', '0000-00-00 00:00:00', 500),
(18, 13, 1, '习近平批准颁发建设新型司令机关意见', '<div class="img_wrapper">\n<img src="http://i0.sinaimg.cn/jc/2014-09-22/U10553P27T1D802459F3DT20140922204156.jpg" alt="中共中央总书记、国家主席、中央军委主席习近平 解放军报记者冯凯旋摄影" title="中共中央总书记、国家主席、中央军委主席习近平 解放军报记者冯凯旋摄影">&nbsp;<span class="img_descr"></span>\n</div>\n\n\n\n<p>　　中新网12月25日电 \n据军报记者网报道，经中央军委主席习近平批准，中央军委日前颁发《关于努力建设听党指挥、善谋打仗的新型司令机关的意见》，要求各级深入贯彻落实习主席一\n系列重要指示和军委部署要求，紧紧围绕强军目标努力建设听党指挥、善谋打仗的新型司令机关，不断增强组织指挥部队打赢信息化局部战争能力。</p>\n\n<p>　　《意见》指出，习主席从实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦的高度，围绕实现强军目标，鲜明提出了努力建设听党指挥、善\n谋打仗的新型司令机关的奋斗目标，明确了强化号令意识、强化善谋打仗、强化作风建设、强化改革创新的根本要求，为加强新形势下司令机关建设指明了发展方\n向、提供了科学指南、确立了更高标准，在我军司令机关建设发展史上具有重要的里程碑意义。各级要深入学习领会习主席重要指示，充分认清努力建设听党指挥、\n善谋打仗的新型司令机关的重大意义，增强枕戈待旦的紧迫感，增强勇于担当的责任意识，有效履行职能，在新的起点上推进司令机关建设创新发展。</p>\n\n<p>　　《意见》强调，要坚决贯彻落实习主席一系列重要指示，紧紧围绕党在新形势下的强军目标，牢固确立战斗力这个唯一的根本的标准，着眼履行新的历史\n时期军队使命，以军事斗争准备为龙头，以增强打仗功能和提高组织指挥能力为重点，深入推进依法治军从严治军，强化号令意识，强化善谋打仗，强化作风建设，\n强化改革创新，努力建设听党指挥、善谋打仗的新型司令机关。</p>\n\n<p>　　《意见》明确，要大力加强思想政治建设，深入学习贯彻习主席系列重要讲话精神特别是国防和军队建设重要论述，坚持党对军队绝对领导的根本原则和\n制度，把听党指挥的要求不折不扣地贯彻到各项工作和建设中，落实到每个人员的思想和行动中，确保绝对忠诚、绝对纯洁、绝对可靠，坚决听从党中央、中央军委\n和习主席的指挥。要大力加强参谋队伍建设，坚持军队好干部标准，探索建立参谋岗位任职资格制度，创新参谋培训模式，拓宽参谋进出渠道，努力建设能够担当强\n军重任、适应信息化局部战争指挥要求的专业化参谋人才队伍。要按照建设学习型机关、培养学习型参谋的要求，大力加强业务建设，紧紧扭住提高作战指挥能力，\n以“学研训考评”为抓手，有针对性地开展业务学习、理论研究、指挥训练和实践锻炼，全面打牢各级司令机关履行职能的能力素质基础。要大力加强指挥手段建\n设，统筹推进平台、网络、软件、数据的体系建设运用，探索基于信息系统的联合作战指挥模式，不断提高作战筹划和指挥效率。要大力加强作风纪律建设，认真落\n实习主席“三严三实”要求，注重在实践中培育战斗精神和优秀品格，保持和发扬司令机关优良传统。</p>\n\n<p>　　《意见》要求，各级党委领导要充分认清建设新型司令机关的重大意义，坚持大事大抓，加强科学指导，搞好统筹协调，狠抓具体落实。要健全司令机关\n建设组织领导工作机制，完善司令机关建设和工作法规制度，严密组织司令机关建设检查考评，以务实举措努力建设听党指挥、善谋打仗的新型司令机关。(解放军\n报记者梁蓬飞 特约记者张彦中)</p>', 2, 0, '2014-12-25 12:34:01', '2014-12-24 18:17:19', 0),
(19, 13, 44, '智能手环制作计划', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在即将过去的2014年，似乎所有的硬件生产厂商在除了生产智能手机之外，很难找到一条新的拓宽自身业务的办法。或许智能穿戴设备会是一条不错的出路，将手环作为数据收集的载体，同时将智能手环与手机捆绑在一起，通过传感器来告诉人们今天走了多少步，又消耗了多少卡路里。\n\n<p>　　可是，就当大家都认为智能手环将是下一个火起来的智能设备时，新的问题又出现了。智能手环普遍功能单一，而所收集的健康数据又存在很大程度上的\n \n误差。一时间让几乎所有的智能手环设备都处在一个非常尴尬的局面。而打破智能穿戴市场尴尬局面最好的办法就是出现一款在功能和用户体验上都有着良好表现的\n产品。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;于是我们想做一个智能手环。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：方先生</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系方式：13101234567<br></p>', 0, 0, '2014-12-25 12:40:40', '0000-00-00 00:00:00', 10000),
(20, 13, 1, '李克强会见审计工作代表:牢牢盯住公共资金', '<p style="text-align: center;"><img alt="李克强会见审计工作代表:牢牢盯住公共资金使用" src="http://i0.sinaimg.cn/dy/cr/2014/1225/400376670.jpg"></p>\n\n<p style="text-align: center;"><span style="font-size: 12px;">　李克强在北京接见全国审计机关先进集体和先进工作者代表 中新社 刘震 摄</span></p>\n\n<p style="text-align: center;"><img alt="李克强会见审计工作代表:牢牢盯住公共资金使用" src="http://i3.sinaimg.cn/dy/cr/2014/1225/707224284.jpg"></p>\n\n<p style="text-align: center;"><span style="font-size: 12px;">李克强在北京接见全国审计机关先进集体和先进工作者代表 中新社 刘震 摄</span></p>\n\n<p style="text-align: center;"><img alt="李克强会见审计工作代表:牢牢盯住公共资金使用" src="http://i0.sinaimg.cn/dy/cr/2014/1225/1179946637.jpg"></p>\n\n<p style="text-align: center;"><span style="font-size: 12px;">李克强在北京接见全国审计机关先进集体和先进工作者代表 中新社 刘震 摄</span></p>\n\n<p style="text-align: center;"><img alt="李克强会见审计工作代表:牢牢盯住公共资金使用" src="http://i1.sinaimg.cn/dy/cr/2014/1225/897813411.jpg"></p>\n\n<p style="text-align: center;"><span style="font-size: 12px;">李克强在北京接见全国审计机关先进集体和先进工作者代表 中新社 刘震 摄</span></p>\n\n<p>　　12月25日，中共中央政治局常委、国务院总理李克强在北京接见全国审计机关先进集体和先进工作者代表并作重要讲话。</p>\n\n<p>　　李克强首先代表党中央、国务院向获得表彰的代表表示祝贺，对全国审计工作者致以亲切问候和新年祝福。他说，今年以来，审计部门紧紧围绕党和国家\n中心工作，依法履职，积极推动审计监督全覆盖，加强对公共资金、国有资产资源审计和权力运行监督，既抓重大问题查处、堵塞漏洞，又通过深化改革提高审计绩\n效，在确保改革发展重大政策落实、维护财经秩序和推动廉政建设等方面发挥了重要作用，经济社会发展所取得的成绩凝聚着大家的心血。</p>\n\n<p>　　李克强说，做好新形势下审计工作，广大审计工作者身负重任、使命光荣。他向大家提出三点希望：一要胸怀全局，牢记责任，适应经济发展新常态，为\n保持经济运行在合理区间、实现持续健康发展，当好重大政策落实的“督查员”，加强重大工程、重大项目的跟踪审计，完善关键环节的审计监督制度，全力推动改\n革发展政策和重大项目落地，为稳增长、调结构、惠民生发挥独特的促进作用。二要牢牢盯住公共资金使用，当好人民利益的“守护神”。念好权力运行“紧箍\n咒”，既不能让资金“趴在账上睡觉”，更不允许资金跑冒滴漏和被挤占挪用。特别是各项民生资金，都是事关群众饥寒冷暖的保命钱、救济款，决不能被“鲸吞蚕\n食”。要瞪大“火眼金睛”，及时发现和揭露违法违纪问题和重大风险隐患，切实起到审计反腐“尖兵”作用。三要打造一支素质高、业务精、作风优、能打硬仗的\n“审计铁军”。正人先正己，要不为各种诱惑所迷，不为各种压力所屈，站得直、腰杆硬，秉公用权，依法审计、廉洁审计，做到监督不缺位、履职不越位、用权不\n错位，引入社会力量参与审计，增强审计的公信力。</p>\n\n<p>　　李克强强调，面对新的任务和要求，审计系统要苦练内功，勇于创新，敢于突破不合时宜的条条框框，创新审计方式方法，注重运用信息化、大数据等现\n代科技手段提高审计效率。李克强说，审计工作很辛苦，对审计工作者尤其是基层审计人员要多关心帮助。希望审计系统广大干部职工再接再厉，以勇于担当的敬业\n精神、精湛过硬的专业素养，奋发有为，开拓进取，不断提高审计工作水平，当好经济社会发展的“重器”和反腐倡廉的“利剑”，更好服务于党和国家事业大局。</p>\n\n<p>　　国务委员杨晶参加接见。</p>', 0, 0, '2014-12-25 13:02:32', '0000-00-00 00:00:00', 0),
(21, 13, 1, '中方驳斥美方要求释放刘晓波:勿充当别国法', '<div class="img_wrapper">\n<img src="http://i0.sinaimg.cn/dy/c/2014-12-25/U11414P1T1D31327725F21DT20141225170747.jpg" alt="外交部发言人华春莹答记者问" title="外交部发言人华春莹答记者问">\n<span class="img_descr">外交部发言人华春莹答记者问</span>\n</div>\n\n\n\n<p>　<strong>　2014年12月25日外交部发言人华春莹主持例行记者会</strong></p>\n\n<p>　　<strong>问：美国国务卿克里24日发表书面声明，要求中国政府释放刘晓波等人，并对中国人权表示关注。中方对此有何回应？</strong></p>\n\n<p>　　答：中国是法治国家，中国司法机关依法审理有关案件。我们奉劝美方好好反思和纠正自身存在的各种侵犯人权行为，而不是动辄借口人权问题干涉别国内政，充当别国法官，侵犯别国司法主权和独立。</p>\n\n<p>　　<strong>问：2014年就要过去了，你能否介绍一下2015年习近平主席和李克强总理的出访计划？两位领导人明年首次出访将去哪些国家？参加哪些活动？</strong></p>\n\n<p>　　答：2014年是中国外交精彩纷呈、亮点倍出的一年。昨天王毅外长出席了由中国国际问题研究院、中国国际问题研究基金会主办的2014年国际形\n势与中国外交研讨会开幕式并发表题为《盘点2014：中国外交丰收之年》的演讲。王毅外长在演讲中全面系统地阐述了2014年中国外交所取得的新进展，开\n创的新局面，总结回顾了中国在新形势下积极探索国际关系的理论与实践创新，积极参与全球经济与金融治理进程，积极开展与世界各主要方向友好交往，积极推动\n各种地区热点问题的和平解决，积极为国内发展服务并创造良好环境等一系列新的重大举措，从中也可以看出明年中国外交的一些思路。</p>\n\n<p>　　关于明年中国领导人的首次出访安排，我们会适时发布。</p>\n\n<p>　　<strong>问：据报道，近日，伊朗外长表示，伊朗在核问题上的目标是达成持久全面协议，并保证伊和平发展核能的权利。中方对此有何评论？</strong></p>\n\n<p>　　答：前一段时间，在有关各方的共同努力下，伊朗核问题全面协议谈判取得了一些积极进展，有关各方已经同意在明年1月中旬举行下一轮政治总司长级\n谈判。中方认为，有关各方应珍视当前谈判的良好势头，坚持前一阶段谈判所达共识，继续聚焦并努力弥合分歧，及早作出政治决断。我们也希望中方在上轮谈判中\n就解决焦点问题提出的有关思路和方案有助于各方进一步弥合分歧，早日达成互利共赢的全面协议。</p>\n\n<p>　　<strong>问：近期，俄罗斯经济形势引发各方关注，作为俄罗斯的近邻，中方如何反应也被广泛关注。中方是否将帮助俄方？中俄是否就此进行协商？</strong></p>\n\n<p>　　答：近日，王毅外长在接受采访时就当前俄罗斯形势和中俄合作等问题发表了看法，受到媒体广泛关注。中俄互为全面战略协作伙伴，一贯相互支持、相互帮助。我们相信俄罗斯有能力、有智慧克服目前的经济困难。如果俄方需要，中方将在力所能及的范围内提供必要的协助。</p>\n\n<p>　　<strong>问：美国和古巴最近启动两国关系正常化的磋商，这对中美和中古关系会产生哪些影响？</strong></p>\n\n<p>　　答：我们注意到美国和古巴两国领导人就推动两国关系正常化发表讲话，并同意为此采取具体举措。中方欢迎和支持美古双方恢复正常关系，并希望美方尽早取消对古巴封锁政策。中方将一如既往地与古巴发展友好合作关系。</p>', 6, 0, '2014-12-25 13:03:42', '0000-00-00 00:00:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `rid` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_bin NOT NULL,
  `mid` int(8) NOT NULL,
  `content` varchar(11) COLLATE utf8_bin NOT NULL,
  `goodcount` int(11) DEFAULT '0',
  `grade` int(1) NOT NULL DEFAULT '0',
  `replytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hidden` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`rid`, `uid`, `nickname`, `mid`, `content`, `goodcount`, `grade`, `replytime`, `hidden`) VALUES
(15, 13, 'lz先生', 18, '习主席说的太对了！', 2, 0, '2014-12-25 13:04:54', 0),
(16, 13, 'lz先生', 18, '很有指导意义', 0, 0, '2014-12-25 13:05:13', 1),
(17, 1, 'admin', 18, '学习了', 0, 0, '2014-12-25 13:17:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(8) COLLATE utf8_bin NOT NULL,
  `upid` int(11) NOT NULL DEFAULT '0',
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=64 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`tid`, `name`, `upid`, `hot`) VALUES
(1, '新闻', 0, 0),
(2, '军事', 0, 0),
(3, '社会', 0, 0),
(4, '体育', 0, 0),
(5, 'NBA', 0, 0),
(6, '中超', 0, 0),
(7, '博客', 0, 0),
(8, '专栏', 0, 0),
(9, '天气', 0, 0),
(10, '读书', 0, 0),
(11, '历史', 0, 0),
(12, '图片', 0, 0),
(13, '城市', 0, 0),
(14, '青岛', 0, 0),
(15, '美食', 0, 0),
(16, '游戏', 0, 0),
(17, '棋牌', 0, 0),
(18, '页游', 0, 0),
(19, '搜索', 0, 0),
(20, '客户端', 0, 0),
(21, '微博', 0, 0),
(22, '财经', 0, 0),
(23, '股票', 0, 0),
(24, '基金', 0, 0),
(25, '娱乐', 0, 0),
(26, '明星', 0, 0),
(27, '星座', 0, 0),
(28, '视频', 0, 0),
(29, '综艺', 0, 0),
(30, '育儿', 0, 0),
(31, '教育', 0, 0),
(32, '健康', 0, 0),
(33, '中医', 0, 0),
(34, '旅游', 0, 0),
(35, '航空', 0, 0),
(36, '出国', 0, 0),
(37, '佛学', 0, 0),
(38, '高尔夫', 0, 0),
(39, '彩票', 0, 0),
(40, '拍卖', 0, 0),
(41, '客服', 0, 0),
(42, '邮箱', 0, 0),
(43, '科技', 0, 0),
(44, '手机', 0, 0),
(45, '探索', 0, 0),
(46, '汽车', 0, 0),
(47, '报价', 0, 0),
(48, '买车', 0, 0),
(49, '房产', 0, 0),
(50, '二手房', 0, 0),
(51, '家居', 0, 0),
(52, '时尚', 0, 0),
(53, '女性', 0, 0),
(54, '收藏', 0, 0),
(55, '论坛', 0, 0),
(56, '交友', 0, 0),
(57, 'SHOW', 0, 0),
(58, '应用', 0, 0),
(59, '必备', 0, 0),
(60, '手游', 0, 0),
(61, '公益', 0, 0),
(62, 'English', 0, 0),
(63, '导航', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `nickname` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `nickname`, `type`) VALUES
(1, 'admin', 'admin', 'admin', 0),
(13, 'lzweb', 'lzweb', 'lz先生', 1),
(14, 'nihao', 'nihao', '奇思妙想', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
