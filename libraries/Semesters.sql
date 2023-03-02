DROP TABLE IF EXISTS Semesters;

CREATE TABLE Semesters(
    semester_ID INT NOT NULL AUTO_INCREMENT,
    year_ID INT NOT NULL,
    semesterName VARCHAR(50),
    heldStart VARCHAR(20),
    heldEnd VARCHAR(20),
    startDate DATE,
    endDate DATE,
    PRIMARY KEY (semester_ID),
    FOREIGN KEY (year_ID) REFERENCES Years (year_ID)
);