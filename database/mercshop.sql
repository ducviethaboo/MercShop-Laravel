-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 11:55 AM
-- Server version: 8.0.22
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_21_090614_create_table_products', 1),
(5, '2020_11_25_135714_add_column_productimg_to_products', 2),
(6, '2020_11_26_093839_add_column_product_desc_to_products', 3),
(7, '2020_11_29_021439_create_table__customer', 4),
(8, '2020_11_29_021818_create_table_order', 5),
(9, '2020_12_01_062927_add_column_role_to_users', 5),
(10, '2020_12_01_063252_add_column_role_to_users', 6),
(11, '2020_12_01_144256_add_column_phone_to_table_users', 7),
(12, '2020_12_03_074725_create_table_testdriver', 8),
(13, '2020_12_03_075125_add_foreign_key_to_table_testdriver', 9),
(14, '2020_12_07_091229_add_column_user_id_to_table_orders', 10),
(15, '2020_12_07_092653_create_foreign_key_order_id_on_table_orderdetails', 11),
(16, '2020_12_07_131711_add_column_total_price_to_orderdetails', 11),
(17, '2020_12_09_093909_add_column_price_each_to_table_orderdetail', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `quantityOrder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productId` bigint UNSIGNED DEFAULT NULL,
  `orderId` bigint UNSIGNED DEFAULT NULL,
  `priceEach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`quantityOrder`, `totalPrice`, `productId`, `orderId`, `priceEach`, `created_at`, `updated_at`) VALUES
('1', '4849000000', 130, NULL, NULL, '2020-12-08 07:04:58', '2020-12-08 07:04:58'),
('1', '10829000000', 133, NULL, NULL, '2020-12-08 07:11:22', '2020-12-08 07:11:22'),
('1', '10829000000', 133, NULL, NULL, '2020-12-08 07:13:45', '2020-12-08 07:13:45'),
(NULL, '4849000000', 130, 45, NULL, '2020-12-09 00:10:24', '2020-12-09 00:10:24'),
(NULL, '6720000000', 129, 45, NULL, '2020-12-09 00:13:29', '2020-12-09 00:13:29'),
('1', '3899000000', 134, 45, NULL, '2020-12-09 00:16:12', '2020-12-09 00:16:12'),
('1', '8678000000', 130, 45, NULL, '2020-12-09 01:42:13', '2020-12-09 01:42:13'),
('1', '8678000000', 132, 45, NULL, '2020-12-09 01:42:13', '2020-12-09 01:42:13'),
('1', '7739000000', 130, 51, NULL, '2020-12-09 01:44:34', '2020-12-09 01:44:34'),
('1', '7739000000', 131, 51, NULL, '2020-12-09 01:44:34', '2020-12-09 01:44:34'),
('2', '16418000000', 130, 52, NULL, '2020-12-09 01:48:58', '2020-12-09 01:48:58'),
('1', '16418000000', 129, 52, NULL, '2020-12-09 01:48:58', '2020-12-09 01:48:58'),
('3', '55644000000', 133, 53, NULL, '2020-12-09 02:33:36', '2020-12-09 02:33:36'),
('2', '55644000000', 135, 53, NULL, '2020-12-09 02:33:36', '2020-12-09 02:33:36'),
('1', '55644000000', 139, 53, NULL, '2020-12-09 02:33:36', '2020-12-09 02:33:36'),
('2', '24676000000', 130, 54, '4849000000', '2020-12-09 02:43:20', '2020-12-09 02:43:20'),
('2', '24676000000', 135, 54, '4129000000', '2020-12-09 02:43:20', '2020-12-09 02:43:20'),
('1', '24676000000', 129, 54, '6720000000', '2020-12-09 02:43:20', '2020-12-09 02:43:20'),
('1', '4909000000', 144, 53, '4909000000', '2020-12-09 06:05:37', '2020-12-09 06:05:37'),
('1', '4849000000', 130, 56, '4849000000', '2020-12-09 06:08:16', '2020-12-09 06:08:16'),
('1', '14899000000', 139, 53, '14899000000', '2020-12-09 06:09:10', '2020-12-09 06:09:10'),
('1', '3899000000', 134, 58, '3899000000', '2020-12-09 06:11:18', '2020-12-09 06:11:18'),
('1', '4849000000', 130, 59, '4849000000', '2020-12-09 18:31:31', '2020-12-09 18:31:31'),
('1', '6720000000', 129, 60, '6720000000', '2020-12-09 18:35:41', '2020-12-09 18:35:41'),
('1', '2890000000', 131, 61, '2890000000', '2020-12-09 19:14:01', '2020-12-09 19:14:01'),
('2', '21658000000', 133, 62, '10829000000', '2020-12-09 19:41:19', '2020-12-09 19:41:19'),
('1', '6720000000', 129, 64, '6720000000', '2020-12-09 20:13:44', '2020-12-09 20:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `orderDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderDate`, `userEmail`, `created_at`, `updated_at`) VALUES
(45, '9/12/2020', 'ducviet300397@gmail.com', '2020-12-09 00:10:24', '2020-12-09 00:10:24'),
(47, '9/12/2020', 'hai@gmail.com', '2020-12-09 00:13:29', '2020-12-09 00:13:29'),
(48, '9/12/2020', 'hoa@gmail.com', '2020-12-09 00:16:12', '2020-12-09 00:16:12'),
(49, '9/12/2020', 'duong@gmail.com', '2020-12-09 01:42:13', '2020-12-09 01:42:13'),
(51, '9/12/2020', 'ha.nguyen@gmail.com', '2020-12-09 01:44:34', '2020-12-09 01:44:34'),
(52, '9/12/2020', 'quynh@gmail.com', '2020-12-09 01:48:58', '2020-12-09 01:48:58'),
(53, '9/12/2020', NULL, '2020-12-09 02:33:36', '2020-12-09 02:33:36'),
(54, '9/12/2020', 'hung.duong@gmail.com', '2020-12-09 02:43:20', '2020-12-09 02:43:20'),
(55, '9/12/2020', NULL, '2020-12-09 06:05:37', '2020-12-09 06:05:37'),
(56, '9/12/2020', 'nguyenthuha@gmail.com', '2020-12-09 06:08:16', '2020-12-09 06:08:16'),
(57, '9/12/2020', NULL, '2020-12-09 06:09:10', '2020-12-09 06:09:10'),
(58, '9/12/2020', 'quynh.dao@gmail.com', '2020-12-09 06:11:18', '2020-12-09 06:11:18'),
(59, '10/12/2020', 'thucanh@gmail.com', '2020-12-09 18:31:30', '2020-12-09 18:31:30'),
(60, '10/12/2020', 'maihoa@gmail.com', '2020-12-09 18:35:41', '2020-12-09 18:35:41'),
(61, '10/12/2020', 'nguoila@gmail.com', '2020-12-09 19:14:01', '2020-12-09 19:14:01'),
(62, '10/12/2020', 'thaotm@gmail.com', '2020-12-09 19:41:19', '2020-12-09 19:41:19'),
(64, '10/12/2020', 'truong@gmail.com', '2020-12-09 20:13:44', '2020-12-09 20:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productDesc` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productType`, `productColor`, `productPrice`, `productImg`, `productDesc`, `created_at`, `updated_at`) VALUES
(129, 'S400', 'SEDAN', 'White', '6720000000', 'images/user-img/1607563114.png', 'Mercedes S400L phiên bản 2020 vừa ra mắt thị trường ô tô đã thu hút sự quan tâm của giới yêu xe sang. Đây là thương hiệu ô tô nổi tiếng luôn được nhiều người nhắc đến và khiến ai đã sở hữu những chiếc xe này đều thấy rất hài lòng. Mặc dù phải bỏ hầu bao số tiền không nhỏ để sở hữu nhưng  không làm chủ nhân thất vọng bởi Mercedes S400L được trang bị mọi thứ ở mức hoàn hảo.\r\n\r\nRa mắt thị trường ô tô từ năm 1954, dòng xe Mercedes S-Class đã khẳng định được vị thế của mình trong dòng xe cao cấp trong phân khúc Sedan hạng sang. Dòng xe này đã dành được không ít giải thưởng quốc tế danh giá, bỏ xa nhiều đối thủ cùng thời. Được giới chuyên gia cũng như những tiêu dùng đánh giá cao.\r\n\r\nTại thị trường Việt Nam, Mercedes S400L lần đầu ra mắt vào năm 2016 và đã nhanh chóng tạo nên tiếng vang chỉ trong thời gian ngắn. Dẫn đầu về chất lượng, tiện nghi, Mercedes S400L vững vàng trở thành một trong những sự lựa chọn hàng đầu dành cho những ông chủ đẳng cấp.', '2020-12-01 18:51:00', '2020-12-09 18:18:34'),
(130, 'CLS 500', 'SEDAN', 'Black', '4849000000', 'images/user-img/1606884462.png', 'Mercedes là thương hiệu xe nổi tiếng với những dòng xe sang trọng và độc đáo. Mercedes CLS 500 là chiếc xe đẳng cấp được đánh giá rất cao. Tại thị trường Việt Nam, CLS 500 được phân phối với số lượng ít ỏi hướng đến nhóm khách hàng giàu sang. Cùng tìm hiểu dòng xe đình đám này trong bài viết dưới đây. \r\n\r\nMercedes CLS là dòng xe độc đáo, mang tính tiên phong phân khúc xe coupe 4 cửa hay Sedan-coupe. Dòng xe này đã giành được hàng loạt các giải thưởng về thiết kế, giải thưởng xe được yêu thích nhất. Một thiết kế ấn tượng Mercedes trong phiên bản này cần phải kể đến là ClS 500.\r\nMercedes CLS 500 2020 hướng tới những người trẻ tuổi giàu có mong muốn sở hữu một chiếc coupe đậm chất thể thao. Chiếc xe mang đến không gian thoải mái với những trang bị hiện đại.\r\n\r\nCLS 500 2020 hút mọi ánh nhìn với thiết kế thân xe định hình bởi những đường cong liền lạc từ đầu xe tới tận cuối xe. Kiểu dáng của một chiếc coupe thể hiện ở vòm mái xe cong và thấp cộng với đuôi xe ngắn. Với thiết kế hoàn hảo giúp CLS 500 có chỉ số cản gió khí động học tương đối tối ưu và không hề thua kém bất kỳ chiếc coupe thể thao nào. Không chỉ được đánh giá cao về thiết kế, trang bị động cơ mạnh mẽ cũng là điểm cộng tuyệt vời cho dòng xe này.', '2020-12-01 18:52:12', '2020-12-01 21:47:42'),
(131, 'C250', 'SEDAN', 'Dark Blue', '2890000000', 'images/user-img/1607509592.png', 'Mercedes C250 2020 là một phiên bản nâng cấp sở hữu cho mình thiết kế đẹp mắt, sang trọng. Chỉ vừa mới xuất hiện trong thời gian rất ngắn nhưng chính sự xuất sắc của chúng đã làm say đắm biết bao con tim, gây ấn tượng rất mạnh mẽ đối với người nhìn. Khi có cơ hội khám phá và trải nghiệm thực tế, chúng ta có thể nhận ra đây không chỉ là mẫu xe có sự thay đổi tích cực bên ngoài mà còn đem đến hiệu năng vượt trội để sẵn sàng phục vụ mọi tiêu chí của các tay lái.', '2020-12-01 19:11:36', '2020-12-09 03:26:32'),
(132, 'V220', 'SUV', 'Brown', '3829000000', 'images/user-img/1606884446.png', 'Mercedes Benz V220 2020 là dòng xe gia đình 7 chỗ hạng sang sở hữu diện mạo cuốn hút với thiết kế sang trọng. Đây là một trong số những chiếc xe nổi bật trong phân khúc xe du lịch tại thị trường Việt Nam. Mẫu xe rất đa dụng và phù hợp với việc chở hàng hóa cho các doanh nghiệp vừa và nhỏ hay các đơn vị muốn cung cấp dịch vụ xe cao cấp. Với những trang bị hiện đại, động cơ bền bỉ sẽ mang lại cho khách hàng những trải nghiệm tốt nhất.\r\n\r\nLà phiên bản trong dòng xe Mercedes V-Class, V220 2020 đã đáp ứng tất cả các nhu cầu của người tiêu dùng về một mẫu xe rộng rãi, sang trọng và an toàn dành cho những chuyến đi chơi xa của cả gia đình. Làm phong phú thêm thị trường xe 7 chỗ, mang đến nhiều lựa chọn hơn cho khách hàng.', '2020-12-01 19:12:46', '2020-12-01 21:47:26'),
(133, 'G500', 'SUV', 'Black', '10829000000', 'images/user-img/1606875867.png', 'G500 được biết đến là biểu tượng có tầm ảnh hưởng lớn trong phân khúc xe Off-road. Bởi ra đời với mục tiêu là một dòng xe có độ an toàn cao, tiện nghi và khả năng vượt địa hình vượt trội. Theo đó, chúng được ứng dụng để lăn bánh trên những địa hình khắc nghiệt nhất. \r\n\r\nTrong bảng xếp hạng, Mercedes G500 trở thành một trong 8 Xe SUV siêu sang. Ngoài những con số ấn tượng, ngoại hình gây sự chú ý,  điều khiến cộng đồng xe càng thêm yêu thích nhất ở Mercedes G500 chính là khả năng off- road chất lừ, mạnh mẽ. Chúng vừa mang phong cách retro nhưng vẫn phảng phất nét hiện đại.\r\n\r\nKhi nói đến retro người ta chợt nghĩ ngay đến G500. Từ khi xuất hiện trước công chúng cho đến nay, hiếm dòng xe nào có thể vượt mặt được Mercedes-Benz G500. Mặc dù không phổ biến như những dòng xe sedan hạng sang nhưng G500 lại vô cùng nổi tiếng bởi thiết kế đặc trưng và khả năng vận hành Off- road chất phát ngất. Khi khám phá, bạn sẽ nhận ra dòng xe này in đậm phong cách của các dòng xe SUV vào thập kỷ 70 nhưng động cơ mà chúng sở hữu lại đến từ thế kỷ 21. Với những gì thể hiện, G500 xứng đáng trở thành một tượng đài huyền thoại!', '2020-12-01 19:24:27', '2020-12-01 19:24:27'),
(134, 'GLE 400', 'SUV', 'White', '3899000000', 'images/user-img/1606883401.png', 'Giới chuyên gia đang đặt Mercedes GLE 400 so với các phiên bản khác cùng phân khúc lên bàn cân và cho thấy mẫu xe này vẫn đang được chú ý và tiếp tục có khả năng phát triển trong tương lai.\r\n\r\nTại thị trường xe Việt vừa ra mắt mẫu SUV phiên bản nâng cấp, được  nhà sản xuất đặc biệt chú trọng về sự thay đổi ngoại hình, đó chính là chiếc Mercedes GLE 400. Với kiểu dáng trẻ trung, cá tính chính là điểm cộng tuyệt đối cho phiên bản mới này. Đây là một lựa chọn hoàn toàn rất đáng cân nhắc bên cạnh các dòng xe cùng phân khúc SUV hạng sang dưới 4 tỷ và chúng hứa hẹn đây sẽ là dòng xe thu hút đa dạng các nhóm khách hàng, chiều lòng được các khách hàng lớn tuổi, nhưng cũng rất hiện đại để chinh phục các tay lái trẻ.\r\n\r\nMercedes GLE 400 đơn giản là một chiếc SUV hoàn hảo được trang bị và tích hợp rất nhiều công nghệ tiên tiến vượt trội. Từ vẻ ngoài đầy cuốn hút cho đến thiết kế nội thất, tiện nghi và vận hành đều được chăm chút một cách tỉ mỉ, sắc sảo. Có thể thấy rằng GLE400 được hoàn thiện đến từng chi tiết dựa trên ngôn ngữ thiết kế ‘Sensual Purity’', '2020-12-01 21:29:33', '2020-12-01 21:30:01'),
(135, 'GLE 400 4Matic Coupe', 'SUV', 'Red', '4129000000', 'images/user-img/1606883513.png', 'GLE 400 4Matic Coupe suv 5 chỗ bản xăng với hộp số tự động có giá 4 tỷ 129 triệu.', '2020-12-01 21:31:53', '2020-12-01 21:31:53'),
(136, 'GLE 400 4Matic Exclusive', 'SUV', 'White', '3899000000', 'images/user-img/1606883709.png', 'GLE 400 4Matic Exclusive suv 5 chỗ bản xăng với hộp số tự động có giá 3 tỷ 899 triệu.', '2020-12-01 21:35:09', '2020-12-01 21:35:09'),
(138, 'GLC 300', 'SUV', 'Black', '2289000000', 'images/user-img/1606883974.png', 'Mercedes GLC300 chiếc xe cao cấp nhất trong dòng Mercedes-Benz GLC đến từ nước Đức. Đây là dòng xe khiến nhiều khách say đắm bởi độ sang trọng cũng như tiện nghi hiện đại. Phiên bản GLC 300 2020 vừa ra mắt đã tạo nên một cơn sốt trên thị trường ô tô. Và được đánh giá chiếm nhiều ưu thế hơn so với các đối thủ trong cùng phân khúc cả về thiết kế cũng như các tính năng khác.', '2020-12-01 21:39:34', '2020-12-01 21:39:34'),
(139, 'Maybach S650', 'SEDAN', 'Black', '14899000000', 'images/user-img/1607141049.png', 'Mercedes-Maybach đại diện cho một sự kết hợp hoàn hảo giữa sang trọng và lịch lãm. Thiết kế chau chuốt cùng công nghệ dẫn đầu xu thế của tương lai mang lại mức độ tiện nghi không gì sánh kịp và một phong cách di chuyển chưa từng có.Nhờ thiết kế tỉ mỉ đến từng chi tiết, mẫu Mercedes-Maybach S 650 mới cũng là một lời khẳng định về mức độ thành công và quyền lực của chủ nhân đối với những người đang chiêm ngưỡng.', '2020-12-04 21:04:09', '2020-12-04 21:04:09'),
(140, 'GLC 300 4Matic Coupe 2020', 'SUV', 'White', '3069000000', 'images/user-img/1607141181.png', 'Với thiết kế mạnh mẽ và cuốn hút hơn phiên bản GLC thông thường, GLC 300 Coupe là mẫu xe cá tính dành cho những bạn trẻ năng động, khác biệt. Xe có giá bán từ 3,069 tỷ đồng tại Việt Nam.\r\n\r\nNhững chiếc xe crossover lai coupe thực sự khác biệt so với các kiểu dáng xe còn lại. Thực dụng và tiện nghi không kém crossover/SUV truyền thống nhưng lại cá tính hơn nhiều, những chiếc coupe gầm cao luôn có sức hút riêng, nhất là đối với khách hàng trẻ. GLC 300 Coupe là một trong những mẫu coupe lai crossover thành công nhất của Mercedes-Benz và phiên bản 2020 là hấp dẫn hơn bao giờ hết.', '2020-12-04 21:06:21', '2020-12-04 21:06:21'),
(142, 'SL 400', 'SEDAN', 'White', '6709000000', 'images/user-img/1607518282.png', 'Không chỉ nổi danh với những mẫu xe sedan hay SUV sang trọng bậc nhất mà hãng xe nổi tiếng của Đức cũng không kém cạnh trong việc tạo ra những mẫu xe thể thao 2 cửa độc đáo cùng với sự tinh tế và đẳng cấp. Được ra mắt từ khá lâu chiếc xe trải qua nhiều thế hệ khác nhau và ngày càng được nâng cấp một cách hoàn thiện và chỉnh chu hơn về cả ngoài thất bên ngoài, nội thất bên trong. \r\nXe được trang bị khối động cơ mạnh mẽ cho khả năng vận hành vượt trội giúp chiếc xe cạnh tranh với các đối thủ trong cùng phân khúc như BMW 640i Cabrio, xe Porsche 911 Carrera Cabrio, Jaguar XK Convertible hay Maserati GranCabrio...\r\nĐánh giá chi tiết xe Mercedes-Benz SL 400 2020 về cảm giác lái\r\n \r\n\r\nXe được trang bị thế thống tay lái trợ lực với khối động cơ mạnh mẽ giúp chiếc xe có khả năng vận hành vượt trội mang đến cảm giác thích thú cho khách hàng. Đặc biệt là hệ thống treo khí nén Active Body Control và hệ thống lái Direct-Steer giúp chiếc xe vận hành êm ái trên mọi địa hình khác  nhau.', '2020-12-09 05:51:22', '2020-12-09 05:51:22'),
(143, 'GLB 250', 'SUV', 'Red', '3249000000', 'images/user-img/1607518419.png', 'Mercedes GLB 250 4MATIC năm 2021 mang đến sức mạnh cho chiếc xe gia đình trong thân xe SUV kiểu dáng chắc chắn. GLB 250 4MATIC, Mercedes có chiếc crossover SUV ba hàng ghế nhỏ đầu tiên. Tuy nhiên, với chiều dài khoảng 182 inch và rộng 72 inch, GLB có kích thước giống như chiếc Mercedes M-Class nguyên bản vào cuối những năm 1990, cũng có thể có hàng ghế thứ ba. Chiếc crossover có thể chở tối đa bảy hành khách, mặc dù bốn người lớn sẽ thoải mái hơn và có thể chở khối hàng hóa lớn với hàng ghế sau gập xuống.\r\n\r\nMercedes-Benz GLB 250 thiết kế mới hoàn toàn, hãng xe Đức tiếp tục đánh vào phân khúc crossover hạng sang, nhắm vào người dùng “ít tiền” nhưng muốn sở hữu xe sang.', '2020-12-09 05:53:39', '2020-12-09 05:53:39'),
(144, 'Wave', 'Xe may', 'Blue', '4909000000', 'images/user-img/1607568377.png', 'Mercedes GLS450 4Matic là phiên bản đầu tiên của Mercedes GLS đời 2021 được phân phối chính hãng tại Việt Nam, GLS 450 4MATIC có giá đề xuất chỉ 4,909 tỷ đồng.\r\n\r\nMercedes-Benz GLS450 được thiết kế lại năm 2021 đứng giữa phân khúc SUV cỡ lớn hạng sang. GLS 450 4Matic vượt qua các đối thủ khi nói đến hiệu suất, nhưng các điều khiển hệ thống thông tin giải trí phức tạp của GLS450 giữ nó lại.', '2020-12-09 05:55:12', '2020-12-09 19:46:17'),
(152, 'okokok', 'SUV', 'Black', '10000000000', 'images/user-img/1607568440.png', 'dkfoskfoskfsdf', '2020-12-09 19:47:20', '2020-12-09 19:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `testdrivers`
--

CREATE TABLE `testdrivers` (
  `id` bigint UNSIGNED NOT NULL,
  `userTest` bigint UNSIGNED NOT NULL,
  `productTest` bigint UNSIGNED NOT NULL,
  `testDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testdrivers`
--

INSERT INTO `testdrivers` (`id`, `userTest`, `productTest`, `testDate`, `status`, `created_at`, `updated_at`) VALUES
(12, 33, 131, '2020-12-10', 'Đã xử lý', '2020-12-09 02:30:08', '2020-12-09 02:30:08'),
(13, 33, 135, '2020-12-10', 'Đã xử lý', '2020-12-09 02:31:30', '2020-12-09 02:31:30'),
(14, 33, 135, '2020-12-10', 'Đã xử lý', '2020-12-09 02:31:53', '2020-12-09 02:31:53'),
(15, 32, 139, '2020-12-10', 'Chưa xử lý', '2020-12-09 05:59:09', '2020-12-09 05:59:09'),
(16, 32, 136, '2020-12-18', 'Chưa xử lý', '2020-12-09 06:00:03', '2020-12-09 06:00:03'),
(17, 37, 142, '2020-12-22', 'Chưa xử lý', '2020-12-09 18:50:10', '2020-12-09 18:50:10'),
(18, 37, 139, '2020-12-16', 'Chưa xử lý', '2020-12-09 18:51:16', '2020-12-09 18:51:16'),
(19, 37, 131, '2020-12-18', 'Chưa xử lý', '2020-12-09 18:52:42', '2020-12-09 18:52:42'),
(20, 37, 140, '2020-12-19', 'Chưa xử lý', '2020-12-09 18:58:53', '2020-12-09 18:58:53'),
(21, 39, 144, '2020-12-11', 'Chưa xử lý', '2020-12-09 19:14:21', '2020-12-09 19:14:21'),
(22, 40, 144, '2020-12-11', 'Chưa xử lý', '2020-12-09 19:42:14', '2020-12-09 19:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$eDw.hH8aIYnDZx/.o8CYnuRJBgOlok/wgTgUxDPx2r54lPwFw6vYi', 'Admin', NULL, '2020-12-01 07:31:49', '2020-12-01 07:32:02'),
(21, 'Nguyễn Đức Việt', 'ducviet300397@gmail.com', '0396400087', NULL, '$2y$10$VyBTREaNrm/NrJ5rrAfC2.RxecnBLSWCFnck.v9kn86LskLSujFWe', 'Admin', NULL, '2020-12-01 07:50:28', '2020-12-09 19:49:32'),
(23, 'Hà', 'ha.nguyen@gmail.com', '0387800002', NULL, '$2y$10$EW27TX16l72glghYta8onu0gl9bVGB7IciZj2.g0vPl02/H9DgKOW', 'User', NULL, '2020-12-02 07:12:56', '2020-12-02 07:12:56'),
(25, 'Quỳnh', 'quynh@gmail.com', '0959686846', NULL, '$2y$10$s/Pla3VHaM1EBvvih6rlYeqOs2FiXuzJBzGak8PHfVoNFZW9rDES.', 'User', NULL, '2020-12-03 02:49:17', '2020-12-03 02:49:17'),
(26, 'Dương', 'duong@gmail.com', '0399499958', NULL, '$2y$10$.hqx2.6Z.gLrujMCFsOOBu11Nvifu25DgOyALpVVqNmHTRgRogJxq', 'User', NULL, '2020-12-03 07:18:33', '2020-12-06 20:41:24'),
(31, 'Hoa', 'hoa@gmail.com', '0303940400', NULL, '$2y$10$/LmADO7h6.Z9MmgthLgWOumj6KmVOqOIiXbeH76csEwrwkzZqbCiS', 'User', NULL, '2020-12-08 07:31:59', '2020-12-08 07:31:59'),
(32, 'Hai', 'hai@gmail.com', '093939494', NULL, '$2y$10$uumW6MQRUwhUtGGDD6vhJOde/afTT/1N1EClTLEsUPidaMfnM/hcq', 'User', NULL, '2020-12-08 07:59:55', '2020-12-08 07:59:55'),
(33, 'Hưng', 'hung.duong@gmail.com', '0960697979', NULL, '$2y$10$FGzbDVomLbB182LHM8hCuOlsAmdB2SwKPiwy4MU3qTk/puR88qLwe', 'User', NULL, '2020-12-09 02:28:08', '2020-12-09 02:28:08'),
(34, 'Nguyễn Thu Hà', 'nguyenthuha@gmail.com', '0909494949', NULL, '$2y$10$.DA.qsJZQbUz0oVGLVS8zezy.4h28Q3CmsPNffUNmPvK92RzZ42Tq', 'User', NULL, '2020-12-09 06:05:10', '2020-12-09 06:05:10'),
(35, 'Nguyễn Đức Dũng', 'nnguyendung@gmail.com', '0909394949', NULL, '$2y$10$QAH6pk63fGEQtbkwdXyI6O9DmV7eB3rMohFPwOmyr6mB5cfwA0Vca', 'User', NULL, '2020-12-09 06:08:56', '2020-12-09 06:08:56'),
(36, 'Đào Mạnh Quỳnh', 'quynh.dao@gmail.com', '0904000494', NULL, '$2y$10$EyRGWkWUBmlZ3C66/9YuVeMWFbWvJMmP2XyeeCPJhUFNHcvjFmdHW', 'User', NULL, '2020-12-09 06:11:06', '2020-12-09 06:11:06'),
(37, 'Nguyễn Thục Anh', 'thucanh@gmail.com', '0993949485', NULL, '$2y$10$ZuE/AC0nXDHv7p5SP1c.m.MZAgMjl7tet0F46ruoOzYwOEVTHhPbS', 'User', NULL, '2020-12-09 18:31:08', '2020-12-09 18:31:08'),
(38, 'Nguyễn Mai Hoa', 'maihoa@gmail.com', '0902939394', NULL, '$2y$10$sFqVnBEtfyG6bKrknsJ62eZVJ0PJhRakoWwxuNtJThwmTUZw7PqTi', 'User', NULL, '2020-12-09 18:34:47', '2020-12-09 18:34:47'),
(39, 'baby_kute', 'nguoila@gmail.com', '0939495959', NULL, '$2y$10$ocvQolTEbDo.zNvMsSqJTOxMV7xnKJe4CyWKEE.Q7dOEPCSHU8dj.', 'User', NULL, '2020-12-09 19:13:33', '2020-12-09 19:13:33'),
(40, 'Thảo TM', 'thaotm@gmail.com', 'fafsf', NULL, '$2y$10$q896u77wRpOimJLEywHoY.fTwuCmLAeF3AiIpczYN3s/MAChjwFx2', 'User', NULL, '2020-12-09 19:38:55', '2020-12-09 19:38:55'),
(41, 'truong', 'truong@gmail.com', '0903949494', NULL, '$2y$10$uONZFInYKsmncAtopt5ipuypzTo8DpOuaTWWOO.lAbTnHw9Qpc7sm', 'User', NULL, '2020-12-09 20:13:31', '2020-12-09 20:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `productId` (`productId`),
  ADD KEY `orderdetails_orderid_foreign` (`orderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_useremail_foreign` (`userEmail`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdrivers`
--
ALTER TABLE `testdrivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testdrivers_usertest_foreign` (`userTest`),
  ADD KEY `testdrivers_producttest_foreign` (`productTest`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `testdrivers`
--
ALTER TABLE `testdrivers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orderdetails_orderid_foreign` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `users` (`email`);

--
-- Constraints for table `testdrivers`
--
ALTER TABLE `testdrivers`
  ADD CONSTRAINT `testdrivers_producttest_foreign` FOREIGN KEY (`productTest`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `testdrivers_usertest_foreign` FOREIGN KEY (`userTest`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
