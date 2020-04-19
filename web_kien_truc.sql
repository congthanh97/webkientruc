-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2020 lúc 10:17 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_kien_truc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cateName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cateName`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ngoại thất', 1, '2019-10-03 07:22:52', '2019-12-17 03:57:58'),
(2, 'Nội thất', 1, '2019-10-03 07:22:52', NULL),
(3, 'Cảnh quan', 1, '2019-10-03 07:22:52', '2019-12-16 15:16:46'),
(4, 'Video', 1, '2019-10-03 07:22:52', NULL),
(8, 'P.GĐ', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutUs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxim` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ytb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videoUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `email`, `mobile`, `address`, `aboutUs`, `maxim`, `link_fb`, `link_ytb`, `videoUrl`, `created_at`, `updated_at`) VALUES
(1, 'an-architect@gmail.com', '0984.519.822', 'CH-03/11/Golden 06-Vinh City-VN', '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>AN-Architect /<br />\r\nLet us build your dreams</strong></span></p>\r\n\r\n<p>L&agrave; c&ocirc;ng ty h&agrave;ng đầu trong ng&agrave;nh thiết&nbsp;kế nội thất v&agrave; kiến tr&uacute;c hahaha</p>', '“Không gian thì đa chiều, cớ gì cứ phải giam mình cùng những tiêu chuẩn cũ rích?” - Zaha Hadid', '#', 'https://www.youtube.com/channel/UCqiihOpAy1AW_47dSJkoi5w', 'https://www.youtube.com/watch?v=4wzJiABWNZM', NULL, '2019-12-09 01:58:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2019_08_27_042101_create_categories_table', 1),
(18, '2019_08_27_042233_create_projects_table', 1),
(19, '2019_08_27_042341_create__contact_table', 1),
(20, '2019_08_27_042513_create__project_images_table', 1),
(21, '2019_08_27_042618_create_users_table', 1),
(22, '2019_09_30_103649_create_themes_table', 1),
(23, '2019_10_02_090208_add_introduce_to_themes', 1),
(24, '2019_10_03_141034_add_maxim_fb_ytb_to_contact', 1),
(25, '2019_10_03_172717_add_video_to_contact', 2),
(26, '2019_10_04_112216_create_slidehome_table', 3),
(27, '2019_10_04_113831_drop_from_themes', 3),
(28, '2019_10_04_114419_drop_from_contact', 3),
(29, '2019_10_04_151137_add_timestamp_to_slidehome', 3),
(30, '2019_10_04_153022_create_slidecontact_table', 4),
(31, '2019_10_04_155146_null_caption_to_slidehome', 4),
(32, '2019_10_04_155725_add_caption_to_slidehome', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `cateId` int(10) UNSIGNED NOT NULL,
  `projectName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featureImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `videoUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `architect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(10) UNSIGNED DEFAULT NULL,
  `projectContent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `cateId`, `projectName`, `featureImage`, `videoUrl`, `architect`, `surface`, `placement`, `year`, `projectContent`, `poster`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nội thất trong văn phòng', '3.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n					<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr5.jpg\" style=\"height:570px; width:850px\" /></p>\r\n					<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n					<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr7.jpg\" style=\"height:570px; width:850px\" /></p>\r\n					<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n					<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr3.jpg\" style=\"height:570px; width:850px\" /></p>\r\n	        	', '1', 1, '2019-10-03 07:22:52', NULL),
(2, 4, 'Nội thất trong văn phòng', '32.jpg', 'https://www.youtube.com/watch?v=Pkh8UtuejGw', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(3, 2, 'Nội thất trong văn phòng', '6.jpg', NULL, 'Davici', '150', 'Hải Phòng', 2017, '<p>Tại đ&acirc;y,&nbsp;2 đối tượng y&ecirc;u cầu S. chở đến khu vực gi&aacute;p ranh giữa phường Cổ Nhuế 2 với phường Thụy Phương, quận Bắc Từ Li&ecirc;m với mức gi&aacute; thỏa thuận l&agrave; 60.000 đồng. Tuy nhi&ecirc;n, đ&uacute;ng l&uacute;c n&agrave;y anh S. c&oacute; một đơn giao h&agrave;ng về đường Nguyễn Ch&iacute; Thanh, n&ecirc;n anh S. hủy chuyến.</p>\r\n\r\n<p>Mặc d&ugrave; vậy, tới khi đ&atilde; giao h&agrave;ng xong, S. chạy xe quay về khu vực bến xe Mỹ Đ&igrave;nh th&igrave; gặp Gi&aacute;p v&agrave; Trường vẫn đang ngồi tại đ&acirc;y. Lần n&agrave;y S. nhận lời, chở Gi&aacute;p v&agrave; Trường đến khu vực đ&atilde; n&oacute;i tới trước đ&oacute; (gi&aacute;p ranh giữa phường Cổ Nhuế 2 với phường Thụy Phương) v&agrave; bị 2 t&ecirc;n d&ugrave;ng dao s&aacute;t hại, cướp xe m&aacute;y.</p>\r\n\r\n<p><img class=\'img0 projectphoto\' alt=\"\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n\r\n<p><img class=\'img1 projectphoto\' alt=\"\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n\r\n<p><img class=\'img2 projectphoto\' alt=\"\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n\r\n<p><img class=\'img3 projectphoto\' alt=\"\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>', '1', 1, '2019-10-03 07:22:52', '2019-10-03 09:33:21'),
(4, 3, 'Nội thất trong văn phòng', '6.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(5, 3, 'Nội thất trong văn phòng', '6.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(6, 4, 'Nội thất trong văn phòng', '32.jpg', 'https://www.youtube.com/watch?v=Pkh8UtuejGw', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(7, 4, 'Nội thất trong văn phòng', '32.jpg', 'https://www.youtube.com/watch?v=Pkh8UtuejGw', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(8, 3, 'Nội thất trong văn phòng', '6.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(9, 3, 'Nội thất trong văn phòng', '6.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(10, 4, 'Nội thất trong văn phòng', '32.jpg', 'https://www.youtube.com/watch?v=Pkh8UtuejGw', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(11, 2, 'Nội thất trong văn phòng', '6.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(12, 4, 'Nội thất trong văn phòng', '32.jpg', 'https://www.youtube.com/watch?v=Pkh8UtuejGw', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL),
(13, 1, 'Nội thất trong văn phòng', '6.jpg', '', 'Davici', '150', 'Hải Phòng', 2017, '<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr4.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz10.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz6.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/scr8.jpg\" style=\"height:570px; width:850px\" /></p>\r\n				<p><img alt=\"\" class=\"img0 projectphoto\" src=\"/public/img/project-page-images/tz9.jpg\" style=\"height:570px; width:850px\" /></p>\r\n        	', '1', 1, '2019-10-03 07:22:52', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_images`
--

CREATE TABLE `project_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `projectId` int(10) UNSIGNED NOT NULL,
  `imgUrl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slidecontact`
--

CREATE TABLE `slidecontact` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slidecontact`
--

INSERT INTO `slidecontact` (`id`, `image`, `caption`, `number`, `created_at`, `updated_at`) VALUES
(1, '1570181840_photo-1569676597473-4c15cdaf133c.jpg', NULL, 1, NULL, NULL),
(2, '1570181884_IMG_3641.JPG', NULL, 2, NULL, NULL),
(3, '1570181988_IMG_3705.JPG', NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slidehome`
--

CREATE TABLE `slidehome` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slidehome`
--

INSERT INTO `slidehome` (`id`, `image`, `number`, `created_at`, `updated_at`, `caption`) VALUES
(2, '1570182467_1568084127_7.jpg', 1, NULL, '2019-10-04 09:47:47', NULL),
(3, '1570178750_IMG_3628.JPG', 2, NULL, NULL, NULL),
(6, '1570180078_photo-1569676597473-4c15cdaf133c.jpg', 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `videoUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `themes`
--

INSERT INTO `themes` (`id`, `videoUrl`, `introduce`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=XQxEhxJK0IM', '<h1>Architecture</h1>\r\n\r\n<h2>Discover a new appreciation for the world of architecture, featuring buildings and structures from around the world.</h2>', '2019-10-03 07:22:52', '2019-10-04 09:58:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `mobile`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123456', 'Nguyeen duc hieu', 'ducieu.ptit@gmail.com', '031239949', 1, '2019-10-03 07:22:52', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_cateid_index` (`cateId`);

--
-- Chỉ mục cho bảng `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_projectid_index` (`projectId`);

--
-- Chỉ mục cho bảng `slidecontact`
--
ALTER TABLE `slidecontact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slidehome`
--
ALTER TABLE `slidehome`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slidecontact`
--
ALTER TABLE `slidecontact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slidehome`
--
ALTER TABLE `slidehome`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_cateid_foreign` FOREIGN KEY (`cateId`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_projectid_foreign` FOREIGN KEY (`projectId`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
