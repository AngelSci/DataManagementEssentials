drop database if exists test;
create database test;
use test;
create table airport_status (
	iata_code char(3) primary key,
	delay boolean,
	reason varchar(40),
	avgdelay int
);

insert into airport_status values ('IAD',TRUE,'fog',23);
insert into airport_status values ('DCA',TRUE,'fog',18);
insert into airport_status values ('BWI',FALSE,'',0);
insert into airport_status values ('EWR',TRUE,'rain',7);
insert into airport_status values ('ORD',FALSE,'',0);
