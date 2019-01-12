
## Step 1 - Create Data Base

CREATE DATABASE demo;

## Step 2 - Create persons table

CREATE TABLE persons (id INT NOT NULL AUTO_INCREMENT, first_name VARCHAR(30), last_name VARCHAR(30), email(40), PRIMARY KEY (id));

## Step 3 - Insert data into Data Base

INSERT INTO persons (first_name,last_name,email) VALUES ( "first_name", "last_name", "email");

## Set-up Database code into travelProject.php
```
	$servername = "localhost";
	$username = "#YourUserName";
	$password = "YourPassword";
	$dbname = "demo";
```

## Open TravelProject File on Chrome

Inline-style: 
![alt text](https://raw.githubusercontent.com/onahump/Travel-Project/master/pacific_travel.png "Pacific Travels image")




