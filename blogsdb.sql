-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 07 Oca 2025, 19:23:44
-- Sunucu sürümü: 8.3.0
-- PHP Sürümü: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogsdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` int NOT NULL,
  `category_status` tinyint(1) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `slug`, `parent_id`, `category_status`, `created_date`) VALUES
(1, 'PHP', 'php', 0, 1, '2024-12-29 01:30:12'),
(2, 'JAVASCRİPT', 'javascript', 0, 1, '2024-12-29 01:30:30'),
(3, 'Php Alt kategori', 'php-alt-kategori', 1, 1, '2024-12-29 01:30:57'),
(4, 'Javascript Alt kategori', 'javascript-alt-kategori', 2, 1, '2024-12-29 01:31:13'),
(5, 'Değişkenler', 'degiskenler', 1, 1, '2024-12-29 23:07:57'),
(8, 'Diziler', 'diziler', 1, 1, '2024-12-29 23:08:44'),
(7, 'Döngüler', 'donguler', 1, 1, '2024-12-29 23:08:32'),
(9, 'while Döngüsü', 'while-dongusu', 1, 1, '2024-12-29 23:09:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `comment_status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `name`, `email`, `content`, `comment_status`, `created_date`) VALUES
(15, 1, 265, 'Serhat Güneş', 'prodex1334@gmail.com', 'Merhaba. içerik mükemmel ', 1, '2025-01-06 19:48:07'),
(14, 1, 356, 'EREN cennetKuşu', 'prodex1334@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis soluta sit dolorem nisi voluptates aliquid quaerat voluptatem dolor distinctio ad!', 1, '2025-01-06 17:23:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int NOT NULL,
  `view_count` int NOT NULL,
  `post_status` int NOT NULL,
  `created_date_posts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `title`, `slug`, `content`, `image`, `category_id`, `view_count`, `post_status`, `created_date_posts`) VALUES
(1, 5, 'Javascript nedir?', 'javascript-nedir', 'Javascript nedir?111', 'image.jpeg', 4, 3, 1, '2024-12-28 22:34:20'),
(2, 5, 'Php Nedir?', 'php-nedir', 'Php Nedir?', 'asda.png', 3, 0, 1, '2024-12-28 22:34:47'),
(3, 5, 'php değişken nedir', 'php-degisken-nedir', 'asdasdasd', 'php1.jpg', 3, 0, 1, '2024-12-29 19:49:41'),
(4, 5, 'while Döngüsü', 'while-dongusu', 'Program yazarken bazen bir şartın gerçekleşip gerçekleşmemesine göre farklı işlemler yaptırmamız gerekebilir. Böyle durumlarda if-else kontrol yapısı kullanılır. \r\n\r\nBu yapıda durumu kontrol etmek için bir şart belirtilir ve bu şartın gerçekleşmesi durumunda hangi işlemler, gerçekleşmemesi durumunda hangi işlemlerin yapılacağı ayrı ayrı yazılır.\r\n\r\nİf else yapısının kullanımı şu şekildedir:\r\n\r\nif (şartımız)\r\n\r\n{\r\n\r\nDoğruysa yapılacak işlemler\r\n\r\n}\r\n\r\nElse\r\n\r\n{\r\n\r\nYanlışsa yapılacak işlemler\r\n\r\n}\r\n\r\n \r\n\r\nAçıklama: if komutundan sonra parantez içerisinde şart yazılır.\r\n\r\nİlk süslü parantezler arasına, şart doğru ise yapılacak işlemler yazılır.\r\n\r\nElse kısmı isteğe bağlıdır. Şart yanlış ise yapılacak işlemler, else komutundan sonraki parantezler arasına yazılır.\r\n\r\nÖrnek: Bu konu işlenirken şu örnek mutlaka yapılır :) Öğrencinin girdiği not 50&#039;den küçükse &quot;Kaldı&quot;, büyükse &quot;Geçti&quot; yazan program:\r\n\r\nConsole.Write(&quot;Notunuzu giriniz: &quot;);\r\nint a = int.Parse(Console.ReadLine());\r\n \r\nif(a&lt;50)\r\n{\r\nConsole.WriteLine(&quot;Kaldınız.&quot;);\r\n}\r\nelse\r\n{\r\nConsole.WriteLine(&quot;Geçtiniz.&quot;);\r\n}\r\n \r\nConsole.ReadKey();\r\nElse kısmı isteğe bağlıdır. Yani şart yanlışken yapılacak birşey yoksa else kısmı yazılmayabilir. Aşağıdaki örnek 0&#039;dan küçük bir sayı girildiğinde uyarı veriyor, else kullanılmadığı için şart tutmadığında herhangi bir şey yapılmayacaktır.\r\n\r\nConsole.Write(&quot;Sayı giriniz: &quot;);\r\nint a = int.Parse(Console.ReadLine());\r\n \r\nif(a&lt;0)\r\n{\r\nConsole.WriteLine(&quot;Pozitif bir sayı giriniz.&quot;);\r\n}\r\n \r\nConsole.ReadKey();\r\nAyrıca şart doğru ya da yanlış olduğunda yapılacak işlemler 1 satırdan oluşuyorsa süslü parantezler kullanılmayabilir: \r\n\r\nConsole.Write(&quot;Sayı giriniz: &quot;);\r\nint a = int.Parse(Console.ReadLine());\r\n \r\nif(a&lt;0)\r\nConsole.WriteLine(&quot;Pozitif bir sayı giriniz.&quot;);\r\n       \r\nConsole.ReadKey();\r\nParantezsiz kullanıma bir başka örnek:\r\n\r\nConsole.Write(&quot;Notunuzu giriniz: &quot;);\r\nint a = int.Parse(Console.ReadLine());\r\n \r\nif(a&lt;50) Console.WriteLine(&quot;Kaldınız.&quot;);\r\nelse Console.WriteLine(&quot;Geçtiniz.&quot;);\r\n \r\nConsole.ReadKey();\r\nYazacağımız kodlar bir satırdan fazla ise mutlaka süslü parantezler arasına almalıyız.\r\n\r\nelse if Kullanımı\r\nEğer gerçekleşebilecek ihtimallerin sayısı 2&#039;den fazla ise else if kullanarak her durum için yapılacak işlemleri belirtebiliriz.\r\n\r\nİf komutundan sonra ilk şartımız yazılarak işe başlanır. Diğer şartlar içinse else if kullanılır.\r\n\r\nŞartlardan hiçbirinin gerçekleşmemesi durumunda yapılmasını istediğimiz kodları ise else kısmına yazarız. Else kısmı yine isteğe bağlıdır. \r\n\r\nÖrnek: 100&#039;lük sistemde girilen notun 5&#039;lik sisteme çevrilmesi:\r\n\r\nConsole.Write(&quot;Notunuzu giriniz: &quot;);\r\nint a = int.Parse(Console.ReadLine());\r\n \r\nif (a &lt; 0)\r\n    Console.WriteLine(&quot;Pozitif bir sayı giriniz.&quot;);\r\nelse if (a &lt; 50)\r\n    Console.WriteLine(&quot;Notunuz: 1&quot;);\r\nelse if (a &lt; 60)\r\n    Console.WriteLine(&quot;Notunuz: 2&quot;);\r\nelse if (a &lt; 70)\r\n    Console.WriteLine(&quot;Notunuz: 3&quot;);\r\nelse if (a &lt; 85)\r\n    Console.WriteLine(&quot;Notunuz: 4&quot;);\r\nelse if (a &lt; 100)\r\n    Console.WriteLine(&quot;Notunuz: 5&quot;);\r\nelse\r\n    Console.WriteLine(&quot;Geçersiz bir not girdiniz.&quot;);\r\n       \r\nConsole.ReadKey();', 'php-while-dongusu.jpg', 9, 3, 1, '2024-12-29 20:11:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE IF NOT EXISTS `post_categories` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `tag_id` int NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `replyadmin`
--

DROP TABLE IF EXISTS `replyadmin`;
CREATE TABLE IF NOT EXISTS `replyadmin` (
  `reply_id` int NOT NULL AUTO_INCREMENT,
  `reply_userID` int NOT NULL,
  `reply_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `reply_content` text COLLATE utf8mb4_general_ci NOT NULL,
  `reply_status` int NOT NULL,
  `reply_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `replyadmin`
--

INSERT INTO `replyadmin` (`reply_id`, `reply_userID`, `reply_name`, `reply_content`, `reply_status`, `reply_created_date`) VALUES
(37, 356, 'Admin', 'asdasdasd', 1, '2025-01-06 19:42:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `set_id` int NOT NULL AUTO_INCREMENT,
  `set_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `set_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `set_images` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `set_keywords` text COLLATE utf8mb4_general_ci NOT NULL,
  `set_author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `set_email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `set_instagram` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `set_facebook` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `set_twitter` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`set_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`set_id`, `set_title`, `set_description`, `set_images`, `set_keywords`, `set_author`, `set_email`, `set_instagram`, `set_facebook`, `set_twitter`) VALUES
