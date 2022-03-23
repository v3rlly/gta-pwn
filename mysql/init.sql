DROP USER IF EXISTS ademiro@localhost;
CREATE USER 'ademiro'@'localhost' IDENTIFIED WITH mysql_native_password BY 'p@ssw0rd';
GRANT ALL PRIVILEGES ON *.* TO 'ademiro'@'%';
GRANT ALL PRIVILEGES ON *.* TO 'ademiro'@'localhost';
FLUSH PRIVILEGES;
