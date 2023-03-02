DROP TABLE IF EXISTS Years;

CREATE TABLE Years(
    year_ID INT NOT NULL AUTO_INCREMENT,
    startYear DATE,
    endYear DATE,
    PRIMARY KEY (year_ID)
);