-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: shop_db
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin_level` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'yamazaki','higeoyaji.726@gmail.com',NULL,'$2y$10$stDfK2Wqde8Pvr.2fiXaTusGSHwLhyXVVf/YF3KRb.GF2narIyKP6',NULL,NULL,NULL,'gpeiBBIacR15mFo01HMA0TmPk1qj1hMcNGfjQiHeGkmA9BKnwl33q6p93ZFN',NULL,NULL,'2022-04-17 16:23:20','2022-04-17 16:23:20',2),(3,'higeoyaji','yusaku@aaa.com',NULL,'$2y$10$TBz30Vh8ZmwUfxERX3YqHOHp3G2FxnK3yTv1unJY4QRhnmNTDTeFm',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-18 22:12:24','2022-04-18 22:12:24',0),(9,'hige','aaa@ssss',NULL,'$2y$10$hbtzpW7O6eeGLrVZfYfeAOMAbiJNeg2v8z538H1myxeyJyG2yatTi',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 17:48:32','2022-04-24 17:48:32',1),(10,'あああ','bbb@gmail.com',NULL,'$2y$10$yLUqmx56/V9hPZ9uS7S9hOsUw8e/TpkeF983KPgXM3gei7cXZaoJG',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 20:30:12','2022-04-26 21:31:39',0),(11,'亀井','kamei@gmail.com',NULL,'$2y$10$nFw8kK3a84RYQ2pJ1S58gOLAtoUlPeRgpmq3fTmbJsjdObiwkcCmC',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-26 22:36:22','2022-04-26 22:36:22',0),(13,'佐藤','satou@gmail.com',NULL,'$2y$10$3idzDOYjRkpNCxmo3nfYDer6OT5Qo9WIhv1zuCHDYDV3gWD2gN446',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-26 22:43:20','2022-04-26 22:44:41',0),(14,'伊藤','itou@gmail.com',NULL,'$2y$10$tO.stHFQjNd52QYlvZ1KeuuDDtggTvkbDJ2PSnveMBV7BGuXGBxR.',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-27 20:23:18','2022-04-27 20:23:18',0),(15,'鈴木','suzuki@gmail.com',NULL,'$2y$10$1XO6ymj19zcg7.kIP6J4R.2zNpBKZ1vsmAuhIz0wwiDT0bha.FHO2',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-27 20:31:17','2022-04-27 20:31:17',0),(16,'相川','aikawa@gmail.com',NULL,'$2y$10$GPh.mcHzPM3VYn1r4FXpwu6tbHlagwjqzAhz4k1UhF8fsO.mgkTee',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-27 20:34:54','2022-04-27 20:34:54',0),(18,'堀','hori@gamil.com',NULL,'$2y$10$NCVJjgN9j/TVkgzVER7CzeQ09jrTWlTPbGHq5PnZ5wDvJOkdfpz.e',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-27 21:45:14','2022-04-27 21:45:14',1),(19,'岡部','okabe@gmail.com',NULL,'$2y$10$9Ahu4VLl/szC3zAlZm1NWOU05uCv83d88HOXr8dih2nqPkfiYV0y2',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-27 22:26:37','2022-04-27 22:26:37',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-24 10:16:15
