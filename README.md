# 🛒 E-commerce Product Management System

A modern, web-based **Product & Category Management System** built using **Laravel 12**, **Vue.js 3**, and **Tailwind CSS**. This application enables dynamic management of products and categories with a many-to-many relationship. It features a responsive UI, Vue-powered frontend interactions, and clean backend logic.

---

## 🚀 Key Features

- Robust Laravel 12 backend with RESTful API structure  
- Vue 3-based dynamic frontend components  
- Tailwind CSS for modern, responsive design  
- CRUD operations for:
  - 🛍️ Products
  - 📂 Categories
- Many-to-Many relationship between Products and Categories  
- Admin dashboard with clean UX/UI  
- Optional: Blade or Vue-based rendering depending on preference  

---

## 🧰 Tech Stack

| Layer         | Technology              |
|---------------|--------------------------|
| Backend       | Laravel 12               |
| Frontend      | Vue.js 3, Laravel Blade  |
| Styling       | Tailwind CSS             |
| Database      | MySQL (or Laravel-supported DBs) |
| Build Tools   | Vite, NPM                |
| Optional Auth | Laravel Breeze/Sanctum   |

---

## ⚙️ Installation Guide

### 1. Clone the Repository
```bash
git clone https://github.com/siammahfuz/E-commerce-product-management-system.git
cd ecommerce-product-management

2. Install Backend Dependencies
bash
Copy
Edit
composer install
3. Install Frontend Dependencies
bash
Copy
Edit
npm install
npm run dev
4. Configure Environment
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
🔧 Update your .env file with correct DB credentials.

5. Run Migrations
bash
Copy
Edit
php artisan migrate
6. Serve the Application
bash
Copy
Edit
php artisan serve
The app will be available at http://localhost:8000.

📁 Project Structure
swift
Copy
Edit
├── app/Http/Controllers/
│   ├── ProductController.php
│   └── CategoryController.php
├── database/migrations/
│   ├── create_products_table.php
│   ├── create_categories_table.php
│   └── create_category_product_table.php
├── resources/js/components/
│   └── ProductComponent.vue
├── resources/views/products/
│   └── index.blade.php
├── routes/
│   └── web.php

👤 Author
Md Mahfuzur Rahman Siam
Computer Engineer
📧 Email: ksiam3409@gmail.com
Portfolio: https://siammahfuz.github.io/
