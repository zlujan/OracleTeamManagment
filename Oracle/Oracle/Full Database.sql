create database if not exists OracleTest;

create table if not exists OracleTest.Teams (
Team_id int(255),
constraint Teams_PK primary key (Team_id)
);

INSERT INTO OracleTest.Teams (Team_id)
Values
(00001),
(00002),
(00003)
;

CREATE table if not exists OracleTest.Employees (
Employee_id int(255),
Employee_LN varchar(255) not null,
Employee_FN varchar(255) not NULL,
constraint Employees_PK primary key (Employee_id)
);

INSERT INTO OracleTest.Employees (Employee_id, Employee_LN, Employee_FN)
VALUES
(000001, "Simms", "Erin"),
(000002, "GRANT", "Lucas"),
(000003, "Orion", "India"),
(000004, "Woodhouse", "Gemma"),
(000005, "Arroyo", "Edgar"),
(000006, "Bickel", "Sawyer"),
(000007, "Obii-Obioha", "Chinenye"),
(000008, "Kendrick", "James"),
(000009, "Garland", "Sean"),
(000010, "Lujan", "Zachary")
;

create table if not exists OracleTest.Regional_Managers (
Manager_id int(255),
Employee_id int(255) not null,
Full_Name varchar(255) not NULL,
constraint Reg_manager_PK primary key (Manager_id),
constraint Reg_manager_FK foreign key (Employee_id) references OracleTest.Employees(Employee_id)
);

INSERT INTO OracleTest.Regional_Managers (Manager_id, Employee_id, Full_Name)
VALUES
(00001, 000006, "Sawyer Bickel"),
(00002, 000008, "James Kendrick"),
(00003, 000009, "Sean Garland"),
(00004, 000001, "Erin Simms"),
(00005, 000005, "Edgar Arroyo")
;


alter table OracleTest.Teams ADD Manager_id int(255) not NULL;



ALTER TABLE OracleTest.Teams ADD Project_id INT(255) NOT NULL;



create table if not exists OracleTest.TeamEmpLog (
Log_id int(255),
Team_id int(255),
Employee_id int(255) not null,
constraint Log_PK primary key (Log_id),
constraint Log_FK1 foreign key (Employee_id) references OracleTest.Employees(Employee_id),
constraint Log_FK2 foreign key (Team_id) references OracleTest.Teams(Team_id)
);

INSERT INTO OracleTest.TeamEmpLog (Log_id, Team_id, Employee_id)
Values
(0001, 00001, 000006),
(0002, 00002, 000008),
(0003, 00002, 000002),
(0004, 00002, 000010),
(0005, 00002, 000005),
(0006, 00002, 000003),
(0007, 00001, 000007),
(0008, 00003, 000009),
(0009, 00003, 000003),
(0010, 00003, 000007),
(0011, 00001, 000010),
(0012, 00003, 000004)
;

create table if not exists OracleTest.Projects (
Project_id INT AUTO_INCREMENT NOT NULL,
Project_Name varchar(255) not null,
Team_id int(255) not null,
constraint Project_PK primary key (Project_id),
constraint Project_FK1 foreign key (Team_id) references OracleTest.Teams(Team_id)
);

INSERT INTO OracleTest.Projects (Project_Name, Team_id)
Values
("Project 1", 00001),
("Project 2", 00001),
("Project 3", 00001),
("Project 4", 00002),
("Project 5", 00002),
("Project 6", 00002),
("Lo-Jack", 00003),
("Corn on the COB", 00003),
("Mad Dawgs", 00003),
("Project 10", 00002)
;

/*INSERT INTO OracleTest.Teams (Team_Name)
VALUE
("TimmyHortons"),
("DunkinDonuts"),
("KrispyKremes")
;
*/
create table if not exists OracleTest.Team_Leads (
Employee_id int(255),
Project_Name varchar(255) not null,
Project_id int(255) not null,
constraint Team_lead_PK primary key (Employee_id),
constraint Team_Lead_FK1 foreign key (Employee_id) references OracleTest.Employees(Employee_id),
constraint Team_Lead_FK2 foreign key (Project_id) references OracleTest.Projects(Project_id)
);

INSERT INTO OracleTest.Team_Leads (Employee_id, Project_Name, Project_id)
Values
(000007, "DunkinDonuts", 00002),
(000006, "TimmyHortons", 00001),
(000010, "KrispyKremes", 00003)
;

create table if not exists OracleTest.Login (
Employee_Email varchar(255) not null,
pass VARCHAR(255) not NULL,
constraint login_pk primary key (Employee_Email)
);

