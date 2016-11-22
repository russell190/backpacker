DROP TABLE IF EXISTS LocationUsers;
DROP TABLE IF EXISTS TripGearList;
DROP TABLE IF EXISTS TripLocationList;
DROP TABLE IF EXISTS GearUsers;
DROP TABLE IF EXISTS LocationCity;
DROP TABLE IF EXISTS CityState;
DROP TABLE IF EXISTS StateCountry;
DROP TABLE IF EXISTS GearList;
DROP TABLE IF EXISTS List;
DROP TABLE IF EXISTS `Country`;
DROP TABLE IF EXISTS State;
DROP TABLE IF EXISTS City;
DROP TABLE IF EXISTS Trip;
DROP TABLE IF EXISTS Location;
DROP TABLE IF EXISTS Gear;
DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  UsersId int NOT NULL AUTO_INCREMENT,
  name varchar (40) NOT NULL,
  username varchar (40) NOT NULL,
  password varchar(40) NOT NULL ,
  email varchar(40) NOT NULL,
  PRIMARY KEY (UsersId))
;

CREATE TABLE Gear (
  GearId int NOT NULL AUTO_INCREMENT,
  GearType varchar(40) NOT NULL,
  name varchar(40) NOT NULL,
  weight decimal,
  rating int,
  PRIMARY KEY (GearId)
);

CREATE TABLE Location (
  LocationId int NOT NULL AUTO_INCREMENT ,
  name varchar(40) NOT NULL,
  description varchar(200), 
  PRIMARY KEY (LocationId)
);

CREATE TABLE Trip(
  TripId int NOT NULL AUTO_INCREMENT,
  name varchar(40) NOT NULL,
  description varchar(200),
  startdate DATE,
  enddate DATE,
  UsersId int NOT NULL,
  PRIMARY KEY (TripId),
  CONSTRAINT `UsersTrip` FOREIGN KEY (`UsersId`) REFERENCES `Users`(`UsersId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE City (
  CityId int NOT NULL AUTO_INCREMENT,
  name varchar(40),
  PRIMARY KEY (CityId)
);

CREATE TABLE State (
 StateId int NOT NULL AUTO_INCREMENT, 
  name varchar(40),
  PRIMARY KEY (StateId)
);

CREATE TABLE Country (
  CountryId int NOT NULL AUTO_INCREMENT,
  name varchar(40),
  PRIMARY KEY (CountryId)
);

CREATE TABLE List (
  ListId int NOT NULL AUTO_INCREMENT,
  name varchar(40) NOT NULL,
  UsersId int NOT NULL,
  PRIMARY KEY (ListId),
  CONSTRAINT `UsersList` FOREIGN KEY (`UsersId`) REFERENCES `Users`(`UsersId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);
CREATE TABLE GearList (
  ListId int NOT NULL,
  GearId int NOT NULL,
  PRIMARY KEY (GearId,ListId),
  CONSTRAINT `ListGearList` FOREIGN KEY (`ListId`) REFERENCES `List` (`ListId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `GearGearList` FOREIGN KEY (`GearId`) REFERENCES `Gear` (`GearId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE StateCountry (
  StateId int NOT NULL,
  CountryId  int NOT NULL,
 PRIMARY KEY (StateId,CountryId),
 CONSTRAINT `StateSC` FOREIGN KEY (`StateId`) REFERENCES `State` (`StateId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
 CONSTRAINT `CountrySC` FOREIGN KEY (`CountryId`) REFERENCES `Country` (`CountryId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE CityState (
  StateId int NOT NULL,
  CityId int NOT NULL,
 PRIMARY KEY (CityID,StateId),
 CONSTRAINT `StateCS` FOREIGN KEY (`StateId`) REFERENCES `State` (`StateId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
 CONSTRAINT `CityCS` FOREIGN KEY (`CityId`) REFERENCES `City` (`CityId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);


CREATE TABLE LocationCity (
  LocationId int NOT NULL, 
  CityId int NOT NULL,
PRIMARY KEY (LocationId,CityId),
CONSTRAINT `CityLC` FOREIGN KEY (`CityId`) REFERENCES `City` (`CityId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
CONSTRAINT `LocationLC` FOREIGN KEY (`LocationId`) REFERENCES `Location` (`LocationId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE GearUsers (
  UsersId int NOT NULL,
  GearId int NOT NULL,
  PRIMARY KEY (GearId,UsersId),
 CONSTRAINT `UsersGA` FOREIGN KEY (`UsersId`) REFERENCES `Users`(`UsersId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `GearGA` FOREIGN KEY (`GearId`) REFERENCES `Gear` (`GearId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE TripLocationList (
  TripId int NOT NULL,
  LocationId int NOT NULL,
  PRIMARY KEY (TripId,LocationId),
CONSTRAINT `TripTLL` FOREIGN KEY (`TripId`) REFERENCES `Trip` (`TripId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
CONSTRAINT `LocationTLL` FOREIGN KEY (`LocationId`) REFERENCES `Location` (`LocationId`) ON DELETE RESTRICT ON UPDATE RESTRICT

);
CREATE TABLE TripGearList(
  TripId int NOT NULL,
  ListId int NOT NULL,
  PRIMARY KEY (TripId,ListId),
 CONSTRAINT `TripTGL` FOREIGN KEY (`TripId`) REFERENCES `Trip` (`TripId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
 CONSTRAINT `ListTGL` FOREIGN KEY (`ListId`) REFERENCES `List` (`ListId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);


CREATE TABLE LocationUsers (
  UsersId int NOT NULL,
  LocationId int NOT NULL,
   PRIMARY KEY (LocationId,UsersId),
  CONSTRAINT `LocationLA` FOREIGN KEY (`LocationId`) REFERENCES `Location` (`LocationId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `UsersLA` FOREIGN KEY (`UsersId`) REFERENCES `Users`(`UsersId`) ON DELETE RESTRICT ON UPDATE RESTRICT
);

