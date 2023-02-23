DROP TABLE IF EXISTS Terms;

CREATE TABLE Terms(
    term_ID INT NOT NULL AUTO_INCREMENT,
    semester_ID INT NOT NULL,
    classDateStart DATE,
    classDateEnd DATE,
    examDateStart DATE,
    examDateEnd DATE,
    paymentDueDate DATE,
    paymentPenaltyFreeDate DATE,
    addCoursesDate DATE,
    noRecordDropDate DATE,
    gradeWDropDate DATE,
    fullRefundDate DATE,
    halfRefundDate DATE,
    PRIMARY KEY (term_ID),
    FOREIGN KEY (semester_ID) REFERENCES Semesters (semester_ID)
);