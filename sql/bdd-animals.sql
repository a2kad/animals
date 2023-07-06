#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: type
#------------------------------------------------------------

CREATE TABLE type(
        id   Int  Auto_increment  NOT NULL ,
        type Varchar (50) NOT NULL
	,CONSTRAINT type_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: race
#------------------------------------------------------------

CREATE TABLE race(
        id        Int  Auto_increment  NOT NULL ,
        name_race Varchar (50) NOT NULL ,
        id_type   Int NOT NULL
	,CONSTRAINT race_PK PRIMARY KEY (id)

	,CONSTRAINT race_type_FK FOREIGN KEY (id_type) REFERENCES type(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: color
#------------------------------------------------------------

CREATE TABLE color(
        id    Int  Auto_increment  NOT NULL ,
        color Varchar (50) NOT NULL
	,CONSTRAINT color_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sex
#------------------------------------------------------------

CREATE TABLE sex(
        id  Int  Auto_increment  NOT NULL ,
        sex Varchar (50) NOT NULL
	,CONSTRAINT sex_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: animals
#------------------------------------------------------------

CREATE TABLE animals(
        id            Int  Auto_increment  NOT NULL ,
        date_of_birth Date ,
        tatoo         Bool ,
        chip          Bool ,
        name          Varchar (50) NOT NULL ,
        weight        Float NOT NULL ,
        id_color      Int NOT NULL ,
        id_type       Int NOT NULL ,
        id_sex        Int NOT NULL ,
        id_race       Int NOT NULL
	,CONSTRAINT animals_PK PRIMARY KEY (id)

	,CONSTRAINT animals_color_FK FOREIGN KEY (id_color) REFERENCES color(id)
	,CONSTRAINT animals_type0_FK FOREIGN KEY (id_type) REFERENCES type(id)
	,CONSTRAINT animals_sex1_FK FOREIGN KEY (id_sex) REFERENCES sex(id)
	,CONSTRAINT animals_race2_FK FOREIGN KEY (id_race) REFERENCES race(id)
)ENGINE=InnoDB;

