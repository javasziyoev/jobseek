CREATE SCHEMA `jobseek\`;

CREATE TABLE city ( 
	city_id              int  NOT NULL  AUTO_INCREMENT,
	city_name            varchar(100)    ,
	CONSTRAINT pk_city PRIMARY KEY ( city_id )
 ) engine=InnoDB;

CREATE TABLE company_class ( 
	company_class_id     int  NOT NULL  AUTO_INCREMENT,
	class_name           varchar(100)    ,
	CONSTRAINT pk_company_class PRIMARY KEY ( company_class_id )
 ) engine=InnoDB;

CREATE TABLE country ( 
	country_id           int  NOT NULL  AUTO_INCREMENT,
	country_name         varchar(100)    ,
	CONSTRAINT pk_country PRIMARY KEY ( country_id )
 ) engine=InnoDB;

CREATE TABLE currency ( 
	currency_id          int  NOT NULL  AUTO_INCREMENT,
	currency_name        varchar(100)    ,
	currency_code        varchar(5)    ,
	CONSTRAINT pk_currency PRIMARY KEY ( currency_id )
 ) engine=InnoDB;

CREATE TABLE education_level ( 
	edu_level_id         int  NOT NULL  AUTO_INCREMENT,
	edu_level_name       varchar(100)    ,
	CONSTRAINT pk_education_level PRIMARY KEY ( edu_level_id )
 ) engine=InnoDB;

CREATE TABLE employees_count ( 
	employees_count_id   int  NOT NULL  AUTO_INCREMENT,
	employees_value      varchar(100)    ,
	CONSTRAINT pk_employees_count PRIMARY KEY ( employees_count_id )
 ) engine=InnoDB;

CREATE TABLE employer ( 
	employer_id          int  NOT NULL  AUTO_INCREMENT,
	company_class_id     int    ,
	company_name         varchar(100)    ,
	website_url          varchar(100)    ,
	employees_count_id   int    ,
	city_id              int    ,
	contact_first_name   varchar(100)    ,
	contact_last_name    varchar(100)    ,
	contact_email        varchar(100)    ,
	contact_cellphone    varchar(100)    ,
	contact_cellphone_ext varchar(100)    ,
	CONSTRAINT pk_employer_0 PRIMARY KEY ( employer_id ),
	CONSTRAINT pk_employer_1 UNIQUE ( company_class_id ) 
 ) engine=InnoDB;

CREATE INDEX idx_employer ON employer ( city_id );

CREATE INDEX idx_employer_0 ON employer ( employees_count_id );

CREATE TABLE employment_type ( 
	employment_type_id   int  NOT NULL  AUTO_INCREMENT,
	employment_type_name varchar(100)    ,
	CONSTRAINT pk_employment_type PRIMARY KEY ( employment_type_id )
 ) engine=InnoDB;

CREATE TABLE gender ( 
	gender_id            int  NOT NULL  AUTO_INCREMENT,
	gender_name          varchar(30)    ,
	CONSTRAINT pk_gender PRIMARY KEY ( gender_id )
 ) engine=InnoDB;

CREATE TABLE industry ( 
	industry_id          int  NOT NULL  AUTO_INCREMENT,
	industry_name        varchar(100)    ,
	CONSTRAINT pk_industry PRIMARY KEY ( industry_id )
 ) engine=InnoDB;

CREATE TABLE language ( 
	language_id          int  NOT NULL  AUTO_INCREMENT,
	language_name        varchar(100)    ,
	CONSTRAINT pk_language PRIMARY KEY ( language_id )
 ) engine=InnoDB;

CREATE TABLE language_level ( 
	language_level_id    int  NOT NULL  AUTO_INCREMENT,
	language_level_name  varchar(100)    ,
	CONSTRAINT pk_language_knowledge PRIMARY KEY ( language_level_id )
 ) engine=InnoDB;

CREATE TABLE professional_area ( 
	professional_area_id int  NOT NULL  AUTO_INCREMENT,
	professional_area_name varchar(50)    ,
	industry_id          int    ,
	CONSTRAINT pk_professional_area PRIMARY KEY ( professional_area_id )
 ) engine=InnoDB;

CREATE INDEX idx_professional_area ON professional_area ( industry_id );

CREATE TABLE relocation ( 
	relocation_id        int  NOT NULL  AUTO_INCREMENT,
	relocation_status    varchar(30)    ,
	CONSTRAINT pk_relocation PRIMARY KEY ( relocation_id )
 ) engine=InnoDB;

CREATE TABLE table_ ( 
 );

CREATE TABLE table__001 ( 
 );

CREATE TABLE table__002 ( 
 );

CREATE TABLE vacancy ( 
	vacancy_id           int  NOT NULL  AUTO_INCREMENT,
	employer_id          int    ,
	industry_id          int    ,
	position             varchar(50)    ,
	salary               varchar(20)    ,
	salary_currency_id   int    ,
	required_experience  varchar(30)    ,
	city_id              int    ,
	post_date            date    ,
	info                 varchar(1000)    ,
	employment_type_id   int    ,
	CONSTRAINT pk_vacancy PRIMARY KEY ( vacancy_id )
 ) engine=InnoDB;

CREATE INDEX idx_vacancy ON vacancy ( employer_id );

CREATE INDEX idx_vacancy_0 ON vacancy ( industry_id );

CREATE INDEX idx_vacancy_1 ON vacancy ( employment_type_id );

CREATE TABLE applicant ( 
	applicant_id         int  NOT NULL  AUTO_INCREMENT,
	first_name           varchar(100)    ,
	last_name            varchar(100)    ,
	password             varchar(100)    ,
	email                varchar(100)    ,
	cellphone            varchar(100)    ,
	cv_id                int    ,
	CONSTRAINT pk_employer PRIMARY KEY ( applicant_id ),
	CONSTRAINT pk_applicant UNIQUE ( first_name ) ,
	CONSTRAINT pk_applicant_0 UNIQUE ( last_name ) ,
	CONSTRAINT pk_applicant_1 UNIQUE ( cellphone ) ,
	CONSTRAINT pk_applicant_2 UNIQUE ( email ) 
 ) engine=InnoDB;

CREATE INDEX idx_applicant ON applicant ( cv_id );

CREATE TABLE cv ( 
	cv_id                int  NOT NULL  AUTO_INCREMENT,
	first_name           varchar(100)    ,
	last_name            varchar(100)    ,
	cellphone            varchar(100)    ,
	birth_date           date    ,
	gender_id            int    ,
	email                varchar(100)    ,
	city_of_residence_id int    ,
	citizenship_id       int    ,
	relocation_id        int    ,
	desired_position     varchar(30)    ,
	salary               varchar(20)    ,
	salary_currency_id   int    ,
	currency_id          int    ,
	professional_area_id int    ,
	about                varchar(300)    ,
	CONSTRAINT pk_cv PRIMARY KEY ( cv_id )
 ) engine=InnoDB;

CREATE INDEX idx_cv ON cv ( gender_id );

CREATE INDEX idx_cv_0 ON cv ( city_of_residence_id );

CREATE INDEX idx_cv_1 ON cv ( citizenship_id );

CREATE INDEX idx_cv_2 ON cv ( relocation_id );

CREATE INDEX idx_cv_3 ON cv ( professional_area_id );

CREATE INDEX idx_cv_4 ON cv ( first_name );

CREATE INDEX idx_cv_5 ON cv ( last_name );

CREATE INDEX idx_cv_6 ON cv ( cellphone );

CREATE INDEX idx_cv_7 ON cv ( email );

CREATE INDEX idx_cv_8 ON cv ( salary_currency_id );

CREATE TABLE education ( 
	cv_id                int    ,
	education_id         int  NOT NULL  AUTO_INCREMENT,
	edu_level_id         int    ,
	edu_institution_name varchar(100)    ,
	edu_department       varchar(100)    ,
	edu_specialization   varchar(100)    ,
	edu_graduation_year  date    ,
	CONSTRAINT pk_education PRIMARY KEY ( education_id )
 ) engine=InnoDB;

CREATE INDEX idx_education ON education ( cv_id );

CREATE INDEX idx_education_0 ON education ( edu_level_id );

CREATE TABLE language_proficiency ( 
	cv_id                int    ,
	language_proficiency_id int  NOT NULL  AUTO_INCREMENT,
	language_id          int    ,
	language_level_id    int    ,
	CONSTRAINT pk_language_proficiency PRIMARY KEY ( language_proficiency_id )
 ) engine=InnoDB;

CREATE INDEX idx_language_proficiency ON language_proficiency ( language_id );

CREATE INDEX idx_language_proficiency_0 ON language_proficiency ( cv_id );

CREATE INDEX idx_language_proficiency_1 ON language_proficiency ( language_level_id );

CREATE TABLE workplace ( 
	cv_id                int    ,
	workplace_id         int  NOT NULL  AUTO_INCREMENT,
	start_of_work        date    ,
	to_present           bool    ,
	end_of_work          date    ,
	organization_name    varchar(100)    ,
	position             varchar(50)    ,
	legend               varchar(300)    ,
	CONSTRAINT pk_workplace PRIMARY KEY ( workplace_id )
 ) engine=InnoDB;

CREATE INDEX idx_workplace ON workplace ( cv_id );

ALTER TABLE applicant ADD CONSTRAINT fk_applicant FOREIGN KEY ( cv_id ) REFERENCES cv( cv_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv FOREIGN KEY ( gender_id ) REFERENCES gender( gender_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_0 FOREIGN KEY ( city_of_residence_id ) REFERENCES city( city_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_1 FOREIGN KEY ( citizenship_id ) REFERENCES country( country_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_2 FOREIGN KEY ( relocation_id ) REFERENCES relocation( relocation_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_3 FOREIGN KEY ( professional_area_id ) REFERENCES professional_area( professional_area_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_4 FOREIGN KEY ( first_name ) REFERENCES applicant( first_name ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_5 FOREIGN KEY ( last_name ) REFERENCES applicant( last_name ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_6 FOREIGN KEY ( cellphone ) REFERENCES applicant( cellphone ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_7 FOREIGN KEY ( email ) REFERENCES applicant( email ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE cv ADD CONSTRAINT fk_cv_8 FOREIGN KEY ( salary_currency_id ) REFERENCES currency( currency_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE education ADD CONSTRAINT fk_education FOREIGN KEY ( cv_id ) REFERENCES cv( cv_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE education ADD CONSTRAINT fk_education_0 FOREIGN KEY ( edu_level_id ) REFERENCES education_level( edu_level_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE employer ADD CONSTRAINT fk_employer FOREIGN KEY ( company_class_id ) REFERENCES company_class( company_class_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE employer ADD CONSTRAINT fk_employer_0 FOREIGN KEY ( city_id ) REFERENCES city( city_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE employer ADD CONSTRAINT fk_employer_1 FOREIGN KEY ( employees_count_id ) REFERENCES employees_count( employees_count_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE language_proficiency ADD CONSTRAINT fk_language_proficiency FOREIGN KEY ( language_id ) REFERENCES language( language_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE language_proficiency ADD CONSTRAINT fk_language_proficiency_0 FOREIGN KEY ( cv_id ) REFERENCES cv( cv_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE language_proficiency ADD CONSTRAINT fk_language_proficiency_1 FOREIGN KEY ( language_level_id ) REFERENCES language_level( language_level_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE professional_area ADD CONSTRAINT fk_professional_area FOREIGN KEY ( industry_id ) REFERENCES industry( industry_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE vacancy ADD CONSTRAINT fk_vacancy FOREIGN KEY ( employer_id ) REFERENCES employer( employer_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE vacancy ADD CONSTRAINT fk_vacancy_0 FOREIGN KEY ( industry_id ) REFERENCES industry( industry_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE vacancy ADD CONSTRAINT fk_vacancy_1 FOREIGN KEY ( employment_type_id ) REFERENCES employment_type( employment_type_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE workplace ADD CONSTRAINT fk_workplace FOREIGN KEY ( cv_id ) REFERENCES cv( cv_id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

