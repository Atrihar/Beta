show databases;


Set sql_safe_updates = 0;

create database beta;

use beta;

create table scale(
	grade int auto_increment primary key,
    post varchar(30) not null,
    salar_day int not null
) engine=InnoDB;

show tables;
desc scale;

create table employee(
	em_id int auto_increment primary key,
    em_name varchar(50) not null,
    em_img blob,
    em_mail varchar(50) not null,
    em_contact varchar(20) not null,
    em_address varchar(100) not null,
    date_of_birth date not null,
    edu_qualification varchar(200) not null,
    joining_date date not null,
    em_pass varchar(15) not null,
    gender enum('Male', 'Female', 'Other'),
    grade int,
    index (grade),
    foreign key (grade)
		references scale(grade)
        on delete set null
        on update cascade
)engine= InnoDB;


show tables;
desc employee;

create table client(
	cl_id int auto_increment primary key,
    cl_name varchar(40) not null,
    cl_email varchar(30) not null,
    cl_contact varchar(15) not null,
    cl_address varchar(100) not null
)engine= InnoDB;

show tables;
desc client;
insert into client(cl_name, cl_email, cl_contact, cl_address) values("Globe Tech","globe@tech.com","0312788888","Chittagong");
select * from client;

create table project(
	pro_id int auto_increment primary key,
    pro_name varchar(30) not null,
    pro_des varchar(200) not null,
    starting_date datetime not null,
    deadline datetime not null,
    pro_type enum('Web-development', 'Graphics design','Software development','Digital Marketing'),
    em_id int,
    index (em_id),
    cl_id int,
    index (cl_id),
    foreign key (em_id)
		references employee(em_id)
        on delete set null
        on update cascade,
	foreign key (cl_id)
		references client(cl_id)
        on delete set null
        on update cascade
)engine=InnoDB;

show tables;
desc project;

create table user_reg(
	user_id int auto_increment primary key,
    user_fname varchar(25) not null,
    user_lname varchar(25) not null,
    user_email varchar(40) not null,
    user_contact varchar(20) not null,
    user_pass varchar(16) not null
)engine=InnoDB;

show tables;
desc user_reg;

create table login(
	login_id int auto_increment primary key,
    login_email varchar(50) not null,
    login_contact varchar(20) not null,
    login_pass varchar(20) not null
)engine=InnoDB;

show tables;
desc login;

/* after insert trigger for inserting data into login table from employee and user_reg table*/


DELIMITER $$

create trigger employee_login
after insert
on employee for each row

begin
	insert into login(login_email, login_contact, login_pass) values(new.em_mail, new.em_contact, new.em_pass);
end $$

DELIMITER ;


DELIMITER $$

create trigger user_login
after insert
on user_reg for each row

begin
	insert into login(login_email, login_contact, login_pass) values(new.user_email, new.user_contact, new.user_pass);
end $$

DELIMITER ;

show triggers;