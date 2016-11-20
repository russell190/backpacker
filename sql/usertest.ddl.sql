DROP TABLE IF EXISTS usertest;

CREATE TABLE usertest (
	id INT AUTO_INCREMENT PRIMARY KEY,
	uid VARCHAR(10),
	pwd VARCHAR(10)
);

INSERT INTO usertest (uid, pwd) VALUES ('me','me');
