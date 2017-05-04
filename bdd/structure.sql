drop table if exists Utilisateurs;
drop table if exists Commentaires;
drop table if exists Articles;

create table Utilisateurs (
  id int not null primary key auto_increment,
  name varchar(20) not null,
  lastname varchar(50) not null,
  age int not null,
  mdp varchar (50) not null,
  pseudo varchar(100) not null
)engine=innodb character set utf8 collate utf8_unicode_ci;

create table Articles (
  idArt int not null primary key auto_increment,
  photoArt text not null,
  textArt text not null,
  Uid int not null,
  foreign key(Uid) references Utilisateurs(id)
)engine=innodb character set utf8 collate utf8_unicode_ci;


