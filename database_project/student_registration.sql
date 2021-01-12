create DATABASE student_registration;
use student_registration;

create Table department(
    dept_id int not null Auto_Increment,
    dept_name varchar(50) unique not null,
    description varchar(255) not null,
    PRIMARY key (dept_id)
);


create Table user(
    user_id int not null Auto_Increment,
    email varchar(50) not null,
    username varchar(50) unique not null,
    password varchar(100),
    registration_date timestamp,
    dept_id int,
    PRIMARY key (user_id),
    foreign key (dept_id) REFERENCES department(dept_id)
);


create Table course(
    course_id int not null Auto_Increment,
    course_name varchar(50) unique not null,
    course_description varchar(100) not null,
    instructor_name varchar(50) not null,
    credit_hours int,
    dept_id int,
    PRIMARY key (course_id),
    foreign key (dept_id) REFERENCES department(dept_id)
);


INSERT into department (dept_id,dept_name) values (1,"communication");
INSERT into department (dept_id,dept_name) values (2,"computer");
INSERT into department (dept_id,dept_name) values (3,"electromechanics");
INSERT into department (dept_id,dept_name) values (4,"structure");


INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values ("digital","communication subject","ahmad",3,1);
INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values ("analog","communiction subject2","ali",3,1);
INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values
("programming1","computer subject1","osman",4,2);
INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values
("algorithms","computer subject2","salma",3,2);
INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values
("mechanics1","electromechanics subject1","osama",4,3);
INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values
("mechanics2","electromechanics subject2","nouran",3,3);
INSERT into course (course_name,course_description,instructor_name,credit_hours,dept_id) values ("architacture","structure subject1","adel",3,4);