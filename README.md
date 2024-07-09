RoadMate Backend Developer Machine Test
Introduction
This repository contains the solution for the machine test provided by RoadMate. The test focuses on creating a product management page with functionalities for creating, listing, and searching products.

Test Description
The machine test consists of one task:

Create a page for Product creation, listing, and search.
Task Details
Product Details
Products created:

Repsol Moto Spot XTI 20W40 SN-50 L
Repsol Moto Spot XTI 20W40 SN-52 L
Repsol Moto Spot XTI 20W40 SN-53 L
Repsol Moto Spot XTI 20W40 SN-57 L
Repsol Moto Spoty XTE 20W40 SN-50 L
Repsol Moto Spot XXI 20W40 SN-50 L
Search Functionality
Search Input: Repsol XTE

Search Output: Repsol Moto Spoty XTE 20W40 SN-50 L

Project Setup
Prerequisites
PHP 7.4 or higher
Composer
Laravel 8.x or higher
MySQL or any other database supported by Laravel
Installation
Clone the repository
bash
Copy code
git clone https://github.com/yourusername/roadmate-machine-test.git
Navigate to the project directory
bash
Copy code
cd roadmate-machine-test
Install dependencies
bash
Copy code
composer install
Copy the example environment file and configure your database
bash
Copy code
cp .env.example .env
Generate the application key
bash
Copy code
php artisan key:generate
Run the database migrations and seed the database
bash
Copy code
php artisan migrate --seed
Serve the application
bash
Copy code
php artisan serve
Usage
Navigate to http://localhost:8000/products to view the product listing page.
Use the form to create a new product.
Use the search bar to search for products. For example, searching for Repsol XTE should return Repsol Moto Spoty XTE 20W40 SN-50 L.
