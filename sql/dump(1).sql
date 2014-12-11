SET SESSION AUTHORIZATION 'vauthier.quentin';

SET search_path =  public , pg_catalog;

-- Definition

-- DROP TABLE  public . users ;
CREATE TABLE  public . users  (
     id  integer NOT NULL DEFAULT nextval('users_id_seq'::regclass),
     nom  character varying(50) NOT NULL,
     prenom  character varying(50) NOT NULL,
     email  character varying(150) NOT NULL,
     mdp  text NOT NULL,
     sid  character varying(255),
    CONSTRAINT  users_email_key  UNIQUE (email),
    CONSTRAINT  users_pkey  PRIMARY KEY (id)
) WITHOUT OIDS;

INSERT INTO  users  ( id ,  nom ,  prenom ,  email ,  mdp ,  sid ) VALUES ('3', 'Hubert', 'Roger', 'hubert@roger.fr', '123456', NULL);
INSERT INTO  users  ( id ,  nom ,  prenom ,  email ,  mdp ,  sid ) VALUES ('1', 'Vauthier', 'Quentin', 'quentin-vauthier@hotmail.fr', '123456', 'd6a0982d3ccf9d088023fbf9485179cc');

-- Indexes

CREATE UNIQUE INDEX users_email_key ON users USING btree (email);
CREATE UNIQUE INDEX users_pkey ON users USING btree (id);