INSERT INTO OracleTest.Login (Employee_Email, pass)
Values
("Simms.Erin@notreal.com", "Pass1"),
("Grant.Lucas@notreal.com", "Pass2"),
("Orion.India@notreal.com", "Pass3"),
("Woodhouse.Gemma@notreal.com", "Pass4"),
("Arroyo.Edgar@notreal.com", "Pass5"),
("Bickel.Sawyer@notreal.com", "Pass6"),
("Obii-Obioha.Chinenye@notreal.com", "Pass7"),
("Kendrick.James@notreal.com", "Pass8"),
("Garland.Sean@notreal.com", "Pass9"),
("Lujan.Zachary@notreal.com", "Pass10")
;

alter table OracleTest.Employees add Employee_Email varchar(255) not null;

UPDATE OracleTest.Employees
SET Employee_Email='Simms.Erin@notreal.com'
WHERE Employee_FN = 'Erin'
;

UPDATE OracleTest.Employees
SET Employee_Email='Grant.Lucas@notreal.com'
WHERE Employee_FN = 'Lucas'
;

UPDATE OracleTest.Employees
SET Employee_Email='Orion.India@notreal.com'
WHERE Employee_FN = 'India'
;

UPDATE OracleTest.Employees
SET Employee_Email='Woodhouse.Gemma@notreal.com'
WHERE Employee_FN = 'Gemma'
;

UPDATE OracleTest.Employees
SET Employee_Email='Arroyo.Edgar@notreal.com'
WHERE Employee_FN = 'Edgar'
;

UPDATE OracleTest.Employees
SET Employee_Email='Bickel.Sawyer@notreal.com'
WHERE Employee_FN = 'Sawyer'
;

UPDATE OracleTest.Employees
SET Employee_Email='Obii-Obioha.Chinenye@notreal.com'
WHERE Employee_FN = 'Chinenye'
;

UPDATE OracleTest.Employees
SET Employee_Email='Kendrick.James@notreal.com'
WHERE Employee_FN = 'James'
;

UPDATE OracleTest.Employees
SET Employee_Email='Lujan.Zachary@notreal.com'
WHERE Employee_FN = 'Zachary'
;

UPDATE OracleTest.employees
SET Employee_Email='Garland.Sean@notreal.com'
WHERE Employee_FN='Sean'
;



/*task center table*/

CREATE table if not exists OracleTest.TaskCenter (
Task_ID int(255) not null auto_increment,
StartDate varchar(255) NOT NULL,
EndDate varchar(255)NOT NULL,
TaskDesc varchar(255) not NULL,
constraint Task_ID primary key (Task_ID)
);

Insert Into OracleTest.TaskCenter (StartDate, EndDate,TaskDesc)
VALUES
("1/3/2020","1/15-2020", "Put in 110%")
;



/*Individual project data tables*/
/*project1*/
CREATE table if not exists OracleTest.Project1 (
Table_ID int(255) AUTO_INCREMENT NOT NULL,
Contributions int(255),
KmArticles varchar(255) not null,
ODMCEngagements varchar(255) not NULL,
DQCRRCA varchar(255) not null,
BestPCustEngagements varchar(255) not NULL,
LongRunning varchar(255) not null,
SRQuality varchar(255) not NULL,
AccountSRNRD varchar(255) not null,
CriticalWorkSRSNRD varchar(255) not NULL,
constraint Table_ID primary key (Table_ID)
);

Insert Into OracleTest.project1 (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD)
VALUES
(120929, "357", "78645", "4568", "4238", "3875", "4538", "483", "152"),
(291938, "this", "shows", "that", "we", "can", "accept", "all", "kinds"),
(193819, "of", "data", "for", "OracleTest", "within", "our", "system", "24"),
(91290, "32", "123", "123", "321", "this", "is", "data", "in"),
(180249, "project", "two", "data", "25%", "66", "73", "158", "last")
;

/*project 2*/
CREATE table if not exists OracleTest.Project2 (
Table_ID int(255) AUTO_INCREMENT NOT NULL,
Contributions int(255),
KmArticles varchar(255) not null,
ODMCEngagements varchar(255) not NULL,
DQCRRCA varchar(255) not null,
BestPCustEngagements varchar(255) not NULL,
LongRunning varchar(255) not null,
SRQuality varchar(255) not NULL,
AccountSRNRD varchar(255) not null,
CriticalWorkSRSNRD varchar(255) not NULL,
constraint Table_ID primary key (Table_ID)
);

Insert Into OracleTest.project2 (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD)
VALUES
(120929, "156", "8456", "8456", "845213", "813548", "65", "42315", "1231515"),
(291938, "1", "1535", "1513", "4564", "684312", "564", "68", "68423"),
(193819, "3845", "6845", "548", "963", "875", "387", "1525", "45654+"),
(91290, "6", "867", "453", ".38", "3844", "4834", "875", "89687"),
(180249, "98", "852", "258", "654%", "456", "753", "951", "156795")
;

