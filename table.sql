/*table for student to store data*/
create table harshini3410(image longblob,month varchar(100),hallticket varchar(100) unique,studentname varchar(100) unique,password varchar(100),qualification varchar(100),email varchar(200) unique,telnumber varchar(100) unique,specialization varchar(100),eventname varchar(100))

/*Table for lecturer to store data*/

create table harshini34(image longblob,month varchar(100),username varchar(150) unique,password varchar(150),designation varchar(150),qualification varchar(150),email varchar(250) unique,telnumber varchar(150) unique,workexperience varchar(100),specialization varchar(150),subjectstaug varchar(150))