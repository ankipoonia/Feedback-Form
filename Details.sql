CREATE DATABASE feedback;
CREATE TABLE `Details` (
  `academic_year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `branch` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `answer` char(1) NOT NULL,
  `tech` int(11) NOT NULL,
  `comm_skill` int(11) NOT NULL,
  `availablity` int(11) NOT NULL,
  `pace` int(11) NOT NULL,
  `effectiveness` int(11) NOT NULL,
  `technical_content` int(11) NOT NULL,
  `lab_exp` int(11) NOT NULL,
  `remark` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;
