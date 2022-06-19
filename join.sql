create table join (
 num int not null auto_increment,
 id char(15) not null,
 pass char(15) not null,
 name char(10) not null,
 age int(10) not null,
 hp char(20) not null, 
 major int(20) not null,
 email char(80) not null,
 club int(20) not null,
 reason text not null,
 nick int(20) not null,
 hp char(20) not null,
 register_day char(20)
 level int,
 join_circle char(10)
 primary key(id)
 );