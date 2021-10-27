INSERT INTO nationalities (nationality)
    VALUES ('English'),
            ('Irish'),
            ('French');

INSERT INTO authors (author, nationality_id)
    VALUES ('Harold Pinter', 5 ),
            ('Samuel Beckett', 6),
            ('Victor Hugo', 7),
            ('William Shakespeare', 5);

INSERT INTO books (tittle, author_id, release_date, author_nationality_id)
    VALUES ('Le monte-plats', 1, 1960, 5),
            ('No mans land', 1, 1975, 5),
            ('Fin de partie', 2, 1957, 6),
            ('En attendant Godot', 2, 1952, 6),
            ('Ruy Blas', 3, 1838, 7),
            ('Lucrèce Borgia', 3, 1832, 7),
            ('Cromwell', 3, 1827, 7),
            ('Mcbeth', 4, 1606, 5),
            ('Roméo et Juliette', 4, 1595, 5),
            ('Hamlet', 4, 1602, 5);