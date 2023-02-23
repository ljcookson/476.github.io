DROP TABLE IF EXISTS OtherDates;

CREATE TABLE OtherDates(
    otherDates_ID INT NOT NULL AUTO_INCREMENT,
    year_ID INT NOT NULL,
    semester_ID INT NOT NULL,
    term_ID INT NOT NULL,
    otherName VARCHAR(110),
    otherDate DATE,
    PRIMARY KEY (otherDates_ID),
    FOREIGN KEY (year_ID) REFERENCES Years (year_ID),
    FOREIGN KEY (semester_ID) REFERENCES Semesters (semester_ID),
    FOREIGN KEY (term_ID) REFERENCES Terms (term_ID)
);