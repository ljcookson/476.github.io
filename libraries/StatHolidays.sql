DROP TABLE IF EXISTS StatHolidays;

CREATE TABLE StatHolidays(
    stat_ID INT NOT NULL AUTO_INCREMENT,
    year_ID INT NOT NULL,
    semester_ID INT NOT NULL,
    term_ID INT NOT NULL,
    statName VARCHAR(110),
    statDate DATE,
    PRIMARY KEY (stat_ID),
    FOREIGN KEY (year_ID) REFERENCES Years (year_ID),
    FOREIGN KEY (semester_ID) REFERENCES Semesters (semester_ID),
    FOREIGN KEY (term_ID) REFERENCES Terms (term_ID)
);