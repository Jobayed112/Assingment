CREATE TABLE Customers (
    CustomerID INT PRIMARY KEY,
    Name VARCHAR(255),
    Email VARCHAR(255),
    Location VARCHAR(255)
);
-- add data
INSERT INTO Customers (CustomerID, Name, Email, Location)
VALUES (1, 'John Doe', 'john.doe@example.com', 'New York'),
       (2, 'Jane Smith', 'jane.smith@example.com', 'Los Angeles'),
       (3, 'Michael Johnson', 'michael.johnson@example.com', 'Chicago');
