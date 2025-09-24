# 📌 PDF Feedback System

This project is built as part of an assignment to demonstrate **backend and frontend development skills**.  
It allows users to **upload PDF files, highlight sections, and add comments** in a user-friendly way.

---

## ✨ Features

### 🔐 Authentication
- Basic login/register functionality  

### 📂 Project Module
- Add project with **Project Name**  
- Upload **PDF file**  

### 📝 Feedback Module
- View uploaded PDF  
- Highlight specific sections of PDF  
- Add comments on highlighted areas  

### 🎨 Frontend
- Clean and simple interface  
- PDF viewer with highlight & comment support  

---

## 🛠️ Tech Stack
- **Backend:** Laravel (PHP)  
- **Frontend:** Blade + Vite + JavaScript  
- **Database:** MySQL  
- **Package Management:** Composer & NPM  

---

## 🚀 Installation Guide

Follow these steps to set up and run the project locally:

### 1️⃣ Clone Repository
```bash
git clone <your-repo-link>
cd <project-folder>

composer update 
npm install 
php artisan migrate
php artisan optimize:clear 
php artisan serve
npm run dev