create table user (
    p_id INT(7) NOT NULL AUTO_INCREMENT,
    p_name varchar(100),
    p_email varchar(100),
    username varchar(100) UNIQUE,
    pass varchar(100),

    primary key (p_id)
);

create table vehicle (
    v_id INT(7) NOT NULL AUTO_INCREMENT,
    v_make varchar(100),
    v_model varchar(100),
    v_year INT(7),
    v_personID INT(7),

	primary key (v_id),
    foreign key (v_personID) references user(p_id)
);

create table fillup (
    f_date date,
    f_odometer INT(7),
    f_quantity INT(7),
    f_price INT(7),
    f_cost INT(7),
    f_station varchar(100),
	f_vehicleID INT(7),
    
    foreign key (f_vehicleID) references vehicle(v_id)
);

create table expense (
    e_date date,
    e_odometer INT(7),
    e_type varchar(100),
    e_cost INT(7),
	e_vehicleID INT(7),
    
    foreign key (e_vehicleID) references vehicle(v_id)
);

create table service (
    s_date date,
    s_odometer INT(7),
    s_type varchar(100),
    s_center varchar(100),
    s_cost INT(7),
	s_vehicleID INT(7),
    
    foreign key (s_vehicleID) references vehicle(v_id)
);