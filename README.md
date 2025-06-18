🚀 E-commerce Product Management System

A robust and scalable E-commerce Product Management platform built with Laravel 12, Vue.js / Laravel Blade, and styled using Tailwind CSS. This project demonstrates advanced Laravel concepts such as many-to-many relationships, clean API architecture, and responsive, modern frontend design.
📖 Project Overview

This project is designed to manage products and categories for an e-commerce platform with the following core functionalities:

    ✅ Product & Category CRUD (Create, Read, Update, Delete)

    ✅ Many-to-Many Relationship between products and categories

    ✅ Flexible Frontend Implementation using Vue.js or Laravel Blade

    ✅ Clean, responsive UI with Tailwind CSS

🛠️ Technologies Used
Technology	Description
Laravel 12	PHP Framework (Backend API)
Vue.js	Frontend JavaScript Framework (optional with Blade)
Tailwind CSS	Utility-first CSS framework for UI
MySQL / PostgreSQL	Relational Database
Composer	Dependency Management (PHP)
NPM	Frontend asset compilation
⚙️ Installation & Setup Guide
1️⃣ Clone the Repository

git clone https://github.com/siammahfuz/E-commerce-product-management-system.git
cd your-repository

2️⃣ Install Dependencies

composer install
npm install && npm run dev

3️⃣ Configure Environment

cp .env.example .env
php artisan key:generate

    Set your DB_DATABASE, DB_USERNAME, and DB_PASSWORD in .env

4️⃣ Run Database Migrations

php artisan migrate

5️⃣ Launch Development Server

php artisan serve

✅ Application should now be accessible at:

http://localhost:8000

🗄️ Database Schema Overview

    products (id, name, description, price, created_at, updated_at)

    categories (id, name, created_at, updated_at)

    category_product (Pivot Table)
📜 License

This project is licensed under the MIT License.
👨‍💻 Author

Md Mahfuzur Rahman Siam
Computer Engineer
Email: ksiam3409@gmail.com
Portfolio: https://siammahfuz.github.io/
