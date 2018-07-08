CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `fullName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `permissionTitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

CREATE TABLE `projectPosts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `whatText` varchar(255) COLLATE utf8_bin NOT NULL
  `whyText` varchar(255) COLLATE utf8_bin NOT NULL
  `howText` varchar(255) COLLATE utf8_bin NOT NULL
  `projectCoverImgSrc` varchar(255) COLLATE utf8_bin NOT NULL,
  `videoTitle1` varchar(255) COLLATE utf8_bin,
  `videoTitle2` varchar(255) COLLATE utf8_bin,
  `videoTitle3` varchar(255) COLLATE utf8_bin,
  `videoCoverImg1` varchar(255) COLLATE utf8_bin,
  `videoCoverImg2` varchar(255) COLLATE utf8_bin,
  `videoCoverImg3` varchar(255) COLLATE utf8_bin,
  `videoLink1` varchar(255) COLLATE utf8_bin,
  `videoLink2` varchar(255) COLLATE utf8_bin,
  `videoLink3` varchar(255) COLLATE utf8_bin,
  `ongoingProject` BOOLEAN NOT NULL,
  `createdBy` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

CREATE TABLE `emailList` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;
