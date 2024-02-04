# CodeIgniter 4 Application Starter

# Booking-api
1. git clone
2. composer update

Buat databse dengan nama booking_api

lalu buat tabel dengan perintah dibawah

CREATE table member ( 
          id INT NOT NULL AUTO_INCREMENT, 
		  nama VARCHAR(255) NOT NULL,
		  email VARCHAR(255) NOT NULL,
	      password VARCHAR(255) NOT NULL,
		  PRIMARY KEY(id) 
);

CREATE table member_token (
    id INT NOT NULL AUTO_INCREMENT,
    member_id INT NOT NULL,
    auth_key VARCHAR(255) NOT NULL,
    FOREIGN KEY (member_id) REFERENCES member(id) on update cascade on delete no action,
    PRIMARY KEY(id) 
); 

CREATE table booking (
    id INT NOT NULL AUTO_INCREMENT,
    nama_lapang VARCHAR(255) NOT NULL,
    tanggal VARCHAR(255) NOT NULL,
    jam_mulai VARCHAR(255) NOT NULL,
    total_jam_main VARCHAR(255) NOT NULL,
    nominal INT NOT NULL,
    PRIMARY KEY(id) 
);