CREATE TABLE authors (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(100),
    nationality_id INT NOT NULL,
    CONSTRAINT fk_nationality
        FOREIGN KEY (nationality_id)
        REFERENCES nationalities (id)
);