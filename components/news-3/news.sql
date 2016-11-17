
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'عنوان خبر',
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'شرح خبر',
  `visit` int(11) NOT NULL,
  `pic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'عکس',
  `tag` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'کلمات کلیدی',
  `date_created` int(11) NOT NULL COMMENT 'تاریخ',
  `date_updated` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='خبر/اخبار';

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--spi--
