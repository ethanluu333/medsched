-- Table structure for table `user`

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
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` varchar(50) NOT NULL, 
  `City` varchar(50) NOT NULL, 
  `Hospital` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Fav_Food` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

  
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  doctor_id int(7) NOT NULL,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (doctor_id) REFERENCES doc(Doc_ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






