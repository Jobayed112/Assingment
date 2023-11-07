CREATE TABLE Products (
    ProductID INT PRIMARY KEY,
    Name VARCHAR(255),
    Description TEXT,
    Price DECIMAL(10, 2)
);

-- Insert data into Products table
INSERT INTO Products (ProductID, Name, Description, Price)
VALUES 
(1, 'Product A', 'Description for Product A', 50.99),
(2, 'Product B', 'Description for Product B', 75.49),
(3, 'Product C', 'Description for Product C', 120.00);
