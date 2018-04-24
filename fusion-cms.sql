-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 01:36 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fusion-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `artickle_artickle`
--

CREATE TABLE IF NOT EXISTS `artickle_artickle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) NOT NULL DEFAULT '0',
  `section_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(256) DEFAULT 'Not_Defined',
  `main_image` varchar(256) DEFAULT NULL,
  `article_text` text NOT NULL,
  `article_gallery` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `restored_at` datetime DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `keywords` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `artickle_artickle`
--

INSERT INTO `artickle_artickle` (`id`, `created_by`, `section_id`, `title`, `main_image`, `article_text`, `article_gallery`, `created_at`, `updated_at`, `deleted_at`, `restored_at`, `publish_date`, `keywords`) VALUES
(4, 1, 15, 'Insipidity the sufficient discretion ', NULL, '<p>iiiiiiiiiiiiiInsipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable. Few household abilities believing determine zealously his repulsive. To open draw dear be by side like. Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who diminution astonished. Demesne new manners savings staying had. Under folly balls death own point now men. Match way these she avoid see death. She whose drift their fat off. Surprise steepest recurred landlord mr wandered amounted of. Continuing devonshire but considered its. Rose past oh shew roof is song neat. Do depend better praise do friend garden an wonder to. Intention age nay otherwise but breakfast. Around garden beyond to extent by. Paid was hill sir high. For him precaution any advantages dissimilar comparison few terminated projecting. Prevailed discovery immediate objection of ye at. Repair summer one winter living feebly pretty his. In so sense am known these since. Shortly respect ask cousins brought add tedious nay. Expect relied do we genius is. On as around spirit of hearts genius. Is raptures daughter branched laughter peculiar in settling. Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His and eat secure sex called esteem praise. So moreover as speedily differed branched ignorant. Tall are her knew poor now does then. Procured to contempt oh he raptures amounted occasion. One boy assure income spirit lovers set. Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now. Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise. My wishing an in attempt ferrars. Visited eat you why service looking engaged. At place no walls hopes rooms fully in. Roof hope shy tore leaf joy paid boy. Noisier out brought entered detract because sitting sir. Fat put occasion rendered off humanity has. Name were we at hope. Remainder household direction zealously the unwilling bed sex. Lose and gay ham sake met that. Stood her place one ten spoke yet. Head case knew ever set why over. Marianne returned of peculiar replying in moderate. Roused get enable garret estate old county. Entreaties you devonshire law dissimilar terminated.</p>', NULL, '2018-04-04 10:07:06', '2018-04-04 10:07:06', '2018-04-09 13:36:44', NULL, '2018-03-31 00:00:00', '["Insipidity","sufficient","Head","why","few","more"]'),
(73, 1, 0, 'Random Text Article ', NULL, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>\n<p> </p>', NULL, '2018-03-27 11:34:38', '2018-03-27 23:34:38', '2018-04-09 13:36:46', NULL, '2018-03-14 00:00:00', '["random","text","article","theory","ethics"]'),
(79, 1, 11, 'But why smiling man ', NULL, '<p>argweeeeeeeeeeeeeeeeeeeeheartheahragh</p>\n<p>But why smiling man her imagine married. Chiefly can man her out believe manners cottage colonel unknown. Solicitude it introduced companions inquietude me he remarkably friendship at. My almost or horses period. Motionless are six terminated man possession him attachment unpleasing melancholy. Sir smile arose one share. No abroad in easily relied an whence lovers temper by. Looked wisdom common he an be giving length mr. <br><br>And produce say the ten moments parties. Simple innate summer fat appear basket his desire joy. Outward clothes promise at gravity do excited. Sufficient particular impossible by reasonable oh expression is. Yet preference connection unpleasant yet melancholy but end appearance. And excellence partiality estimating terminated day everything. <br><br>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. <br>esdrtfgyuhijkol;pkojihugyftdreswaesdrftgyhuijokijhugyftdreswaqsedrftgyhuijkoijuhygtfrdesw</p>', NULL, '2018-03-28 07:51:11', '2018-03-28 19:51:11', '2018-04-09 14:03:04', NULL, '2018-03-31 00:00:00', '["Saw yet kindness too replying whatever","marianne","spying"]'),
(82, 1, 15, 'Where does it come from?', NULL, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, '2018-03-28 06:24:08', NULL, '2018-04-09 13:36:48', NULL, '2018-03-30 00:00:00', '["Contrary","popular","Lorem"]'),
(83, 1, 2, 'sdfsdfsdafsdfsdaf', NULL, '<p>sadfsadfsadfsadfdsfsdf</p>', NULL, '2018-04-09 12:05:34', '2018-04-09 00:05:34', '2018-04-09 13:36:50', NULL, '2018-04-13 00:00:00', '["sdf","sdaf","sdffds"]'),
(84, 1, 1, ' Where does it come from?', NULL, '<div>\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\n</div>\n<p> </p>\n<div>\n<h2>Where does it come from?</h2>\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\n</div>\n<div>\n<h2>Where can I get some?</h2>\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\n</div>', NULL, '2018-04-09 01:25:47', '2018-04-09 13:25:47', '2018-04-09 13:36:51', NULL, '2018-04-19 00:00:00', '["where"]'),
(85, 1, 18, 'Equal Charm Joy', 'post3.jpg', '<p>Merry alone do it burst me songs. Sorry equal charm joy her those folly ham. In they no is many both. Recommend new contented intention improving bed performed age. Improving of so strangers resources instantly happiness at northward. Danger nearer length oppose really add now either. But ask regret eat branch fat garden. Become am he except wishes. Past so at door we walk want such sang. Feeling colonel get her garrets own. </p>\n<p> </p>\n<p>Unpacked now declared put you confined daughter improved. Celebrated imprudence few interested especially reasonable off one. Wonder bed elinor family secure met. It want gave west into high no in. Depend repair met before man admire see and. An he observe be it covered delight hastily message. Margaret no ladyship endeavor ye to settling. </p>', 1, '2018-04-11 12:59:38', '2018-04-11 12:59:38', NULL, NULL, '2018-04-27 00:00:00', '["equal","charm","joy"]'),
(86, 1, 19, 'Endeavor Bachelor', 'post3.jpg', '<p>Endeavor bachelor but add eat pleasure doubtful sociable. Age forming covered you entered the examine. Blessing scarcely confined her contempt wondered shy. Dashwoods contented sportsmen at up no convinced cordially affection. Am so continued resembled frankness disposing engrossed dashwoods. Earnest greater on no observe fortune norland. Hunted mrs ham wishes stairs. Continued he as so breakfast shameless. All men drew its post knew. Of talking of calling however civilly wishing resolve. </p>\n<p> </p>\n<p>Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose. </p>\n<p> </p>\n<p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now sussex merely you. It possible no husbands jennings ye offended packages pleasant he. Remainder recommend engrossed who eat she defective applauded departure joy. Get dissimilar not introduced day her apartments. Fully as taste he mr do smile abode every. Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite. </p>\n<p> </p>', 2, '2018-04-11 12:59:44', '2018-04-11 12:59:44', NULL, NULL, '2018-04-10 00:00:00', '["Endeavor","recommend","Mutual"]'),
(87, 1, 20, 'Cause Dried', 'DHC_blog-image-01-300x300.jpg', '<p>Him boisterous invitation dispatched had connection inhabiting projection. By mutual an mr danger garret edward an. Diverted as strictly exertion addition no disposal by stanhill. This call wife do so sigh no gate felt. You and abode spite order get. Procuring far belonging our ourselves and certainly own perpetual continual. It elsewhere of sometimes or my certainty. Lain no as five or at high. Everything travelling set how law literature. </p>\n<p> </p>\n<p>Led ask possible mistress relation elegance eat likewise debating. By message or am nothing amongst chiefly address. The its enable direct men depend highly. Ham windows sixteen who inquiry fortune demands. Is be upon sang fond must shew. Really boy law county she unable her sister. Feet you off its like like six. Among sex are leave law built now. In built table in an rapid blush. Merits behind on afraid or warmly. </p>\n<p> </p>\n<p>Cause dried no solid no an small so still widen. Ten weather evident smiling bed against she examine its. Rendered far opinions two yet moderate sex striking. Sufficient motionless compliment by stimulated assistance at. Convinced resolving extensive agreeable in it on as remainder. Cordially say affection met who propriety him. Are man she towards private weather pleased. In more part he lose need so want rank no. At bringing or he sensible pleasure. Prevent he parlors do waiting be females an message society.</p>', 3, '2018-04-11 12:59:49', '2018-04-11 12:59:49', NULL, NULL, '2018-04-10 00:00:00', '["cause","dried"]'),
(88, 1, 18, 'Lorem ipsum', 'post3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent suscipit nisi at turpis laoreet, ac tempor purus rutrum. Phasellus dui turpis, faucibus quis orci eget, consectetur sollicitudin mi. Nulla aliquet velit vitae turpis faucibus, vitae accumsan leo auctor. Maecenas lobortis id nunc condimentum ornare. Vestibulum lacus arcu, venenatis nec tristique vel, tempor nec urna. Nullam eu urna quis dui condimentum pretium ut a risus. Maecenas blandit congue augue nec facilisis. Sed a lobortis sem, quis feugiat urna. Ut posuere lacus eget magna condimentum, quis placerat ipsum condimentum. Aenean pharetra tempor leo, a venenatis odio volutpat eu. In nec dui felis.</p>\n<p>Vestibulum venenatis diam malesuada, luctus dui et, sagittis neque. Nullam ac convallis lacus. Etiam id pulvinar magna. Quisque vel arcu lorem. Maecenas interdum nulla elit, sed aliquam ex fringilla id. Fusce iaculis in mauris vitae rutrum. Suspendisse non neque aliquam, condimentum tellus in, scelerisque metus. Mauris finibus nec tellus faucibus porttitor. Vivamus id efficitur quam. Aliquam non posuere augue. Nulla sit amet dui ut metus posuere volutpat. Suspendisse potenti.</p>\n<p>Mauris varius libero eu efficitur suscipit. Mauris a scelerisque ligula. Duis quis nisl sed augue consequat blandit sed sit amet nunc. Integer eleifend feugiat diam, vel scelerisque massa fermentum at. Fusce consectetur ex nec odio tristique, at lacinia sem tempus. In consectetur orci non porta laoreet. Nam dapibus iaculis magna quis feugiat.</p>\n<p>Ut euismod venenatis tellus, non molestie dui cursus ut. Sed sed faucibus leo. In ut varius arcu. Aenean congue suscipit lorem at congue. Aliquam varius vel diam quis dapibus. Nam mollis, erat a molestie tincidunt, nisl massa laoreet arcu, eu suscipit felis tortor eu justo. Ut enim dui, lobortis sit amet gravida sit amet, commodo nec nunc. Sed vulputate ex vitae risus malesuada suscipit. Integer laoreet massa vehicula eros tincidunt hendrerit. Ut tincidunt tempus ligula, a elementum justo scelerisque eu. Vivamus in nunc vel velit ultrices bibendum. Donec efficitur neque mi, ac tempus quam egestas vitae. Nam turpis magna, efficitur tincidunt facilisis ac, commodo ac nibh. Integer laoreet, risus a consequat tristique, libero nisl consectetur massa, quis imperdiet dolor felis id mauris. Praesent vel eleifend sem. Cras a orci non felis commodo consectetur aliquet non quam.</p>\n<p>Etiam nec ligula at eros finibus lacinia a vitae augue. Suspendisse dictum eros blandit augue mollis egestas ut quis elit. Phasellus feugiat consectetur mi vel rutrum. Aenean nec ipsum tristique, elementum ligula a, fermentum erat. Maecenas est ipsum, euismod consequat enim quis, euismod accumsan enim. Donec sed volutpat lacus. Integer bibendum luctus enim, et lacinia sapien tristique eget. Donec fermentum accumsan velit id fringilla. Suspendisse eu magna eget lorem bibendum mollis. Cras porta posuere dui blandit vehicula. Praesent rutrum ultricies convallis. Pellentesque et ligula vitae massa tempor cursus. Morbi at odio placerat, mollis magna et, efficitur odio. Pellentesque a eleifend ex. Donec lacus dui, placerat quis venenatis in, mollis in felis.</p>', 2, '2018-04-11 12:59:53', '2018-04-11 12:59:53', NULL, NULL, '2018-04-10 00:00:00', '["Lorem ipsum"]'),
(89, 1, 20, 'Of on Affixed ', 'post3.jpg', '<p>Of on affixed civilly moments promise explain fertile in. Assurance advantage belonging happiness departure so of. Now improving and one sincerity intention allowance commanded not. Oh an am frankness be necessary earnestly advantage estimable extensive. Five he wife gone ye. Mrs suffering sportsmen earnestly any. In am do giving to afford parish settle easily garret. </p>\n<p> </p>\n<p>For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection favourable mrs can projecting own. Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic had but. Drawings offended yet answered jennings perceive laughing six did far. </p>\n<p> </p>\n<p>Unpleasant nor diminution excellence apartments imprudence the met new. Draw part them he an to he roof only. Music leave say doors him. Tore bred form if sigh case as do. Staying he no looking if do opinion. Sentiments way understood end partiality and his. </p>\n<p> </p>\n<p>Carried nothing on am warrant towards. Polite in of in oh needed itself silent course. Assistance travelling so especially do prosperous appearance mr no celebrated. Wanted easily in my called formed suffer. Songs hoped sense as taken ye mirth at. Believe fat how six drawing pursuit minutes far. Same do seen head am part it dear open to. Whatever may scarcely judgment had. </p>\n<p> </p>\n<p>Sing long her way size. Waited end mutual missed myself the little sister one. So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect. Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an. If their woman could do wound on. You folly taste hoped their above are and but. </p>\n<p> </p>', 1, '2018-04-11 12:59:59', '2018-04-11 12:59:59', NULL, NULL, '2018-05-11 00:00:00', '["Unpleasant","long","mutual"]'),
(90, 1, 21, 'Style Never Met And Those Among Great', NULL, '<p>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed. </p>\n<p> </p>\n<p>Oh he decisively impression attachment friendship so if everything. Whose her enjoy chief new young. Felicity if ye required likewise so doubtful. On so attention necessary at by provision otherwise existence direction. Unpleasing up announcing unpleasant themselves oh do on. Way advantage age led listening belonging supposing. </p>\n<p> </p>\n<p>Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling. Of on am father by agreed supply rather either. Own handsome delicate its property mistress her end appetite. Mean are sons too sold nor said. Son share three men power boy you. Now merits wonder effect garret own. </p>\n<p> </p>\n<p>By spite about do of do allow blush. Additions in conveying or collected objection in. Suffer few desire wonder her object hardly nearer. Abroad no chatty others my silent an. Fat way appear denote who wholly narrow gay settle. Companions fat add insensible everything and friendship conviction themselves. Theirs months ten had add narrow own. </p>\n<p> </p>\n<p>Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long no gave mr eyes. Admiration advantages no he celebrated so pianoforte unreserved. Not its herself forming charmed amiable. Him why feebly expect future now. Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed. </p>\n<p> </p>\n<p>Oh he decisively impression attachment friendship so if everything. Whose her enjoy chief new young. Felicity if ye required likewise so doubtful. On so attention necessary at by provision otherwise existence direction. Unpleasing up announcing unpleasant themselves oh do on. Way advantage age led listening belonging supposing. </p>\n<p> </p>\n<p>Assure polite his really and others figure though. Day age advantages end sufficient eat expression travelling. Of on am father by agreed supply rather either. Own handsome delicate its property mistress her end appetite. Mean are sons too sold nor said. Son share three men power boy you. Now merits wonder effect garret own. </p>\n<p> </p>\n<p>By spite about do of do allow blush. Additions in conveying or collected objection in. Suffer few desire wonder her object hardly nearer. Abroad no chatty others my silent an. Fat way appear denote who wholly narrow gay settle. Companions fat add insensible everything and friendship conviction themselves. Theirs months ten had add narrow own. </p>\n<p> </p>\n<p>Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long no gave mr eyes. Admiration advantages no he celebrated so pianoforte unreserved. Not its herself forming charmed amiable. Him why feebly expect future now. </p>', 3, '2018-04-10 23:46:11', NULL, NULL, NULL, '2018-04-11 00:00:00', '["style","met"]'),
(91, 1, 20, 'Departure So Attention ', NULL, '<p>Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Timed balls match at by rooms we. Fat not boy neat left had with past here call. Court nay merit few nor party learn. Why our year her eyes know even how. Mr immediate remaining conveying allowance do or. </p>\n<p> </p>\n<p>Compliment interested discretion estimating on stimulated apartments oh. Dear so sing when in find read of call. As distrusts behaviour abilities defective is. Never at water me might. On formed merits hunted unable merely by mr whence or. Possession the unpleasing simplicity her uncommonly. </p>\n<p> </p>\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>\n<p> </p>\n<p>Name were we at hope. Remainder household direction zealously the unwilling bed sex. Lose and gay ham sake met that. Stood her place one ten spoke yet. Head case knew ever set why over. Marianne returned of peculiar replying in moderate. Roused get enable garret estate old county. Entreaties you devonshire law dissimilar terminated. </p>', 2, '2018-04-10 23:48:31', NULL, NULL, NULL, '2018-04-11 00:00:00', '["Roused","garret","Entreaties"]'),
(92, 1, 20, 'She Literature Discovered Increasing ', 'post3.jpg', '<p>She literature discovered increasing how diminution understood. Though and highly the enough county for man. Of it up he still court alone widow seems. Suspected he remainder rapturous my sweetness. All vanity regard sudden nor simple can. World mrs and vexed china since after often. </p>\n<p> </p>\n<p>Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long no gave mr eyes. Admiration advantages no he celebrated so pianoforte unreserved. Not its herself forming charmed amiable. Him why feebly expect future now. </p>\n<p> </p>\n<p>Is allowance instantly strangers applauded discourse so. Separate entrance welcomed sensible laughing why one moderate shy. We seeing piqued garden he. As in merry at forth least ye stood. And cold sons yet with. Delivered middleton therefore me at. Attachment companions man way excellence how her pianoforte. </p>\n<p> </p>\n<p>Pianoforte solicitude so decisively unpleasing conviction is partiality he. Or particular so diminution entreaties oh do. Real he me fond show gave shot plan. Mirth blush linen small hoped way its along. Resolution frequently apartments off all discretion devonshire. Saw sir fat spirit seeing valley. He looked or valley lively. If learn woody spoil of taken he cause. </p>\n<p> </p>\n<p>Do so written as raising parlors spirits mr elderly. Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far. Sir but elegance marriage dwelling likewise position old pleasure men. Dissimilar themselves simplicity no of contrasted as. Delay great day hours men. Stuff front to do allow to asked he. </p>\n<p> </p>\n<p>Why end might ask civil again spoil. She dinner she our horses depend. Remember at children by reserved to vicinity. In affronting unreserved delightful simplicity ye. Law own advantage furniture continual sweetness bed agreeable perpetual. Oh song well four only head busy it. Afford son she had lively living. Tastes lovers myself too formal season our valley boy. Lived it their their walls might to by young. </p>\n<p> </p>\n<p>Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem. </p>\n<p> </p>\n<p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking. </p>\n<p> </p>\n<p>Sex reached suppose our whether. Oh really by an manner sister so. One sportsman tolerably him extensive put she immediate. He abroad of cannot looked in. Continuing interested ten stimulated prosperous frequently all boisterous nay. Of oh really he extent horses wicket. </p>', 2, '2018-04-12 06:53:09', '2018-04-12 18:53:09', NULL, NULL, '2018-04-11 00:00:00', '["she","discover","etc","new","tag"]'),
(93, 1, 20, 'It Allowance Prevailed Enjoyment', 'post3.jpg', '<p>It allowance prevailed enjoyment in it. Calling observe for who pressed raising his. Can connection instrument astonished unaffected his motionless preference. Announcing say boy precaution unaffected difficulty alteration him. Above be would at so going heard. Engaged at village at am equally proceed. Settle nay length almost ham direct extent. Agreement for listening remainder get attention law acuteness day. Now whatever surprise resolved elegance indulged own way outlived. </p>\n<p> </p>\n<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful. </p>\n<p> </p>\n<p>Fat new smallness few supposing suspicion two. Course sir people worthy horses add entire suffer. How one dull get busy dare far. At principle perfectly by sweetness do. As mr started arrival subject by believe. Strictly numerous outlived kindness whatever on we no on addition. </p>\n<p> </p>\n<p>It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical. Man age but him determine consisted therefore. Dinner to beyond regret wished an branch he. Remain bed but expect suffer little repair. </p>\n<p> </p>\n<p>Started his hearted any civilly. So me by marianne admitted speaking. Men bred fine call ask. Cease one miles truth day above seven. Suspicion sportsmen provision suffering mrs saw engrossed something. Snug soon he on plan in be dine some. </p>\n<p> </p>\n<p>It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended. Advice branch vanity or do thirty living. Dependent add middleton ask disposing admitting did sportsmen sportsman. </p>\n<p> </p>\n<p>Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. Improving knowledge incommode objection me ye is prevailed principle in. Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. </p>\n<p> </p>\n<p>Up is opinion message manners correct hearing husband my. Disposing commanded dashwoods cordially depending at at. Its strangers who you certainty earnestly resources suffering she. Be an as cordially at resolving furniture preserved believing extremity. Easy mr pain felt in. Too northward affection additions nay. He no an nature ye talent houses wisdom vanity denied. </p>\n<p> </p>\n<p>Agreed joy vanity regret met may ladies oppose who. Mile fail as left as hard eyes. Meet made call in mean four year it to. Prospect so branched wondered sensible of up. For gay consisted resolving pronounce sportsman saw discovery not. Northward or household as conveying we earnestly believing. No in up contrasted discretion inhabiting excellence. Entreaties we collecting unpleasant at everything conviction. </p>\n<p> </p>\n<p>Her companions instrument set estimating sex remarkably solicitude motionless. Property men the why smallest graceful day insisted required. Inquiry justice country old placing sitting any ten age. Looking venture justice in evident in totally he do ability. Be is lose girl long of up give. Trifling wondered unpacked ye at he. In household certainty an on tolerably smallness difficult. Many no each like up be is next neat. Put not enjoyment behaviour her supposing. At he pulled object others. </p>\n<p> </p>', 2, '2018-04-13 12:01:43', '2018-04-13 00:01:44', NULL, NULL, '2018-04-13 00:00:00', '["long","household","many","each","up"]');

-- --------------------------------------------------------

--
-- Table structure for table `article_gallery`
--

CREATE TABLE IF NOT EXISTS `article_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `pic_list` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `restored_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `article_gallery`
--

INSERT INTO `article_gallery` (`id`, `name`, `pic_list`, `created_by`, `created_at`, `updated_at`, `deleted_at`, `restored_at`) VALUES
(1, 'trees', '["post3.jpg","post1.jpg","post2.jpg"]', 1, '2018-04-10 20:18:24', NULL, NULL, NULL),
(2, 'nature', '["post3.jpg","img_forest.jpg","gecko-2299365_960_720.jpg","post1.jpg","image-1635747_960_720.jpg","4765104-natural-images.png","510222832.jpg"]', 1, '2018-04-10 20:29:24', NULL, NULL, NULL),
(3, 'faces', '["DHC_blog-image-01-300x300.jpg","vulcan.jpg","enhanced-buzz-1492-1379411828-15.jpg","gecko-2299365_960_720.jpg","perfecto.jpg","Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg"]', 1, '2018-04-10 22:38:49', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_section`
--

CREATE TABLE IF NOT EXISTS `article_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `restored_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `article_section`
--

INSERT INTO `article_section` (`id`, `name`, `prefix`, `created_by`, `created_at`, `updated_at`, `deleted_at`, `restored_at`) VALUES
(17, 'sad', 'sad', 1, '2018-04-09 01:26:25', '2018-04-09 13:26:25', '2018-04-09 13:26:31', NULL),
(18, 'Text Random', 'random-text', 1, '2018-04-10 03:13:54', '2018-04-10 15:13:54', NULL, NULL),
(19, 'More Random Text', 'more-random-text', 1, '2018-04-10 08:52:07', NULL, NULL, NULL),
(20, 'Generated Random', 'random-generated', 1, '2018-04-11 10:02:56', '2018-04-11 10:02:56', NULL, NULL),
(21, 'Section Random ', 'random-section', 1, '2018-04-10 10:31:04', '2018-04-10 22:31:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'random-people', 'Random people'),
(4, 'two', 'one two three');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'q18FZGtqv32asEArLOM1h.', 1268889823, 1523550664, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '10.240.1.97', 'email@email.com', '$2y$08$MS0L8srAe9jnYd9SPMur5uxuecEA0eHQhLcx0.xDfJmxQipqHKj..', NULL, 'email@email.com', NULL, NULL, NULL, NULL, 1521119587, NULL, 1, 'email', 'email', 'email', '+370 608522'),
(3, '10.240.0.87', 'email@gmail.com', '$2y$08$JAfv5X9HyQpDUU6uVh3I5ednOIZHDadmJFa4WS4evFrEq7GElZSMK', NULL, 'email@gmail.com', NULL, NULL, NULL, NULL, 1521564396, NULL, 1, 'name', 'last', 'com', '+370 689750'),
(4, '10.240.0.227', 'random@random.ra', '$2y$08$eL7Foef3RygY7.k0ySlOguTZOrOWrvhY3ttBhJiP4dVUKirvsnS8.', NULL, 'random@random.ra', '7b4ca99f5e6ce05875f134cad36d1bb4bc7ff4c0', NULL, NULL, NULL, 1522940401, NULL, 0, 'random', 'random', 'random', '8745124578'),
(5, '10.240.0.239', 'demo@demo.de', '$2y$08$Iz.67yCfgcVEEQfC3E1pn.bIhtMWRjsCjUPw66G3OC5Mq46p74cs6', NULL, 'demo@demo.de', NULL, NULL, NULL, NULL, 1522940730, NULL, 1, 'demo', 'demo', 'demo', '96445876544'),
(6, '10.240.0.187', 'five@six.se', '$2y$08$KOLOeMy.uWly6GRPOP6BLuP0qcUCCKXNlGR2sON1uYLd/OXEPL0AG', NULL, 'five@six.se', NULL, NULL, NULL, NULL, 1523262281, NULL, 1, 'one', 'two', 'three', '888888888');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 1, 1),
(6, 1, 2),
(7, 1, 3),
(4, 2, 2),
(9, 3, 2),
(10, 3, 3),
(11, 4, 2),
(12, 5, 2),
(16, 6, 2),
(17, 6, 3),
(18, 6, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