(1, 'Blogs', 'deneme1', '677086fccb32c6.96175583.png', 'denem2', 'yazar kişi', 'deneme@gmail.com', 'https://instagram.com', 'https://facebook.com', 'https://x.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tags_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`tags_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `tags`
--

INSERT INTO `tags` (`tags_id`, `name`, `slug`) VALUES
(13, 'En çok tercih edileneler', 'en-cok-tercih-edileneler'),
(14, 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` tinyint DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `role_id`, `user_status`, `created_date`) VALUES
(3, 'Mehmet Reşit Akın', 'resit.akin96@gmail.com', '$2y$10$4B464Rk1/1oxCAOPUij21O8PvZ5ejRnu/GpsfGKtBwNJEToxa7Y4C', 1, 1, '2024-12-22 12:49:10'),
(4, 'reşit', 'resit@gmail.com', '$2y$10$7QQG3XvZab7Y7TR4sQA4.emA4FaCnKeEjLccsirt95UkgeMA16Op2', 1, 1, '2024-12-22 16:23:17'),
(5, 'Admin', 'admin@admin.com', '$2y$10$06Q7WOCKBORMGcYMPjeshORdPwjriNt2XFTNDuo1AV/UBb.EDYEAa', 1, 1, '2024-12-23 21:00:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
