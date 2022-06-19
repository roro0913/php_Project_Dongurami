create table member1 (
 id char(15) not null,
 pass char(15) not null,
 name char(10) not null,
 major int(20) not null,
 nick int(20) not null,
 hp char(20) not null,
 email char(80),
 register_day char(20)
 level int,
 join_circle char(10)
 primary key(id)
 );