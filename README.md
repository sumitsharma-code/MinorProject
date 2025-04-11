# Inventory Management Dashboard

An interactive web-based **Inventory Management System** that allows admins to manage suppliers, stores, orders, and track real-time business metrics like **sales**, **purchases**, **profit**, and more. The dashboard also includes dynamically generated visualizations using **Chart.js** and integrates with a **MySQL** database.

---

## 🔧 Features

- 📦 **Inventory Management**: Track product quantities, orders, and suppliers.
- 📊 **Dashboard Analytics**:
  - Sales, Purchases, Profit, and Cost overview.
  - Quantity in hand, purchase amount, revenue, and pending stock.
- 🧮 **Real-Time Charts**:
  - Sales & Purchase bar graph.
  - Line charts for order trends.
- 👨‍💼 **Supplier & Store Management**:
  - Add/edit/delete suppliers and store locations.
- 📝 **Order Tracking**:
  - Capture product details, quantity, order value, selling price, and category.
  - Auto-record order date.
- 💾 **Persistent Storage**: Powered by MySQL, integrated via PHP.

---

## 📁 Folder Structure

```bash
MinorProject/
├── Components/
│ └── Searchbar.html
├── CSS/
│ ├── index.css
│ └── output.css
├── IMG/
│ └── (Icons, Logos, Product Images)
├── Pages/
│ ├── Orders.html
│ ├── Suppliers.html
│ ├── Store.html
│ └── ... (other pages)
├── php/
│ ├── add_order.php
│ ├── add_store.php
│ ├── add_supplier.php
│ ├── connection.php
│ ├── fetch_dashboard_stats.php
│ ├── fetch_orders.php
│ ├── fetch_sales_purchase_data.php
│ ├── fetch_stores.php
│ ├── fetch_suppliers.php
│ └── ... (other PHP scripts)
├── index.php
├── landingpage.html
└── README.md
```

---

## 📦 Database Schema

**Tables Used:**

- `orders` – stores all order-related data
- `suppliers` – supplier details
- `stores` – individual store locations
- `products` – product list (optional, if linked)

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS (Tailwind), JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Visualization**: Chart.js

---

## 👥 Authors

- **Satyam**
- **Sumit**
- **Nikhil**
- **Mayank**

---

## 🧠 Future Enhancements

- Email notifications for low stock
- Role-based authentication (admin/user)
- Export reports to PDF/CSV
- REST API endpoints for external integrations

---

## ⚙️ Setup Instructions

1. Import the SQL tables to your MySQL server.
2. Update `/php/connection.php` with your DB credentials.
3. Run the project using a local server (e.g., XAMPP).
4. Access the dashboard via `http://localhost/MinorProject/index.php`

---

> 🔐 This project is intended for learning and demonstration purposes.
