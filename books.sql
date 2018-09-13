INSERT INTO BOOKS 
VALUES
	('0743273567', "F. Scott Fitzgerald", "The Great Gatsby", 10.99, "Literary Fiction"),
    ('0060935464', "Harper Lee", "To Kill A Mockingbird", 8.99, "Literary Fiction"),
    ('0133970779', "Ramez Elmasri", "Fundamentals of Database Systems", 153.49, "Computer Science"),
    ('0451524934', "George Orwell", "1984", 6.99, "Science Fiction"),
    ('0199535566', "Jane Austen", "Pride and Prejudice", 6.81, "Historical Fiction"),
    ('0385474547', "Chinua Achebe", "Things Fall Apart", 10.24, "World Literature"),
    ('1451673310', "Ray Bradbury", "Fahrenheit 451", 8.99, "Science Fiction"), 
    ('0073523402', "Sanjoy Dasgupta", "Algorithms", 37.54, "Mathematics"), 
    ('0984782850', "Gayle Laakmann McDowell", "Cracking the Coding Interview",37.95, "Computer Science"), 
    ('9332543518', "Stuart J. Russell", "Artificial Intelligence: A Modern Approach", 29.99, "Computer Science"),
    ('0340977736', "Randy Pausch", "The Last Lecture", 16.83, "Biographical");
    
SELECT * FROM BOOKS;

SELECT * FROM MEMBERS;
TRUNCATE TABLE MEMBERS;

SELECT * FROM CART;
TRUNCATE TABLE CART;

SELECT * FROM ORDERDETAILS;
TRUNCATE TABLE ORDERDETAILS;

SELECT * FROM ORDERS;
TRUNCATE TABLE ORDERS;
