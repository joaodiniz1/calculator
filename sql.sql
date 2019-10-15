CREATE DATABASE IF NOT EXISTS `calculator` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `calculator`;

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `operation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` decimal(12,4) NOT NULL,
  `bonus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;