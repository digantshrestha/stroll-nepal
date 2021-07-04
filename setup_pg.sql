-- create table tbl_country(id serial primary key, country_name varchar(20) not null, 
-- country_lat int, country_long int, country_status boolean);

-- create table tbl_place(id serial primary key, place_name varchar(20) not null,
-- place_lat int, place_long int, place_ratings decimal null, place_details text, place_todos text, 
-- place_tips text, added_date timestamp default CURRENT_TIMESTAMP, 
-- modified_date timestamp null, status boolean, country_id bigint);

-- alter table tbl_place add foreign key(country_id) references tbl_country(id);

-- create table tbl_hotel(id serial primary key, hotel_name varchar(20), 
-- hotel_ratings decimal null, hotel_especiality text, hotel_reviews text,
-- added_date timestamp default CURRENT_TIMESTAMP, modified_date timestamp null, 
-- per_night_exp varchar(20), place_id bigint, status boolean);

-- alter table tbl_hotel add foreign key(place_id) references tbl_place(id);

-- create table tbl_restaurant(id serial primary key, restaurant_name varchar(20), 
-- restaurant_ratings decimal null, restaurant_especiality text, restaurant_reviews text, 
-- added_date timestamp default CURRENT_TIMESTAMP, modified_date timestamp null, 
-- avg_exp varchar(20), place_id bigint, status boolean);

-- alter table tbl_restaurant add foreign key(place_id) references tbl_place(id);

-- create table tbl_image(id serial primary key, img_name varchar(100),
-- img_path varchar(100), details text null, user_id bigint, 
-- added_date timestamp default CURRENT_TIMESTAMP, modified_date timestamp null, 
-- place_id bigint, status boolean);

-- alter table tbl_image add foreign key(place_id) references tbl_place(id);

-- create table tbl_user(id serial primary key, first_name varchar(20) not null, 
-- last_name varchar(20) not null, email varchar(50) unique not null, 
-- username varchar(20) not null, password text not null, address varchar(50),
-- description text, profile_img varchar(100), cover_img varchar(100), 
-- added_date timestamp default CURRENT_TIMESTAMP, modified_date timestamp null,
-- email_verified boolean default false, status boolean);

-- alter table tbl_image add foreign key(user_id) references tbl_user(id);

-- create table tbl_db_credentials(id serial primary key, databaseName varchar(20),
-- hostname text not null, username text,
-- password text, dbname text, port varchar(20), status boolean, 
-- created_date timestamp default CURRENT_TIMESTAMP, modified_date timestamp null);

-- insert into tbl_db_credentials(databaseName, hostname, username, password, dbname, port) 
-- values('mysql', 'localhost', 'root', 'database1234', 'strolling', '');

-- insert into tbl_db_credentials(databaseName, hostname, username, password, dbname, port) 
-- values('pgsql', 'ec2-34-232-191-133.compute-1.amazonaws.com', 
-- 'zytskhdptazbhi', '617cf0da88c717176c1b4f29327de9d0ebd84d2c73c6ab7e87cb94d38a34ee28', 
-- 'dfjh9no7ssbsji', '5432');

-- create table tbl_todos(id serial primary key, todo_activity varchar(50), 
-- activity_category bigint, price varchar(20), duration varchar(10), 
-- activity_info text, place_id bigint, added_date timestamp default CURRENT_TIMESTAMP,
-- modified_date timestamp null, status boolean);

-- alter table tbl_todos add foreign key(place_id) references tbl_place(id);

-- create table tbl_todoActivities_Category(id serial primary key, category varchar(50),
-- added_date timestamp default CURRENT_TIMESTAMP, modified_date timestamp null,
-- status boolean);

-- alter table tbl_todos add foreign key(activity_category) 
-- references tbl_todoActivities_Category(id);

