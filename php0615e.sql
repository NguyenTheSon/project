/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50534
Source Host           : localhost:3306
Source Database       : php0615e

Target Server Type    : MYSQL
Target Server Version : 50534
File Encoding         : 65001

Date: 2015-12-08 20:54:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbcategory`
-- ----------------------------
DROP TABLE IF EXISTS `tbcategory`;
CREATE TABLE `tbcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL DEFAULT '0',
  `title` varchar(150) DEFAULT NULL,
  `icon` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbcategory
-- ----------------------------
INSERT INTO `tbcategory` VALUES ('1', '0', 'Điện thoại viễn thông', null);
INSERT INTO `tbcategory` VALUES ('2', '0', 'Ô tô & Xe máy', null);
INSERT INTO `tbcategory` VALUES ('3', '0', 'Điện tử điện lạnh', null);
INSERT INTO `tbcategory` VALUES ('4', '0', 'Máy tính & Phụ kiện', null);
INSERT INTO `tbcategory` VALUES ('5', '0', 'Laptop & Table', null);
INSERT INTO `tbcategory` VALUES ('6', '1', 'Điện thoại di động', null);
INSERT INTO `tbcategory` VALUES ('7', '1', 'Điện thoại cố định', null);
INSERT INTO `tbcategory` VALUES ('8', '2', 'Ô tô', null);
INSERT INTO `tbcategory` VALUES ('9', '2', 'Xe máy', null);

-- ----------------------------
-- Table structure for `tbchitiet`
-- ----------------------------
DROP TABLE IF EXISTS `tbchitiet`;
CREATE TABLE `tbchitiet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) NOT NULL DEFAULT '0',
  `idhoadon` int(11) NOT NULL DEFAULT '0',
  `soluong` int(11) DEFAULT NULL,
  `giaban` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbchitiet
-- ----------------------------
INSERT INTO `tbchitiet` VALUES ('1', '22', '1', '1', '1579000');
INSERT INTO `tbchitiet` VALUES ('2', '48', '1', '1', '7990000');
INSERT INTO `tbchitiet` VALUES ('3', '49', '1', '1', '10990000');
INSERT INTO `tbchitiet` VALUES ('4', '22', '2', '1', '1579000');
INSERT INTO `tbchitiet` VALUES ('5', '48', '2', '1', '7990000');

-- ----------------------------
-- Table structure for `tbcounter`
-- ----------------------------
DROP TABLE IF EXISTS `tbcounter`;
CREATE TABLE `tbcounter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `time` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbcounter
-- ----------------------------
INSERT INTO `tbcounter` VALUES ('1', '8f16810f5643404c38ed8d1384e87e47', '::1', '1448971605');
INSERT INTO `tbcounter` VALUES ('2', '7fa34f5e8d2f43fda7080f12beded791', '::1', '1449574070');

