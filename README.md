# 🛒 ShoppingCart Back End 
## 🎓 Final PHP Project

Welcome to the **ShoppingCart Back End**! This application was developed as my final project for a PHP course, utilizing the **Laravel** framework. It features seamless **Google OAuth integration** for convenient user logins, along with traditional email and password authentication for account creation. Each user is provided with a personalized shopping cart to enhance their shopping experience.

> **Note:** This repository contains only the backend portion of the application.

---

## ⚙️ Configuration Steps

To configure the Laravel application after cloning this repository, follow these steps:

### 1. Clone the Repository

    ```bash
    git clone [repository-url]


**Navigate to the Project Directory:**

    ```bash
    cd [project-directory]

**Install Dependencies:**

    ```bash
    composer install

**Copy the Environment File:**
    
    ```bash
    cp .env.example .env

**Generate the Application Key:**
    
    ```bash
    php artisan key:generate

**Run database migrations:**
    
    ```bash
    php artisan migrate

**Seed the Database (if you want to use my mock data):**
    
    ```bash
    php artisan db:seed

Serve the Application on port 8001 since the google API uses default port 8000:
    
    ```bash
    php artisan serve --port=8001

### 🎉 Access the Application

You can now access the application at **[http://localhost:8001](http://localhost:8001)**.

---

> **⚠️ Important:**  
> Please ensure you run a MySQL server on port **3306** to avoid connectivity issues.

---

## 📚 Features

- User authentication via **Google OAuth** and email/password.
- Personalized shopping cart for an enhanced user experience.
- Mock data for testing and demonstration purposes.

## 🛠️ Technologies Used

- **Laravel** - PHP framework for web application development.
- **MySQL** - Database management system.
- **Composer** - Dependency management tool for PHP.

---

Feel free to contribute to the project or reach out with any questions!


