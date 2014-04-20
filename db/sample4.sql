
use lesson1;

create table client
(
    id int auto_increment not null,
    name varchar(200) not null,
    age int,
    date datetime,
    key pkey (id)
);