-- ----------------------------
-- Table structure for `tbhoadon`
-- ----------------------------
DROP TABLE IF EXISTS `tbhoadon`;
CREATE TABLE `tbhoadon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhan` date DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `tongtien` bigint(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbhoadon
-- ----------------------------
INSERT INTO `tbhoadon` VALUES ('1', 'Trần Văn Hùng', '12345464', 'Hà Nội', 'haivan@gmail.com', '2015-10-20', 'Trần Văn Hùng', '20559000', '2015-10-08 13:18:58', '0');
INSERT INTO `tbhoadon` VALUES ('2', 'Trần Văn Hùng', '12345464', 'Hà Nội', 'haivan@gmail.com', '2015-10-20', 'Trần Văn Hùng', '20559000', '2015-10-08 13:52:40', '0');

-- ----------------------------
-- Table structure for `tbnews`
-- ----------------------------
DROP TABLE IF EXISTS `tbnews`;
CREATE TABLE `tbnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `mota` mediumtext,
  `keyword` varchar(250) DEFAULT NULL,
  `des` varchar(250) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbnews
-- ----------------------------
INSERT INTO `tbnews` VALUES ('69', 'Apple ra mắt Iphone 9', '../upload/ip.jpg', 'Apple ra mắt Iphone 9', 'Apple ra mắt Iphone 9', 'Apple ra mắt Iphone 9', '2015-09-24 20:44:59', '1');
INSERT INTO `tbnews` VALUES ('70', 'Samsung ra mắt Tivi 8k', '../upload/apple-iphone-beautiful-picture.jpg', 'Samsung ra mắt Tivi 8k', 'Samsung ra mắt Tivi 8k', 'Samsung ra mắt Tivi 8k', '2015-09-24 20:45:29', '1');

-- ----------------------------
-- Table structure for `tbproduct`
-- ----------------------------
DROP TABLE IF EXISTS `tbproduct`;
CREATE TABLE `tbproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcate` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `album` text,
  `soluong` smallint(6) DEFAULT NULL,
  `xuatxu` varchar(100) DEFAULT NULL,
  `tinhtrang` tinyint(1) DEFAULT NULL,
  `mota` mediumtext,
  `keyword` varchar(250) DEFAULT NULL,
  `des` varchar(250) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk01` (`idcate`),
  CONSTRAINT `fk01` FOREIGN KEY (`idcate`) REFERENCES `tbcategory` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbproduct
-- ----------------------------
INSERT INTO `tbproduct` VALUES ('1', '9', 'Xe máy tay côn Yamaha Exciter 2015 150cc GP (Xanh xám)', '47100000', 'http://static-02.lazada.vn/p/xe-may-tay-con-yamaha-exciter-2015-150cc-gp-xanh-xam-0185-4604001-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('2', '9', 'Xe tay ga Honda Lead 125cc (Trắng)', '38030000', 'http://static-01.lazada.vn/p/xe-tay-ga-honda-lead-125cc-trang-9212-9497601-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('3', '9', 'Xe tay ga Honda Air Blade 125cc tiêu chuẩn (Đen đỏ)', '38300000', 'http://static-01.lazada.vn/p/xe-tay-ga-honda-air-blade-125cc-tieu-chuan-en-o-8248-0644121-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('4', '9', 'Xe tay ga Yamaha GRANDE STD (Trắng)', '40500000', 'http://static-01.lazada.vn/p/xe-tay-ga-yamaha-grande-std-trang-9404-5496121-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('5', '9', 'Xe tay ga SYM 09 Elizabeth EFI Smart Idle 110cc (Xanh)', '33900000', 'http://static-02.lazada.vn/p/xe-tay-ga-sym-09-elizabeth-efi-smart-idle-110cc-xanh-0149-7858201-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('6', '9', 'Xe tay ga Honda SH Mode phiên bản thời trang (Xanh ngọc đen)', '57400000', 'http://static-02.lazada.vn/p/xe-tay-ga-honda-sh-mode-phien-ban-thoi-trang-xanh-ngoc-en-8349-8844121-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('7', '9', 'Xe tay ga Suzuki IMPULSE 125cc (Đen phối đỏ)', '30290000', 'http://static-01.lazada.vn/p/xe-tay-ga-suzuki-impulse-125cc-en-phoi-o-9347-200299-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('8', '9', 'Xe máy Honda Wave Alpha 110cc (Đỏ đen )', '18000000', 'http://static-02.lazada.vn/p/xe-may-honda-wave-alpha-110cc-o-en-8216-1544121-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('9', '8', 'Bơm điện oto AC-PRO AIR100 (Đen xám)', '699000', 'http://static-03.lazada.vn/p/bom-ien-oto-ac-pro-air100-en-xam-9445-602709-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('10', '8', 'Bơm lốp xe MICHELIN 12266 (Đen)', '1289000', 'http://static-02.lazada.vn/p/bom-lop-xe-michelin-12266-en-8770-072312-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('11', '8', 'Đồng Hồ Gắn Kính Loại Tròn USA Store XT-01 (Đen)', '189000', 'http://static-01.lazada.vn/p/ong-ho-gan-kinh-loai-tron-usa-store-xt-01-en-0442-6744101-1-catalog.jpg', null, '0', '', '0', '', '', '', '0000-00-00 00:00:00', '1', '1', '1');
INSERT INTO `tbproduct` VALUES ('12', '8', 'Pin sạc dự phòng kiêm thiết bị kích bình xe hơi Power Bank Car Jump Starter TM10 16800mAh (Đen)', '999000', 'http://static-01.lazada.vn/p/pin-sac-du-phong-kiem-thiet-bi-kich-binh-xe-hoi-power-bank-car-jump-starter-tm10-16800mah-en-1929-195639-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('13', '9', 'Khóa chống mất trộm xe máy có báo động I-Lock Kora (Trắng)', '249000', 'http://static-01.lazada.vn/p/khoa-chong-mat-trom-xe-may-co-bao-ong-i-lock-kora-trang-9170-434872-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('14', '8', 'Bộ pin sạc dự phòng và kích nguồn Carku Epower Elite 12000mAh (Trắng)', '1699000', 'http://static-02.lazada.vn/p/bo-pin-sac-du-phong-va-kich-nguon-carku-epower-elite-12000mah-trang-9491-825252-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('15', '8', 'Bộ Che Nắng Xe Ô TÔ USA Store GT-01 (Bạc)', '269000', 'http://static-03.lazada.vn/p/bo-che-nang-xe-o-to-usa-store-gt-01-bac-5045-785733-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('16', '8', 'Combo 02 Tấm Che mưa Gương Chiếu hậu Ô TÔ USA Store (Xám)', '159000', 'http://static-03.lazada.vn/p/combo-02-tam-che-mua-guong-chieu-hau-o-to-usa-store-xam-1363-162243-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('17', '8', 'Bộ khẩu mở siết ốc và bugi 40 chi tiết Century TS-23407 (Đỏ)', '229000', 'http://static-01.lazada.vn/p/bo-khau-mo-siet-oc-va-bugi-40-chi-tiet-century-ts-23407-o-6494-5772611-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('18', '8', 'Michelin 3140 - Máy bơm lốp 12v dùng ô tô (Đen)', '1259000', 'http://static-02.lazada.vn/p/michelin-3140-may-bom-lop-12v-dung-o-to-en-5823-178962-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('19', '8', 'Bơm chân đa năng 2 xilanh BMB CB2944 (Đen)', '359000', 'http://static-01.lazada.vn/p/bom-chan-a-nang-2-xilanh-bmb-cb2944-en-9466-519653-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('20', '9', 'Mũ bảo hiểm GRS A399K 2 kính (Đen nhám)', '459000', 'http://static-01.lazada.vn/p/mu-bao-hiem-grs-a399k-2-kinh-en-nham-6763-440239-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('21', '8', 'Thiết bị tiết kiệm nhiên liệu và tạo ion âm trên ô tô Lifepro L226-FS (Đen)', '489000', 'http://static-02.lazada.vn/p/thiet-bi-tiet-kiem-nhien-lieu-va-tao-ion-am-tren-o-to-lifepro-l226-fs-en-1246-503362-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('22', '8', 'Sạc dự phòng kích điện cho xe hơi Power ALL 12.000mAh (Đen phối đỏ)', '1579000', 'http://static-03.lazada.vn/p/sac-du-phong-kich-ien-cho-xe-hoi-power-all-12-000mah-en-phoi-o-1928-5327201-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('23', '8', 'Máy lọc không khí và khử mùi trên ô tô Lifepro L668-OT(Đen)', '599000', 'http://static-02.lazada.vn/p/may-loc-khong-khi-va-khu-mui-tren-o-to-lifepro-l668-ot-en-4516-202362-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('24', '9', 'Bộ khẩu mở siết ốc và bugi 26 chi tiết Prodigieux 26pcs PD-21758', '299000', 'http://static-02.lazada.vn/p/bo-khau-mo-siet-oc-va-bugi-26-chi-tiet-prodigieux-26pcs-pd-21758-6807-5738321-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('25', '8', 'Áo trùm xe hơi cao cấp xe 4 chỗ CCC ( Bạc)', '469000', 'http://static-02.lazada.vn/p/ao-trum-xe-hoi-cao-cap-xe-4-cho-ccc-bac-1140-919873-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('26', '9', 'Điện thoại định vị P Tracker JVJ M01 (Xám)', '1129000', 'http://static-01.lazada.vn/p/ien-thoai-inh-vi-p-tracker-jvj-m01-xam-1218-264931-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('27', '9', 'Móc khóa thông minh Vtech VT02 ( Đen)', '279000', 'http://static-02.lazada.vn/p/moc-khoa-thong-minh-vtech-vt02-en-1072-4533021-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('28', '9', 'Khóa chống trộm xe máy thông minh Viettracker FSK125 (Đen)', '689000', 'http://static-02.lazada.vn/p/khoa-chong-trom-xe-may-thong-minh-viettracker-fsk125-en-9420-375992-1-catalog.jpg', null, null, null, null, null, null, null, null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('29', '8', 'Bơm lốp xe Michelin 12260 (Trắng)', '1239000', 'http://static-02.lazada.vn/p/bom-lop-xe-michelin-12260-trang-3010-825312-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('30', '9', 'Xe tay côn Honda MSX 125  (Đen)', '59400000', 'http://static-02.lazada.vn/p/xe-tay-con-honda-msx-125-en-8328-2844121-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('31', '8', 'Thiết bị dẫn đường GPS cho ô tô Vietmap C005 (Đen)', '3699000', 'http://static-02.lazada.vn/p/thiet-bi-dan-uong-gps-cho-o-to-vietmap-c005-en-5305-15359-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('32', '9', 'Xe tay ga Honda Air Blade 125cc cao cấp (Đỏ đen)', '39900000', 'http://static-01.lazada.vn/p/xe-tay-ga-honda-air-blade-125cc-cao-cap-o-en-8259-3644121-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('33', '6', 'Apple iPhone 6 16GB (Vàng) - Hàng nhập khẩu', '14990000', 'http://static-02.lazada.vn/p/apple-iphone-6-16gb-vang-hang-nhap-khau-8637-606949-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('34', '6', 'Apple iPhone 6 16GB (Xám)', '15689000', 'http://static-01.lazada.vn/p/apple-iphone-6-16gb-xam-9854-450992-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('35', '6', 'Samsung Galaxy A5 16GB (Hồng)', '5990000', 'http://static-01.lazada.vn/p/samsung-galaxy-a5-16gb-hong-0016-3776121-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('36', '6', 'Samsung Galaxy A3 16GB (Hồng)', '3990000', 'http://static-02.lazada.vn/p/samsung-galaxy-a3-16gb-hong-8286-1048121-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('37', '6', 'Pantech Vega Iron 2 A910S 32GB (Đen viền vàng)', '5999000', 'http://static-02.lazada.vn/p/pantech-vega-iron-2-a910s-32gb-en-vien-vang-3288-4286421-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('38', '6', 'Lenovo Vibe Shot 32GB (Đỏ)', '7990000', 'http://static-01.lazada.vn/p/lenovo-vibe-shot-32gb-o-8107-8079321-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('39', '6', 'Samsung Galaxy Grand Prime G530 8GB (Trắng)', '3379000', 'http://static-02.lazada.vn/p/samsung-galaxy-grand-prime-g530-8gb-trang-5072-895462-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('40', '6', 'Samsung Galaxy J1 4GB (Đen)', '2049000', 'http://static-01.lazada.vn/p/samsung-galaxy-j1-4gb-en-6494-0495111-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('41', '6', 'Samsung Galaxy V Plus 4GB 2Sim (Trắng)', '1629000', 'http://static-01.lazada.vn/p/samsung-galaxy-v-plus-4gb-2sim-trang-6494-6295611-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('42', '6', 'Thiết bị điện tử dùng để học và dạy ngoại ngữ e-Teacher F12', '989000', 'http://static-02.lazada.vn/p/thiet-bi-ien-tu-dung-e-hoc-va-day-ngoai-ngu-e-teacher-f12-3349-387021-1-catalog.jpg', null, null, null, null, null, null, null, null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('43', '6', 'Pantech Vega Iron 2 A910S 32GB (Trắng viền vàng)', '5999000', 'http://static-02.lazada.vn/p/pantech-vega-iron-2-a910s-32gb-trang-vien-vang-3287-3286421-1-catalog.jpg', null, '0', '', '0', '', '', '', null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('44', '6', 'ĐTDĐ Nokia 8800 Gold Arte 1GB (Vàng)', '16850000', 'http://static-02.lazada.vn/p/td-nokia-8800-gold-arte-1gb-vang-3382-8668011-1-catalog.jpg', null, '0', '', '0', '', '', '', '0000-00-00 00:00:00', '1', '2', '1');
INSERT INTO `tbproduct` VALUES ('45', '6', 'Apple iPhone 5 16GB (Đen) - Hàng nhập khẩu', '5989000', 'http://static-02.lazada.vn/p/apple-iphone-5-16gb-en-hang-nhap-khau-6494-1870101-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('46', '6', 'Máy tính bảng Apple iPad Air 2 64GB 4G (Vàng) - Hàng nhập khẩu', '13650000', 'http://static-01.lazada.vn/p/may-tinh-bang-apple-ipad-air-2-64gb-4g-vang-hang-nhap-khau-4017-584739-1-catalog.jpg', null, '0', '', '0', '', '', '', null, '2', '0', '1');
INSERT INTO `tbproduct` VALUES ('47', '6', 'Samsung Galaxy Note 5 N920 32GB (Vàng)', '17259000', 'http://static-01.lazada.vn/p/samsung-galaxy-note-5-n920-32gb-vang-2576-0041621-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('48', '6', 'Lenovo Vibe Shot 32GB (Xám)', '7990000', 'http://static-01.lazada.vn/p/lenovo-vibe-shot-32gb-xam-8218-7079321-1-catalog.jpg', null, '0', '', '0', '', '', '', null, '1', '0', '1');
INSERT INTO `tbproduct` VALUES ('49', '6', 'Apple iPhone 5s 16GB (Gold)', '10990000', 'http://static-01.lazada.vn/p/apple-iphone-5s-16gb-gold-2608-296701-1-catalog.jpg', null, '0', '', '0', '', '', '', '0000-00-00 00:00:00', '1', '1', '1');
INSERT INTO `tbproduct` VALUES ('50', '6', 'Máy tính bảng Lenovo Tab 2 A7-10 8GB (Đen) + Thẻ cào trúng thưởng + Bao da Lenovo', '1699000', 'http://static-02.lazada.vn/p/may-tinh-bang-lenovo-tab-2-a7-10-8gb-en-the-cao-trung-thuong-bao-da-lenovo-4182-8548121-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('51', '6', 'ĐTDĐ Suntek A8 Plus 2 SIM (Đen)', '439000', 'http://static-02.lazada.vn/p/td-suntek-a8-plus-2-sim-en-4147-7172821-1-catalog.jpg', null, null, null, null, null, null, null, null, '0', '0', '1');
INSERT INTO `tbproduct` VALUES ('52', '6', 'Samsung Galaxy S5 16GB (Trắng)', '5600000', 'http://static-01.lazada.vn/p/samsung-galaxy-s5-16gb-trang-6268-536421-1-catalog.jpg', ';1.jpg;2.jpg;3.jpg;4.jpg;5.jpg;6.jpg', '0', '', '0', '', '', '', '0000-00-00 00:00:00', '1', '1', '1');

-- ----------------------------
-- Table structure for `tbrole`
-- ----------------------------
DROP TABLE IF EXISTS `tbrole`;
CREATE TABLE `tbrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `prog` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbrole
-- ----------------------------
INSERT INTO `tbrole` VALUES ('1', '0', 'Danh mục', '', '');
INSERT INTO `tbrole` VALUES ('2', '0', 'Nội dung', 'add,edit,delete', '');
INSERT INTO `tbrole` VALUES ('3', '1', 'Danh mục sản phẩm', 'add,edit,delete', '');
INSERT INTO `tbrole` VALUES ('4', '1', 'Danh mục tin tức', 'add,edit,delete', '');
INSERT INTO `tbrole` VALUES ('5', '2', 'Quản lý sản phẩm', 'add,edit,delete', 'product');
INSERT INTO `tbrole` VALUES ('6', '2', 'Quản lý tin tức', 'add,edit,delete', 'news');
INSERT INTO `tbrole` VALUES ('7', '0', 'Menu', 'add,edit,delete', 'menu');
INSERT INTO `tbrole` VALUES ('8', '0', 'Hóa đơn', 'edit,delete', 'order');
INSERT INTO `tbrole` VALUES ('9', '0', 'Tài khoản', 'add,edit,delete', 'account');

-- ----------------------------
-- Table structure for `tbtaikhoan`
-- ----------------------------
DROP TABLE IF EXISTS `tbtaikhoan`;
CREATE TABLE `tbtaikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(150) DEFAULT NULL,
  `hoten` varchar(150) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `code` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbtaikhoan
-- ----------------------------
INSERT INTO `tbtaikhoan` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', null, null, '1', null);
INSERT INTO `tbtaikhoan` VALUES ('2', 'mod', 'e10adc3949ba59abbe56e057f20f883e', '1', null, null, '1', null);
INSERT INTO `tbtaikhoan` VALUES ('3', 'abc', 'abc', '0', 'lymo0501@gmail.com', 'Nguyễn Nam', '0', null);
INSERT INTO `tbtaikhoan` VALUES ('4', 'admin22', '1341215dbe9acab4361fd6417b2b11bc', '0', 'lymo0501@gmail.com', 'Nguyễn Nam', '0', 'e1f84213db4ddc86d9da48ad443fde68');
INSERT INTO `tbtaikhoan` VALUES ('5', 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '0', 'lymo0501@gmail.com', '', '1', '');

-- ----------------------------
-- Table structure for `tbtaikhoan_role`
-- ----------------------------
DROP TABLE IF EXISTS `tbtaikhoan_role`;
CREATE TABLE `tbtaikhoan_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtaikhoan` int(11) NOT NULL,
  `idrole` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbtaikhoan_role
-- ----------------------------
INSERT INTO `tbtaikhoan_role` VALUES ('1', '1', '9', 'add,edit,delete');
INSERT INTO `tbtaikhoan_role` VALUES ('3', '1', '7', 'delete,edit,add');
INSERT INTO `tbtaikhoan_role` VALUES ('5', '1', '5', 'delete,edit,add');
INSERT INTO `tbtaikhoan_role` VALUES ('6', '2', '7', 'edit,add');
INSERT INTO `tbtaikhoan_role` VALUES ('7', '1', '4', 'delete,edit,add');
INSERT INTO `tbtaikhoan_role` VALUES ('8', '1', '3', 'delete,edit,add');
INSERT INTO `tbtaikhoan_role` VALUES ('9', '2', '9', 'add,edit,delete');
INSERT INTO `tbtaikhoan_role` VALUES ('10', '1', '8', 'delete,edit');
INSERT INTO `tbtaikhoan_role` VALUES ('11', '1', '6', 'delete,edit,add');

-- ----------------------------
-- View structure for `vchitiet`
-- ----------------------------
DROP VIEW IF EXISTS `vchitiet`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vchitiet` AS select `tbchitiet`.`idproduct` AS `idproduct`,`tbchitiet`.`idhoadon` AS `idhoadon`,`tbchitiet`.`soluong` AS `soluong`,`tbchitiet`.`giaban` AS `giaban`,`tbproduct`.`title` AS `title`,`tbchitiet`.`id` AS `id` from (`tbchitiet` join `tbproduct`) where (`tbchitiet`.`idproduct` = `tbproduct`.`id`) ;
