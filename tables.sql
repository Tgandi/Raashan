create table customer ( 
						email varchar(30), name varchar(30), phone numeric(10,0), house_no varchar(5), street varchar(20), city varchar(20), state varchar(20), 
							password varchar(10), points numeric (7,2),
							primary key (email) 
						);
						
create table grocer ( 
						mobile numeric(10,0), shop_name varchar(30),shop_no varchar(5), street varchar(20), city varchar(20), state varchar(20), 
							avg_rating numeric (3,2),
							primary key (mobile) 
						);	

create table location ( 
						street varchar(20), city varchar(20),state varchar(20), 
							primary key (street, city, state) 
						);						
							
create table product_department ( 
									name varchar(30), department varchar(30), 
										primary key (name) ,
										foreign key (name) references product_department
								);	

create table products ( 
						product_id varchar(10), name varchar(30), department varchar(30), description varchar(50),
							primary key (product_id)					
						);	
						
create table grocer_has ( 
							mobile numeric(10,0), product_id varchar(10), max_quantity numeric(8,2), unit_price numeric(8,2),
								primary key (product_id, mobile), 
								foreign key (mobile) references grocer,
								foreign key (product_id) references products
						);	

create table rating ( 
						email varchar(30), mobile numeric(10,0), review varchar(100), stars numeric(2,0), 
							primary key (email, mobile), 
							foreign key (mobile) references grocer,
							foreign key (email) references customer
						);							
						
create table services ( 
						mobile numeric(10,0), street varchar(20), city varchar(20), state varchar(20), 
							primary key (mobile, street, city, state),
							foreign key (mobile) references grocer,
							foreign key (street, city, state) references location
						);	

create table order_details ( 
							  order_id varchar(10), email varchar(30), mobile numeric(10,0), order_date date, status varchar(10), points_used numeric(5,0), 
								amount numeric(10,2), 								
								primary key (order_id) ,
								foreign key (email) references customer,
								foreign key (mobile) references grocer
							);						
						
create table order_contains (
								order_id varchar(10), product_id varchar(10), quantity numeric(10,2),
								primary key (order_id, product_id),
								foreign key (order_id) references order_details,
								foreign key (product_id) references products
								);
						
create table contact	(
							id serial primary key, name varchar(20), email varchar(40), subject varchar(50), message varchar(100)
							);							
						
						
						
							
