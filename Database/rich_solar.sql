-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: rich_solar
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'solar_batteries','2023-05-31 17:29:26','2023-05-31 17:29:26'),(2,'solar_panels','2023-05-31 17:29:35','2023-05-31 17:29:35'),(3,'solar_controllers','2023-05-31 17:29:47','2023-05-31 17:29:47'),(4,'solar_lights','2023-05-31 17:29:56','2023-05-31 17:29:56'),(5,'solar_fans','2023-05-31 17:30:05','2023-05-31 17:30:05'),(6,'solar_freezers','2023-05-31 17:30:14','2023-05-31 17:30:14'),(8,'solar_inverters','2023-05-31 17:30:56','2023-05-31 17:30:56');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (42,'2023_05_25_184041_create_solar_rights_table',1),(100,'2023_05_29_091549_create_solar_battery_models_table',2),(130,'2023_05_25_184026_create_solar_power_controllers_table',3),(178,'2014_10_12_000000_create_users_table',4),(179,'2014_10_12_100000_create_password_reset_tokens_table',4),(180,'2019_08_19_000000_create_failed_jobs_table',4),(181,'2019_12_14_000001_create_personal_access_tokens_table',4),(182,'2023_05_25_183851_create_solar_panels_table',4),(183,'2023_05_25_183931_create_solar_batteries_table',4),(184,'2023_05_25_183947_create_solar_fans_table',4),(185,'2023_05_25_184000_create_solar_inverters_table',4),(186,'2023_05_25_185815_create_solar_freezers_table',4),(187,'2023_05_26_103720_create_solar_lights_table',4),(188,'2023_05_29_215714_create_solar_controllers_table',4),(189,'2023_05_31_130030_create_categories_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_batteries`
--

DROP TABLE IF EXISTS `solar_batteries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_batteries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricity_stored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricity_released` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_batteries`
--

LOCK TABLES `solar_batteries` WRITE;
/*!40000 ALTER TABLE `solar_batteries` DISABLE KEYS */;
INSERT INTO `solar_batteries` VALUES (5,'pictures/mHY6Kv3T54eFTPTqgoQd9Hx0WXGvxYIJavPJ51Tl.png','12.8V 100AH','Lithium Solar Battery','1.28kwh','1.2kwh','SLL 10,674','solar_batteries','2023-06-01 00:09:58','2023-06-01 00:09:58');
/*!40000 ALTER TABLE `solar_batteries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_battery_models`
--

DROP TABLE IF EXISTS `solar_battery_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_battery_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_battery_models`
--

LOCK TABLES `solar_battery_models` WRITE;
/*!40000 ALTER TABLE `solar_battery_models` DISABLE KEYS */;
/*!40000 ALTER TABLE `solar_battery_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_controllers`
--

DROP TABLE IF EXISTS `solar_controllers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_controllers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_controllers`
--

LOCK TABLES `solar_controllers` WRITE;
/*!40000 ALTER TABLE `solar_controllers` DISABLE KEYS */;
INSERT INTO `solar_controllers` VALUES (3,'pictures/RNQzijlucqzwcIs6yCZbMeu6NVJr2mSMaVBuUDSM.png','MPPT 12V/96V-30A','0.4W-3KW','-','SLL 4,878','Choose a category','2023-06-01 00:14:51','2023-06-01 00:14:51');
/*!40000 ALTER TABLE `solar_controllers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_fans`
--

DROP TABLE IF EXISTS `solar_fans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_fans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_fans`
--

LOCK TABLES `solar_fans` WRITE;
/*!40000 ALTER TABLE `solar_fans` DISABLE KEYS */;
INSERT INTO `solar_fans` VALUES (4,'pictures/p8kDLjUstlpd7zfWVEVKPJtVAyInGFX7b6HzI5Hf.png','Plank type electric fan','SLL 1,899','solar_fans','2023-06-01 00:16:35','2023-06-01 00:16:35');
/*!40000 ALTER TABLE `solar_fans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_freezers`
--

DROP TABLE IF EXISTS `solar_freezers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_freezers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `litres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `12_hours_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `24_hours_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materials` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_freezers`
--

LOCK TABLES `solar_freezers` WRITE;
/*!40000 ALTER TABLE `solar_freezers` DISABLE KEYS */;
INSERT INTO `solar_freezers` VALUES (2,'pictures/z4kQ5sdMvluLXzzNr8tq0buMh4P1udoEr4MvKnBd.png','110L','Buy freezer separately = SLL 13,524','660x550x883mm','60w','1.44kwh','0.72kwh','A full set of materials（Work 12 hours）','160W*3pcs','12V 150AH*1pcs Controller：12V 24V30A','SLL 32,144','solar_freezers','2023-06-01 00:20:01','2023-06-01 00:20:01');
/*!40000 ALTER TABLE `solar_freezers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_inverters`
--

DROP TABLE IF EXISTS `solar_inverters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_inverters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `output_voltage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `output_current` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery_wire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_inverters`
--

LOCK TABLES `solar_inverters` WRITE;
/*!40000 ALTER TABLE `solar_inverters` DISABLE KEYS */;
INSERT INTO `solar_inverters` VALUES (2,'pictures/veXFnqrFlPkHilzGj8xSFnBX14wjFk7DldmMmtxd.png','12V/500W','-','15kwInverter:11kw','-','150V-336V','40A','11m','SLL 1,700','Choose a category','2023-06-01 00:26:18','2023-06-01 00:26:18');
/*!40000 ALTER TABLE `solar_inverters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_lights`
--

DROP TABLE IF EXISTS `solar_lights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_lights` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_lights`
--

LOCK TABLES `solar_lights` WRITE;
/*!40000 ALTER TABLE `solar_lights` DISABLE KEYS */;
INSERT INTO `solar_lights` VALUES (5,'pictures/DiC3XC6l3ZAkA4GHWf55zkH0OFgSwEUNIh2ln67W.png','Multiple lights-90W','6V 8W','3.2V 5.5AH','SLL 1,304','solar_lights','2023-06-01 00:07:31','2023-06-01 00:07:31');
/*!40000 ALTER TABLE `solar_lights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_panels`
--

DROP TABLE IF EXISTS `solar_panels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_panels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wattage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_panels`
--

LOCK TABLES `solar_panels` WRITE;
/*!40000 ALTER TABLE `solar_panels` DISABLE KEYS */;
INSERT INTO `solar_panels` VALUES (6,'pictures/sjDfvTMmENUa0f6WBe1ZOkEsqtWNZK7aep062qH8.png','385 WATT-MONO','385w','38V','9A','1979*1002*35mm','SLL 6,762','solar_panels','2023-06-01 00:31:58','2023-06-01 00:31:58');
/*!40000 ALTER TABLE `solar_panels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_power_controllers`
--

DROP TABLE IF EXISTS `solar_power_controllers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_power_controllers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_power_controllers`
--

LOCK TABLES `solar_power_controllers` WRITE;
/*!40000 ALTER TABLE `solar_power_controllers` DISABLE KEYS */;
/*!40000 ALTER TABLE `solar_power_controllers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_rights`
--

DROP TABLE IF EXISTS `solar_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_rights` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_panel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_rights`
--

LOCK TABLES `solar_rights` WRITE;
/*!40000 ALTER TABLE `solar_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `solar_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'Sonia Shanahan','tom.marks@example.com','2023-05-31 17:11:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','hBEAMSa2A8','2023-05-31 17:11:16','2023-05-31 17:11:16'),(8,'Dayne Hettinger','mose.sporer@example.org','2023-05-31 17:11:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','WzpUnpjwE4','2023-05-31 17:11:16','2023-05-31 17:11:16'),(9,'Blair Haley','roger30@example.net','2023-05-31 17:11:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','WkcxYlPgrU','2023-05-31 17:11:16','2023-05-31 17:11:16'),(10,'Esta Quitzon','erling.collier@example.com','2023-05-31 17:11:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','FSxwxyPt5i','2023-05-31 17:11:16','2023-05-31 17:11:16'),(11,'lithium','info@richsolar.com',NULL,'$2y$10$qHT3GXYTpaiFrbFfq94EW.OBpfarUpj/.jADooazf9bmJMQ/Ui/LO',NULL,'2023-05-31 17:27:59','2023-05-31 17:27:59');
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

-- Dump completed on 2023-05-31 16:51:41
