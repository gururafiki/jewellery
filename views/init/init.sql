-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.53 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица gururafiki_jewerly.buys
CREATE TABLE IF NOT EXISTS `buys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) unsigned DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) unsigned DEFAULT NULL,
  `count` int(11) unsigned DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(11) unsigned DEFAULT NULL,
  `month` int(11) unsigned DEFAULT NULL,
  `year` int(11) unsigned DEFAULT NULL,
  `total_price` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_buys_product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.buys: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `buys` DISABLE KEYS */;
INSERT INTO `buys` (`id`, `username`, `product_id`, `product_name`, `product_price`, `count`, `date`, `day`, `month`, `year`, `total_price`) VALUES
	(1, 'Ювелирная фабрика Litvinenko', 1, 'Кольцо из золота и платины с бриллиантом и жемчугом', 5000, 3, '17.10.2017 (17:05:00)', 17, 10, 2017, 15000);
/*!40000 ALTER TABLE `buys` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_unical` int(11) unsigned DEFAULT NULL,
  `count_total` int(11) unsigned DEFAULT NULL,
  `count_sold` int(11) unsigned DEFAULT NULL,
  `count_available` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.categories: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `count_unical`, `count_total`, `count_sold`, `count_available`) VALUES
	(1, 'Кольца', 1, 3, 1, 2);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.genders
CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_unical` int(11) unsigned DEFAULT NULL,
  `count_total` int(11) unsigned DEFAULT NULL,
  `count_sold` int(11) unsigned DEFAULT NULL,
  `count_available` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.genders: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` (`id`, `name`, `count_unical`, `count_total`, `count_sold`, `count_available`) VALUES
	(1, 'Женщины', 1, 3, 1, 2);
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.inserts
CREATE TABLE IF NOT EXISTS `inserts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `carat` int(11) unsigned DEFAULT NULL,
  `count_unical` int(11) unsigned DEFAULT NULL,
  `count_total` int(11) unsigned DEFAULT NULL,
  `count_sold` int(11) unsigned DEFAULT NULL,
  `weight_sold` double DEFAULT NULL,
  `count_available` int(11) unsigned DEFAULT NULL,
  `weight_available` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.inserts: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `inserts` DISABLE KEYS */;
INSERT INTO `inserts` (`id`, `name`, `weight`, `carat`, `count_unical`, `count_total`, `count_sold`, `weight_sold`, `count_available`, `weight_available`) VALUES
	(1, 'Бриллиант', 0.6, 3, 1, 3, 1, 0.2, 2, 0.4),
	(2, 'Жемчуг', 0.6, 3, 1, 3, 1, 0.2, 2, 0.4);
/*!40000 ALTER TABLE `inserts` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.metals
CREATE TABLE IF NOT EXISTS `metals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `count_unical` int(11) unsigned DEFAULT NULL,
  `count_total` int(11) unsigned DEFAULT NULL,
  `count_sold` int(11) unsigned DEFAULT NULL,
  `weight_sold` double DEFAULT NULL,
  `count_available` int(11) unsigned DEFAULT NULL,
  `weight_available` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.metals: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `metals` DISABLE KEYS */;
INSERT INTO `metals` (`id`, `name`, `weight`, `count_unical`, `count_total`, `count_sold`, `weight_sold`, `count_available`, `weight_available`) VALUES
	(1, 'Золото', 4.5, 1, 3, 1, 1.5, 2, 3),
	(2, 'Платина', 3, 1, 3, 1, 1.5, 2, 2);
