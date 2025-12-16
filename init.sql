DROP schema IF EXISTS hirekk;
CREATE SCHEMA IF NOT EXISTS hirekk;
USE hirekk;


CREATE TABLE cikkek (
    id int  auto_increment primary key ,
    cim varchar(45),
    megjelenes date,
    szoveg text);
    
    CREATE TABLE hozzaszolas (
    id int,
    hozzaszolo varchar(45),
    szöveg text,
    hir_id int,
    foreign key (hir_id) references cikkek(id));

INSERT INTO cikkek (cim, megjelenes, szoveg) VALUES("Uj ai funkció található a microsoftnal", '2025-07-23', "Ez nagyon okos mindenkinek ezt kéne használnia, sokkal jobb mindennél");
INSERT INTO cikkek (cim, megjelenes, szoveg) VALUES("Nagyon gyenge az ai felhozatal az egészégügyben", '2025-10-23', "Ez  nem nagyon okos nem érdemes használni, veszélyes mindkenkire nézve");

insert into hozzaszolas (hir_id, hozzaszolo, szöveg) values	(1, "Teszt Elek", "Ez kamu, nem hiszem el");
insert into hozzaszolas (hir_id, hozzaszolo, szöveg) values	(1, "Teszt Elemér", "Ez kamu, de akkor is elhiszem");
insert into hozzaszolas (hir_id, hozzaszolo, szöveg) values	(2, "Teszt Emese", "Ez nem kamu, attól még nem hiszem el");