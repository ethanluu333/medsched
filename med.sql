-- Table structure for table `user`

CREATE DATABASE IF NOT EXISTS med_sched;

CREATE TABLE `user` (
  `User_ID` int(7) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL, 
  `Time_registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserName` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `Doc_ID` int(7) NOT NULL,
  `Doc_Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL, 
  `Hospital` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Fav_Food` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `appointment` (
	`appointment_id` INT(11) NOT NULL AUTO_INCREMENT,
	`appointment_start` DATETIME NOT NULL,
	`appointment_end` DATETIME NOT NULL,
	`appointment_patient_name` VARCHAR(100) NULL DEFAULT NULL,
	`appointment_status` VARCHAR(100) NOT NULL DEFAULT 'free',
	`appointment_patient_session` VARCHAR(100) NULL DEFAULT NULL,
	`doctor_id` INT(11) NOT NULL,
	PRIMARY KEY (`appointment_id`)
);


ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(7) NOT NULL AUTO_INCREMENT;

ALTER TABLE `doc`
  ADD PRIMARY KEY (`Doc_ID`);

-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `Doc_ID` int(7) NOT NULL AUTO_INCREMENT;



