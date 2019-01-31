--Creating database/table/admin account
CREATE DATABASE cyplogindb;

use cyplogindb;

CREATE TABLE accounts(
	id VARCHAR(20) PRIMARY KEY,
	password VARCHAR(15) NOT NULL,
	email VARCHAR(20) NOT NULL
);

--default password translates to testpass, generate a new one here
--https://www.browserling.com/tools/bcrypt
INSERT INTO accounts(id, password, email) VALUES(
	'admin',
	'$2a$10$kYRqdeArB4TkAuNe8Iw2qOOdjFczwL/ahHRDcIBkWdcRLsLe5/LX2', 
	'admin@cyptian.org'
);

--Creating remote MySQL user for challenge (creds in /backup.zip)
GRANT INSERT,SELECT,UPDATE ON cyplogindb.accounts TO 'cryptodev1'@'%' IDENTIFIED BY 'bufbsuw23rfws8f3wfs';


