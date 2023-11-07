CREATE TABLE Order_Items (
    OrderItemID INT PRIMARY KEY,
    OrderID INT,
    ProductID INT,
    Quantity INT,
    UnitPrice DECIMAL(10, 2),
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);
-- Insert data into Order_Items table
INSERT INTO Order_Items (OrderItemID, OrderID, ProductID, Quantity, UnitPrice)
VALUES 
(1, 1, 1, 2, 50.99),
(2, 1, 2, 1, 75.49),
(3, 2, 3, 3, 40.00),
(4, 3, 1, 1, 50.99);
