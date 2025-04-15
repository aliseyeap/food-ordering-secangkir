# ☕ Food Ordering System for Secangkir Coopitiam

This is a complete web-based Food Ordering System developed for **Secangkir Coopitiam**, designed to facilitate online table reservations, food and drink ordering, and payment handling. The system is user-friendly, secure, and feature-rich — offering both customer-facing and admin functionalities.

This project was built by using PHP, MySQL, PDO, and Bootstrap.

---

## 🚀 Features

### 🔐 Authentication
- User registration and login system
- Secure password hashing and verification
- Session-based user authentication

### 📅 Table Booking System
- Book tables with real-time availability
- Robust input validation
- Booking management for users

### 🛒 Cart & Ordering System
- Add drinks and food items to cart
- Manage cart items
- Checkout system with PayPal integration
- Order confirmation and history

### 📋 Menu Management
- Display of dynamic product listings
- Category-based menu filtering
- Product image upload and editing

### ⭐ User Features
- View booking and order history
- Submit reviews for items
- Edit user profile information

### 🛠️ Admin Panel
- Manage menu items (CRUD operations)
- View and manage orders and bookings
- Dashboard with basic statistics

---

## 🧰 Tech Stack

- **Backend:** PHP, MySQL, PDO
- **Frontend:** HTML, CSS, Bootstrap
- **Payment Gateway:** PayPal
- **Database:** MySQL (via phpMyAdmin)
- **Hosting Environment:** Apache (XAMPP)

---

## 💻 Getting Started

Follow the steps below to run the Food Ordering System on your local environment.

### 1. Clone the Repository
```bash
git clone https://github.com/aliseyeap/food-ordering-secangkir.git
```


### 2. Set Up the Database
- Open phpMyAdmin.
- Create a new database named:
```bash
coffee-blend
```
- Import the provided SQL file (coffee-blend.sql) into the newly created database.


### 3. Configure Database Connection
- Navigate to config.php.
- Update the database connection settings according to your local environment.


### 4: Set Up PayPal Integration
- Navigate to pay.php.
- Replace the Sandbox Client ID  with your own PayPal Sandbox Business App Client ID or Live Client ID.


### 5. Start Local Web Server
- Open XAMPP.
- Start the following services:
```bash
Apache
MySQL
```


### 6. Launch the Application
- Open your browser and visit the following URLs:

🔗 Customer Landing Page
```bash
http://localhost/coffee-blend/
```

🔐 Admin Login Page
```bash
http://localhost/coffee-blend/admin-panel/admins/login-admins.php
```

---

## 📷 Screenshots

### 👤 Customer Interface

#### 🏠 Homepage
<img src="https://github.com/user-attachments/assets/afcaf173-a0bc-4a80-b29a-20fdf46ceed3" width="400"/>

#### 📋 Menu
<img src="https://github.com/user-attachments/assets/0f045d5a-4ce6-42be-a092-d9281f778e3c" width="400"/>

#### 💳 Checkout Page
<img src="https://github.com/user-attachments/assets/9aea9eda-771c-422c-b9cc-06c1fed75098" width="400"/>

---

### 🛠️ Admin Dashboard

#### 🧾 Orders Management
<img src="https://github.com/user-attachments/assets/fca5fb0d-a33c-49d9-b418-b221865374bd" width="400"/>

#### 🪑 Bookings Management
<img src="https://github.com/user-attachments/assets/32471190-88df-4ea3-b709-93eb241c6b8b" width="400"/>

#### 🍴 Menu Management
<img src="https://github.com/user-attachments/assets/551444d9-5cda-4da5-b384-429ce623d846" width="400"/>

---

### 👨‍💻 Author
Developed by @aliseyeap.

### 📄 License
This project is for educational and demonstration purposes.
