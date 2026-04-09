drop database if exists Safar ;
create database Safar ;

use Safar ;

create Table client (
	id  INT AUTO_INCREMENT,
	nom varchar (50) ,
    prenom varchar (50),
    age int,
    email varchar(200),
    tel int,
    mdp varchar (155500),
	primary key ( id )
);

create Table responsable (
	matricule  int ,
    poste varchar(50),
	nom varchar (50) ,
    prenom varchar (50),
    email varchar(200),
    tel int,
    mdp varchar (50),
	primary key ( matricule )
);

create Table hotel (
    id_hotel int,
    nom varchar (50),
    adresse varchar (200),
    primary key (id_hotel)
);

create Table voyages (
    id_voyage int,
    ville_depart varchar (100),
    ville_arriver varchar(100),
    tarif varchar (20),
    num_hotel int,
    num_responsable int,
    foreign key (num_hotel) references hotel(id_hotel),
    foreign key (num_responsable) references responsable(matricule),
    primary key  (id_voyage) 
);


create Table Reserver (
    num_client int,
    num_voyage int,
    date_reservation date not null,
    date_annulation date,
    foreign key (num_client) references client(id),
    foreign key (num_voyage) references voyages(id_voyage),
    primary key (num_client, num_voyage)
);

create table Activite(
   idActivite int,
   nomActivite varchar(15),
   ageMax int,
   primary key(idActivite)
);

create table Posseder(
   idActivite int,
   id_voyage int,
   accompte int,
   foreign key(idActivite) references Activite(idActivite),
   foreign key(id_voyage) references voyages(id_voyage),
   primary key(idActivite, id_voyage)
);