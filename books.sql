CREATE TABLE books (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tittle VARCHAR(200) NOT NULL,
    author_id INT NOT NULL,
    release_date INT NOT NULL,
    author_nationality_id INT NOT NULL,
    CONSTRAINT fk_author
        FOREIGN KEY (author_id)
        REFERENCES authors(id),
    CONSTRAINT fk_author_nationality
            FOREIGN KEY (author_nationality_id)
            REFERENCES nationalities(id)
);