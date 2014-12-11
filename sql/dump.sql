SET SESSION AUTHORIZATION 'vauthier.quentin';

SET search_path =  public , pg_catalog;

-- Definition

-- DROP TABLE  public . articles ;
CREATE TABLE  public . articles  (
     id  integer NOT NULL DEFAULT nextval('articles_id_seq'::regclass),
     titre  character varying(150) NOT NULL,
     texte  text NOT NULL,
     date  date NOT NULL,
     publie  smallint NOT NULL,
    CONSTRAINT  articles_pkey  PRIMARY KEY (id)
) WITHOUT OIDS;

INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('59', 'Nonpublie', 'nonpublie', '2014-11-13', '0');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('60', 'azertyuiop', 'azerty', '2014-12-04', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('61', 'azertyuio', 'aesfdsfdf', '2014-12-04', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('62', 'zdadqdqdzz', 'zdqdzqdqzdzqd', '2014-12-04', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('63', 'The doctor', 'The doctor is the bestest', '2014-12-04', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('64', 'The doctor', 'The doctor is the bestgrgfrfgrg', '2014-12-04', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('16', 'The doctor', 'The doctor is the best', '2014-10-16', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('17', 'Koalas', 'Les koalas sont des \1\1tres doux et g\1\1n\1\1reux.', '2014-10-16', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('18', 'Rocket Racoon', 'Le dieu des ratons laveurs', '2014-10-16', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('28', 'gfgfdgfgfdg', 'fdgfgdfgdfgdf', '2014-10-30', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('19', 'Nartuo', 'Hokage ', '2014-10-16', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('29', 'ytryystrytr', 'htfhfhtfhtfh', '2014-10-30', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('30', 'Article de test', '\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nInter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nSoleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.\r\n\r\nErat autem diritatis eius hoc quoque indicium nec obscurum nec latens, quod ludicris cruentis delectabatur et in circo sex vel septem aliquotiens vetitis certaminibus pugilum vicissim se concidentium perfusorumque sanguine specie ut lucratus ingentia laetabatur.\r\n', '2014-11-06', '1');
INSERT INTO  articles  ( id ,  titre ,  texte ,  date ,  publie ) VALUES ('31', 'Test numero deux', '\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nInter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nSoleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.\r\n\r\nErat autem diritatis eius hoc quoque indicium nec obscurum nec latens, quod ludicris cruentis delectabatur et in circo sex vel septem aliquotiens vetitis certaminibus pugilum vicissim se concidentium perfusorumque sanguine specie ut lucratus ingentia laetabatur.\r\n', '2014-11-06', '1');

-- Indexes

CREATE UNIQUE INDEX articles_pkey ON articles USING btree (id);
