create table qa (
 num int not null auto_increment, 
 id char(15) not null,
 name char(10) not null,
 nick int(20) not null,
 subject char(100)not null,
 content text not null,
 register_day char(20)
 level int,
 join_circle char(10)
 primary key(id)
 );