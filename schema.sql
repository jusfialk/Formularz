CREATE TABLE `udar` (
  `ID` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `what_is_stroke` int(11) NOT NULL,
  `which_is_more_frequent` int(11) NOT NULL,
  `causes` varchar(127) NOT NULL,
  `symptoms` varchar(127) NOT NULL,
  `causes_young_people` int(11) NOT NULL,
  `age_stroke` int(11) NOT NULL,
  `prevention` varchar(127) NOT NULL,
  `recognition` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `death` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `udar` ADD PRIMARY KEY (`ID`);

ALTER TABLE `udar` MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;