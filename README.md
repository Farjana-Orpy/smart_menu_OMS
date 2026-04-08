# 🍽️ Smart Menu Order Management System

## 📌 Project Overview
The Smart Menu Order Management System is a web-based application developed using PHP and MySQL. It allows restaurant staff or users to manage food menus, place orders, and track customer purchases efficiently.

This project demonstrates CRUD operations and relational database design in a real-world restaurant scenario.


## 🚀 Features

- Add new food items to the menu
- View available menu items
- Place customer orders
- Calculate total order price automatically
- View all orders
- Delete orders


## 🛠️ Technologies Used

- PHP
- MySQL
- HTML
- XAMPP (Local Server)
  

## 🗄️ Database Structure

### 🔹 Table: menu

- id (Primary Key)
- name
- price
- category
- description
- image

### 🔹 Table: orders

- id (Primary Key)
- food_id (Foreign Key)
- customer_name
- quantity
- total_price
- order_date

## 📁 Project Structure

menu_order_system/\
│\
├── db.php\
├── index.php\
├── add_menu.php\
├── insert_menu.php\
├── order.php\
├── place_order.php\
├── orders.php\
├── delete_order.php\
├── css/\
└── images/


## ▶️ How to Run the Project

1. Install XAMPP
2. Place the project folder inside the htdocs directory
3. Start Apache and MySQL
4. Open phpMyAdmin
5. Create a database named `menu_order_db`
6. Create required tables using SQL
7. Open the browser and go to:


## 🎯 Purpose

This project was developed as an academic database/web development project to demonstrate CRUD operations and efficient data management using PHP and MySQL.

## 👨‍💻 Author

Farjana Zaman Orpy

