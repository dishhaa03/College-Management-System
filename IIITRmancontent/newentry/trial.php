CREATE TABLE `acadblockentry` (
  `id` int(120) NOT NULL,
  `entreename` char(80) NOT NULL,
  `rollno` varchar(70) NOT NULL,
  `mobno` bigint(100) NOT NULL,
  `room` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `day` time NOT NULL DEFAULT current_timestamp(),
  `dateandtime` datetime NOT NULL DEFAULT current_timestamp(),
  `leavingtime` datetime NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
createtble