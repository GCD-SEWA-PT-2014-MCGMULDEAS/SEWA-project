CREATE DATABASE users;

USE users;

CREATE TABLE logins(

id int (5) NOT NULL AUTO_INCREMENT,
username varchar(60) NOT NULL,
password varchar(40) NOT NULL,
PRIMARY KEY (id)
) ENGINE=MyISAM;

INSERT INTO logins VALUES
(DEFAULT, "Cathal", "c464af817287343305cbd6493c593885695df531"),
(DEFAULT, "Frank", "8ad8572a0b3fc4cb3afc1baaebc97a2cae58eb8c"),
(DEFAULT, "Gavin", "915692b4d7465b0084354173d552ac90145dc315"),
(DEFAULT, "Mark", "c1f24831801f49e90775eb8412d5812fa0d423e1");