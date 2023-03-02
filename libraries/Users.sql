DROP TABLE IF EXISTS Users;

CREATE TABLE Users(
    user_ID INT NOT NULL AUTO_INCREMENT,
    first_Name VARCHAR(25),
    last_Name VARCHAR(25),
    userName VARCHAR(15),
    pword VARCHAR(10),
    PRIMARY KEY (user_ID)
);