# 🚀 Token Management System (Laravel)

A full-stack web application built using Laravel for managing employee/service tokens with admin control, status tracking, and dashboard analytics.

---

## 📌 Features

* 🔐 User Authentication (Login / Register)
* 🧾 Create, View, Edit, Delete Tokens
* 👨‍💻 Admin Panel for managing all tokens
* 🔄 Status Update (Pending / In Progress / Completed)
* 📊 Dashboard with Charts (Chart.js)
* 🔍 Filter Tokens by Status
* 🎨 Clean UI using Tailwind CSS
* 🔙 Navigation with Dashboard & Back buttons

---

## 🛠️ Tech Stack

* Backend: Laravel 12 (PHP)
* Frontend: Blade + Tailwind CSS
* Database: MySQL (XAMPP)
* Charts: Chart.js
* Version Control: Git & GitHub

---

## 📂 Project Structure

```
app/            → Controllers, Models
resources/views → UI (Blade templates)
routes/         → Web routes
database/       → Migrations
public/         → Entry point
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/ab-rar-6024/Token-management-system.git
cd Token-management-system
```

---

### 2️⃣ Install dependencies

```bash
composer install
npm install
```

---

### 3️⃣ Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

---

### 4️⃣ Configure database

Edit `.env` file:

```env
DB_CONNECTION=mysql
DB_DATABASE=token_system
DB_USERNAME=root
DB_PASSWORD=
```

---

### 5️⃣ Run migrations

```bash
php artisan migrate
```

---

### 6️⃣ Run project

```bash
php artisan serve
npm run dev
```

---

## 🌐 Usage

* Visit: `http://127.0.0.1:8000`
* Register a user
* Create tokens
* Admin can update status
* Dashboard shows analytics

---

## 📊 Dashboard Features

* Total Tokens
* Pending Tokens
* Completed Tokens
* Interactive Chart (Chart.js)
* Clickable cards for filtering

---

## 👨‍💻 Admin Access

To make a user admin:

1. Open phpMyAdmin
2. Go to `users` table
3. Change:

```
role = admin
```

---

## 📸 Screenshots (Add Later)

* Dashboard 📊
* Token List 📄
* Admin Panel 👨‍💻

---

## 🚀 Future Improvements

* 📤 Export to PDF / Excel
* 🔔 Notification system
* 📱 Mobile responsive UI
* 🌐 Deploy to cloud (Render / Railway)

---

## 👤 Author

**Mohamed Abrar**
GitHub: https://github.com/ab-rar-6024

---

## ⭐ Support

If you like this project, give it a ⭐ on GitHub!

---