/*!40000 ALTER TABLE `metals` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metal_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metal_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metal_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metal_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metal_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_buy` int(11) unsigned DEFAULT NULL,
  `profit` int(11) unsigned DEFAULT NULL,
  `price_sell` int(11) unsigned DEFAULT NULL,
  `profit_sum` int(11) unsigned DEFAULT NULL,
  `count` int(11) unsigned DEFAULT NULL,
  `count_sold` int(11) unsigned DEFAULT NULL,
  `size` double DEFAULT NULL,
  `weight_full` double DEFAULT NULL,
  `weight_metals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_inserts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carat_inserts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_total` int(11) unsigned DEFAULT NULL,
  `count_available` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.products: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `metal_1`, `metal_2`, `metal_3`, `metal_4`, `metal_5`, `insert_1`, `insert_2`, `insert_3`, `insert_4`, `insert_5`, `gender`, `type`, `producer`, `price_buy`, `profit`, `price_sell`, `profit_sum`, `count`, `count_sold`, `size`, `weight_full`, `weight_metals`, `weight_inserts`, `carat_inserts`, `count_total`, `count_available`) VALUES
	(1, 'Кольцо из золота и платины с бриллиантом и жемчугом', 'Золото', 'Платина', 'none', 'none', 'none', 'Бриллиант', 'Жемчуг', 'none', 'none', 'none', 'Женщины', 'Кольца', 'Ювелирная фабрика Litvinenko', 5000, 2, 10000, 5000, NULL, 1, 17.5, 2.9, '{"\\u0417\\u043e\\u043b\\u043e\\u0442\\u043e":1.5,"\\u041f\\u043b\\u0430\\u0442\\u0438\\u043d\\u0430":1}', '{"\\u0411\\u0440\\u0438\\u043b\\u043b\\u0438\\u0430\\u043d\\u0442":0.2,"\\u0416\\u0435\\u043c\\u0447\\u0443\\u0433":0.2}', '{"\\u0411\\u0440\\u0438\\u043b\\u043b\\u0438\\u0430\\u043d\\u0442":1,"\\u0416\\u0435\\u043c\\u0447\\u0443\\u0433":1}', 3, 2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.sellers
CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(11) unsigned DEFAULT NULL,
  `month` int(11) unsigned DEFAULT NULL,
  `year` int(11) unsigned DEFAULT NULL,
  `count` int(11) unsigned DEFAULT NULL,
  `total` int(11) unsigned DEFAULT NULL,
  `count_available` int(11) unsigned DEFAULT NULL,
  `count_unical` int(11) unsigned DEFAULT NULL,
  `count_sold` int(11) unsigned DEFAULT NULL,
  `count_total` int(11) unsigned DEFAULT NULL,
  `total_price` int(11) unsigned DEFAULT NULL,
  `count_transactions` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.sellers: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `sellers` DISABLE KEYS */;
INSERT INTO `sellers` (`id`, `name`, `group`, `date`, `day`, `month`, `year`, `count`, `total`, `count_available`, `count_unical`, `count_sold`, `count_total`, `total_price`, `count_transactions`) VALUES
	(1, 'Ювелирная фабрика Litvinenko', 'own', '17.10.2017 (17:05:00)', 17, 10, 2017, NULL, NULL, 2, 1, 1, 3, 15000, 1);
/*!40000 ALTER TABLE `sellers` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.sells
CREATE TABLE IF NOT EXISTS `sells` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) unsigned DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) unsigned DEFAULT NULL,
  `count` int(11) unsigned DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(11) unsigned DEFAULT NULL,
  `month` int(11) unsigned DEFAULT NULL,
  `year` int(11) unsigned DEFAULT NULL,
  `total_price` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_sells_product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.sells: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `sells` DISABLE KEYS */;
INSERT INTO `sells` (`id`, `username`, `product_id`, `product_name`, `product_price`, `count`, `date`, `day`, `month`, `year`, `total_price`) VALUES
	(1, 'Александр Марченко', 1, 'Кольцо из золота и платины с бриллиантом и жемчугом', 10000, 1, '17.10.2017 (17:04:59)', 17, 10, 2017, 10000);
/*!40000 ALTER TABLE `sells` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.sizes
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` double DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.sizes: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` (`id`, `name`, `type`, `count`) VALUES
	(1, 17.5, 'Кольца', 2);
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;

-- Дамп структуры для таблица gururafiki_jewerly.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) unsigned DEFAULT NULL,
  `total` int(11) unsigned DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(11) unsigned DEFAULT NULL,
  `month` int(11) unsigned DEFAULT NULL,
  `year` int(11) unsigned DEFAULT NULL,
  `total_price` int(11) unsigned DEFAULT NULL,
  `count_transactions` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы gururafiki_jewerly.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `group`, `key`, `login`, `password`, `count`, `total`, `date`, `day`, `month`, `year`, `total_price`, `count_transactions`) VALUES
	(1, 'Александр Марченко', 'admin', 'afiotc7o6acbSn89n3cn', 'admin', 'admin', NULL, NULL, '17.10.2017 (17:04:59)', 17, 10, 2017, 10000, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
