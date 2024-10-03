
--
-- Table structure for table `sa_neighborhoods`
--

CREATE TABLE `sa_neighborhoods` (
  `id` int(11) NOT NULL,
  `nameAr` varchar(64) NOT NULL,
  `nameEn` varchar(64) NOT NULL,
  `cityId` int(11) NOT NULL,
  `neCoordinates` varchar(64) NOT NULL,
  `swCoordinates` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sa_neighborhoods`
--

INSERT INTO `sa_neighborhoods` (`id`, `nameAr`, `nameEn`, `cityId`, `neCoordinates`, `swCoordinates`) VALUES
(28, 'المنهل', 'al manhal', 1, '18.23004686,42.52403780', '18.21814714,42.50670844'),
(29, 'النصب', 'an nasb', 1, '18.22519281,42.51503934', '18.21472354,42.50058994'),
(30, 'وسط المدينة', 'down town', 1, '18.22160324,42.50440063', '18.21260073,42.49771760'),
(31, 'النزهة', 'an nuzhah', 1, '18.21795259,42.51796121', '18.20282188,42.50814647'),

--
-- Indexes for table `sa_neighborhoods`
--
ALTER TABLE `sa_neighborhoods` ADD UNIQUE KEY `id` (`id`);