# 🌸 PetalCart

> Fresh Flowers for Every Moment 💐

PetalCart adalah aplikasi marketplace bunga berbasis Laravel yang memungkinkan pelanggan membeli berbagai jenis bunga dengan tampilan yang elegan, modern, dan user-friendly. Sistem ini memiliki dua role utama yaitu **Admin** dan **Customer** dengan dashboard yang berbeda sesuai kebutuhan masing-masing.

---

## ✨ Features

### 👤 Customer

- 🔐 Login & Register
- 🏠 Customer Dashboard
- 🌷 Browse Flower Products
- 🛒 Add to Cart
- 📦 Checkout Products
- 📋 View Order History
- 👤 Manage Profile

### 🛠️ Admin

- 📊 Dashboard Overview
- 🌸 Manage Products
- 📦 Manage Orders
- 👥 Manage Customers
- 💰 Monitor Revenue
- 📈 View Store Statistics

---

## 🎨 Theme Design

PetalCart menggunakan kombinasi warna: 

🧈 Butter Pastel Yellow  
🌷 Soft Warm Pink  
🤍 Clean White

Untuk memberikan kesan: 

- Elegant
- Feminine
- Fresh
- Modern
- Cozy

---

## 🌼 Flower Collection

PetalCart menyediakan berbagai bunga populer: 

| Flower | Price |
|---------|---------|
| 🌸 Anemone | Rp150.000 |
| 🌿 Baby Breath | Rp175.000 |
| 🌺 Peony | Rp160.000 |
| 🌹 Red Rose | Rp145.000 |
| 🪻 Orchid | Rp180.000 |
| 🌻 Sunflower | Rp200.000 |
| 🤍 Lily | Rp165.000 |
| 🌼 Daisy | Rp130.000 |
| 🌷 Chrysanthemum | Rp185.000 |
| 💐 Hydrangea | Rp210.000 |

---

## 🖥️ Tech Stack

### Backend

- ⚙️ Laravel 13
- 🐘 PHP 8.3

### Frontend

- 🎨 Tailwind CSS
- ⚡ Vite
- 🖼️ Blade Template

### Database

- 🗄️ MySQL

---

## 📂 Project Structure

```bash
PetalCart/
│
├── app/
├── bootstrap/
├── database/
├── public/
│   └── images/
├── resources/
│   └── views/
│       ├── admin/
│       ├── customer/
│       └── auth/
├── routes/
│   └── web.php
└── README.md
```

---

## 🚀 Installation

### 1️⃣ Clone Repository

```bash
git clone https://github.com/yourusername/petalcart.git
```

### 2️⃣ Open Project

```bash
cd petalcart
```

### 3️⃣ Install Dependencies

```bash
composer install
npm install
```

### 4️⃣ Configure Environment

Copy:

```bash
.env.example
```

Become:

```bash
.env
```

Then set database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=flowershop
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Generate App Key

```bash
php artisan key:generate
```

### 6️⃣ Run Migration

```bash
php artisan migrate
```

### 7️⃣ Build Frontend

```bash
npm run dev
```

### 8️⃣ Run Server

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## 👥 User Roles

### 🛠️ Admin

Can:

- Manage products
- Manage orders
- Manage customers
- View analytics

### 👤 Customer

Can:

- Browse flowers
- Add products to cart
- Checkout
- View orders

---

## 📸 Screenshots

### 🏠 Customer Dashboard

_Add screenshot here_

### 🛒 Cart Page

_Add screenshot here_

### 📦 Orders Page

_Add screenshot here_

### 🛠️ Admin Dashboard

_Add screenshot here_

### 🌷 Product Management

_Add screenshot here_

---

## 🎯 Future Improvements

- ❤️ Wishlist Feature
- 💳 Online Payment Gateway
- 🚚 Delivery Tracking
- 🔔 Real-Time Notifications
- ⭐ Product Reviews
- 📱 Mobile Responsive Optimization

---

## 💡 Inspiration

PetalCart was created to provide a pleasant flower shopping experience through a modern marketplace platform with elegant floral aesthetics.

---

## 👨‍💻 Developed By

✨ Team PetalCart

Made with ❤️, 🌸 and ☕