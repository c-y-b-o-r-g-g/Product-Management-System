# Product Mangement System

## Table of Contents

-   Introduction
-   Features
-   Technologies Used
-   Installation
-   Database Setup
-   Running the Application
-   Project Structure
-   Routes
-   Controllers
-   Models
-   Views
-   Conclusion

## Introduction

The Laravel Product Management System is a comprehensive web application designed to manage products efficiently. It allows users to perform CRUD (Create, Read, Update, Delete) operations on products. This system is built using the Laravel framework, which provides a robust and scalable foundation for web applications. The application ensures data integrity and provides a user-friendly interface for managing products.

## Features

-   **Add Products**: Users can add new products with details such as name, price, description, quantity, and discount.
-   **Edit Products**: Users can edit existing product details.
-   **View Products**: Users can view a list of all products.
-   **Delete Products**: Users can delete products from the list.
-   **Validation**: Ensures that all product details are correctly entered before saving to the database.
-   **Default Values**: Automatically sets default values for certain fields if they are not provided.

## Technologies Used

-   **Laravel**: PHP framework for building web applications.
-   **MySQL**: Database management system.
-   **Bootstrap**: Front-end framework for responsive design.
-   **PHP**: Server-side scripting language.
-   **Composer**: Dependency manager for PHP.

## Installation

To get started with the Laravel Product Management System, follow these steps:

1. **Clone the repository**:

    ```bash
    git clone https://github.com/your-username/laravel-product-management.git
    cd laravel-product-management
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    ```

3. **Copy the `.env.example` file to `.env`**:

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key**:
    ```bash
    php artisan key:generate
    ```

## Database Setup

1. **Configure the database**:
   Open the `.env` file and update the following lines with your database credentials:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

2. **Run the migrations**:
    ```bash
    php artisan migrate
    ```

## Running the Application

1. **Start the development server**:

    ```bash
    php artisan serve
    ```

2. **Access the application**:
   Open your web browser and navigate to `http://localhost:8000`.

## Project Structure

The project follows the standard Laravel directory structure. Here are some key directories and files:

-   **app/Http/Controllers**: Contains the controllers for handling HTTP requests.
-   **app/Models**: Contains the Eloquent models.
-   **database/migrations**: Contains the migration files for creating database tables.
-   **resources/views**: Contains the Blade templates for the views.
-   **routes/web.php**: Contains the web routes for the application.

## Routes

The routes for the application are defined in the `routes/web.php` file. Here are the key routes:

-   Route to display the form
-   Route to add a product
-   Route to get the list of products
-   Route to edit a product
-   Route to update a product
-   Route to delete a product

## Controllers

The controllers handle the logic for the application. Here is an overview of the `ProductController`:

-   **index**: Displays the form to add a new product.
-   **addProduct**: Validates and adds a new product to the database.
-   **getProducts**: Retrieves and displays the list of products.
-   **editProduct**: Displays the form to edit an existing product.
-   **updateProduct**: Validates and updates an existing product in the database.
-   **deleteProduct**: Deletes a product from the database.

## Models

The [`Product`](command:_github.copilot.openSymbolFromReferences?%5B%22Product%22%2C%5B%7B%22uri%22%3A%7B%22%24mid%22%3A1%2C%22fsPath%22%3A%22d%3A%5C%5CLaravel%5C%5Ctask-two%5C%5CREADME.md%22%2C%22_sep%22%3A1%2C%22external%22%3A%22file%3A%2F%2F%2Fd%253A%2FLaravel%2Ftask-two%2FREADME.md%22%2C%22path%22%3A%22%2Fd%3A%2FLaravel%2Ftask-two%2FREADME.md%22%2C%22scheme%22%3A%22file%22%7D%2C%22pos%22%3A%7B%22line%22%3A0%2C%22character%22%3A1%7D%7D%5D%5D "Go to definition") model represents the products in the database. It includes the following attributes:

-   **name**: The name of the product.
-   **price**: The price of the product.
-   **description**: A description of the product.
-   **quantity**: The quantity of the product.
-   **discount**: The discount on the product.

The model also includes default values for nullable fields and handles the `created_at` and `updated_at` timestamps.

## Views

The views are responsible for displaying the user interface. Here are the key views:

-   **Form View**: Displays the form to add a new product.
-   **Products List View**: Displays the list of products with options to edit and delete.
-   **Edit Product View**: Displays the form to edit an existing product.

## Conclusion

The Laravel Product Management System is a powerful and flexible application for managing products. It leverages the capabilities of the Laravel framework to provide a robust and scalable solution. By following the installation and setup instructions, you can quickly get the application up and running. The application ensures data integrity and provides a user-friendly interface for managing products.
