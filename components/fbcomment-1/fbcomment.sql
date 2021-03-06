
CREATE TABLE `fbcomment` (
  `id` int(11) NOT NULL COMMENT 'شناسه',
  `text` text COLLATE utf8_persian_ci NOT NULL COMMENT 'نظر',
  `user_id` int(11) NOT NULL COMMENT 'شناسه کاربر',
  `page_id` int(11) NOT NULL COMMENT 'صفحه',
  `table_name` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'نام جدول',
  `table_id` int(11) NOT NULL COMMENT 'شناسه جدول',
  `comment_id` int(11) NOT NULL COMMENT 'شناسه نظر معرف',
  `date` int(10) NOT NULL COMMENT 'زمان',
  `flag` int(1) NOT NULL COMMENT 'وضعیت',
  `hide` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='نظر/نظرات';

ALTER TABLE `fbcomment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `fbcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'شناسه';


--spi--
