USE webvuln;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    id int not null auto_increment,
    username text not null,
    password text not null,
    primary key (id)
);
INSERT INTO 
    `users` (username, password)
VALUES 
    ("admin", "sUp3rP$ss"), ("maria", "12345678"), ("jao", "seloco mano isso é P4IA");
