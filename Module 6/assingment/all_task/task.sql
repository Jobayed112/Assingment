
-- quey 1  task 1
SELECT customers.CustomerID AS customer_id, 
       customers.Name AS customer_name, 
       customers.Email AS customer_email, 
       COUNT(orders.OrderID) AS total_orders
FROM customers
LEFT JOIN orders ON customers.CustomerID = orders.CustomerID
GROUP BY customers.CustomerID, customers.Name, customers.Email
ORDER BY total_orders DESC;
-- task 2
SELECT orders.OrderID as order_id,
products.ProductID as product_id,
order_items.Quantity,
order_items.Quantity * Products.Price as total_amount
FROM orders
join order_items on orders.OrderID = order_items.OrderID
JOIN products on order_items.ProductID = products.ProductID
order by orders.OrderID asc;
-- //task3
select categories.Name,
sum(order_items.Quantity * products.Price) as total_revenue
from products
join categories on products.ProductID = categories.CategoryID
join order_items on products.ProductID=order_items.OrderID
group by categories.Name
order by total_revenue desc;
-- task4
select customers.Name as Customer_name,
sum(orders.TotalAmount) as total_purchase_amount
from customers
join orders on customers.CustomerID =orders.OrderID
group by customers.Name
order by total_purchase_amount desc
-- limit 5;