/*project 3*/
CREATE table if not exists OracleTest.Project3 (
Table_ID int(255) AUTO_INCREMENT NOT NULL,
Contributions int(255),
KmArticles varchar(255) not null,
ODMCEngagements varchar(255) not NULL,
DQCRRCA varchar(255) not null,
BestPCustEngagements varchar(255) not NULL,
LongRunning varchar(255) not null,
SRQuality varchar(255) not NULL,
AccountSRNRD varchar(255) not null,
CriticalWorkSRSNRD varchar(255) not NULL,
constraint Table_ID primary key (Table_ID)
);

Insert Into OracleTest.project3 (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD)
VALUES
(120929, "another", "set", "of", "manipulatable", "data", "to", "show", "we"),
(291938, "have", "a", "scalable", "System", "12", "32", "45", "7855"),
(193819, "687", "786", "5468", "56348", "45", "4563", "4856", "896"),
(91290, "4563", "4563", "563", "123", "456", "789", "963", "852"),
(180249, "632", "75", "85", "57%", "34", "96", "85", "36")
;


CREATE table if not exists OracleTest.TaskCenter (
Task_ID int(255) not null auto_increment,
StartDate varchar(255) NOT NULL,
EndDate varchar(255)NOT NULL,
TaskDesc varchar(255) not NULL,
constraint Task_ID primary key (Task_ID)
);

Insert Into OracleTest.TaskCenter (StartDate, EndDate,TaskDesc)
VALUES
("1/3/2020","1/15-2020", "Put in 110%")
;

CREATE table if not exists OracleTest.Project1 (
Table_ID int(255) AUTO_INCREMENT NOT NULL,
Contributions int(255),
KmArticles varchar(255) not null,
ODMCEngagements varchar(255) not NULL,
DQCRRCA varchar(255) not null,
BestPCustEngagements varchar(255) not NULL,
LongRunning varchar(255) not null,
SRQuality varchar(255) not NULL,
AccountSRNRD varchar(255) not null,
CriticalWorkSRSNRD varchar(255) not NULL,
constraint Table_ID primary key (Table_ID)
);

Insert Into OracleTest.project1 (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD)
VALUES
(120929, "357", "78645", "4568", "4238", "3875", "4538", "483", "152"),
(291938, "this", "shows", "that", "we", "can", "accept", "all", "kinds"),
(193819, "of", "data", "for", "OracleTest", "within", "our", "system", "24"),
(91290, "32", "123", "123", "321", "this", "is", "data", "in"),
(180249, "project", "two", "data", "25%", "66", "73", "158", "last")
;

CREATE table if not exists OracleTest.Project2 (
Table_ID int(255) AUTO_INCREMENT NOT NULL,
Contributions int(255),
KmArticles varchar(255) not null,
ODMCEngagements varchar(255) not NULL,
DQCRRCA varchar(255) not null,
BestPCustEngagements varchar(255) not NULL,
LongRunning varchar(255) not null,
SRQuality varchar(255) not NULL,
AccountSRNRD varchar(255) not null,
CriticalWorkSRSNRD varchar(255) not NULL,
constraint Table_ID primary key (Table_ID)
);

Insert Into OracleTest.project2 (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD)
VALUES
(120929, "156", "8456", "8456", "845213", "813548", "65", "42315", "1231515"),
(291938, "1", "1535", "1513", "4564", "684312", "564", "68", "68423"),
(193819, "3845", "6845", "548", "963", "875", "387", "1525", "45654+"),
(91290, "6", "867", "453", ".38", "3844", "4834", "875", "89687"),
(180249, "98", "852", "258", "654%", "456", "753", "951", "156795")
;

CREATE table if not exists OracleTest.Project3 (
Table_ID int(255) AUTO_INCREMENT NOT NULL,
Contributions int(255),
KmArticles varchar(255) not null,
ODMCEngagements varchar(255) not NULL,
DQCRRCA varchar(255) not null,
BestPCustEngagements varchar(255) not NULL,
LongRunning varchar(255) not null,
SRQuality varchar(255) not NULL,
AccountSRNRD varchar(255) not null,
CriticalWorkSRSNRD varchar(255) not NULL,
constraint Table_ID primary key (Table_ID)
);

Insert Into OracleTest.project3 (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD)
VALUES
(120929, "another", "set", "of", "manipulatable", "data", "to", "show", "we"),
(291938, "have", "a", "scalable", "System", "12", "32", "45", "7855"),
(193819, "687", "786", "5468", "56348", "45", "4563", "4856", "896"),
(91290, "4563", "4563", "563", "123", "456", "789", "963", "852"),
(180249, "632", "75", "85", "57%", "34", "96", "85", "36")
;

