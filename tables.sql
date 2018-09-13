CREATE TABLE BOOKS (
	isbn CHAR(10),
    author VARCHAR(100) NOT NULL, 
    title VARCHAR(128) NOT NULL, 
    price DECIMAL(7,2) NOT NULL, 
    subject VARCHAR(30) NOT NULL
);

CREATE TABLE MEMBERS (
	fname VARCHAR(20) NOT NULL, 
    lname VARCHAR(20) NOT NULL, 
    address VARCHAR(50) NOT NULL, 
    city VARCHAR(30) NOT NULL, 
    state VARCHAR(20) NOT NULL, 
    zip INTEGER(5) NOT NULL, 
    phone VARCHAR(12), 
    email VARCHAR(40),
    userid VARCHAR(20),
    memberPW VARCHAR(20), 
    creditcardType VARCHAR(10) CHECK (creditcardType in ('amex', 'discover', 'mc', 'visa')),
    creditcardnumber INTEGER(16)
);

CREATE TABLE ORDERS (
	userid VARCHAR(20) NOT NULL, 
    orderNum INTEGER(5),
    receivedDate DATE NOT NULL, 
    shippedDate DATE, 
    shipAddress VARCHAR(50),
    shipCity VARCHAR(30),
    shipState VARCHAR(20), 
    shipZip INTEGER(5)
);

CREATE TABLE ORDERDETAILS (
	orderNum INTEGER(5), 
    isbn CHAR(10),
    quantity INTEGER(5) NOT NULL, 
    price DECIMAL(7,2) NOT NULL
);

CREATE TABLE CART (
	userid VARCHAR(20),
    isbn CHAR(10),
    quantity INTEGER(5) NOT NULL
);


