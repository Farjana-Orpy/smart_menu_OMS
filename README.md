# Smart Menu OMS

**A simple way to manage restaurant menus and orders.**

Smart Menu is a PHP and MySQL web application for organising food items, recording orders, and managing restaurant order information.

## Features

- **Menu management** — Add, view, edit, and remove food items.
- **Order placement** — Record customer orders and quantities.
- **Order overview** — Review, update, and remove orders.
- **Price calculation** — Calculate order totals from menu prices.

## Technology

PHP · MySQL · HTML · XAMPP

## Repository guide

| File | Purpose |
| --- | --- |
| [`index.php`](index.php) | Main application page |
| [`add_menu.php`](add_menu.php) | Add menu items |
| [`order.php`](order.php) | Order form |
| [`orders.php`](orders.php) | Manage orders |
| [`db.php`](db.php) | Database connection |

## Local setup

Run Apache and MySQL through XAMPP, configure your MySQL database in `db.php`, and open the application from your local server. The required schema must be created separately; this repository does not include an SQL import file.

*An academic web and database management project.*
