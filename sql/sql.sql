CREATE TABLE articles (
id SERIAL,
titre VARCHAR(150) NOT NULL,
texte TEXT NOT NULL,
date DATE NOT NULL,
publie smallint NOT NULL,
PRIMARY KEY (id));
