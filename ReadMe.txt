Pour création de la BDD


CREATE TABLE utilisateur (
  id_utilisateur INT AUTO_INCREMENT,
  lastname VARCHAR(30),
  firstname VARCHAR(30),
  email VARCHAR(30),
  password VARCHAR(30),
  admin BOOLEAN,
  PRIMARY KEY(id_utilisateur)
);

CREATE TABLE article (
  id_article INT AUTO_INCREMENT,
  id_utilisateur INT,
  corps VARCHAR(30),
  image_path VARCHAR(30),
  titre VARCHAR(30),
  PRIMARY KEY(id_article),
  FOREIGN KEY( id_utilisateur) REFERENCES utilisateur(id_utilisateur)
);

insert into utilisateur (lastname, firstname, email, password, admin)
values ('mb', 'pierre', 'pierre.mb@gmail.com', 'pierrePassword', true)