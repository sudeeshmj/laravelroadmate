# RoadMate Backend Developer Machine Test

## Introduction

This repository contains the solution for the machine test provided by RoadMate. The test focuses on creating a product management page with functionalities for creating, listing, and searching products.

## Test Description

The machine test consists of one task:

1. Create a page for Product creation, listing, and search.

## Task Details

### Product Details

Products created:

- Repsol Moto Spot XTI 20W40 SN-50 L
- Repsol Moto Spot XTI 20W40 SN-52 L
- Repsol Moto Spot XTI 20W40 SN-53 L
- Repsol Moto Spot XTI 20W40 SN-57 L
- Repsol Moto Spoty XTE 20W40 SN-50 L
- Repsol Moto Spot XXI 20W40 SN-50 L

### Search Functionality

Search Input: `Repsol XTE`

Search Output: `Repsol Moto Spoty XTE 20W40 SN-50 L`

## Project Setup

### Prerequisites

- PHP 7.4 or higher
- Composer
- Laravel 8.x or higher
- MySQL 

### Installation

1. Clone the repository

    ```bash
    git clone https://github.com/sudeeshmj/laravelroadmate.git
    ```

2. Install dependencies

    ```bash
    composer install
    ```

3. Copy the example environment file and configure your database

    ```bash
    cp .env.example .env
    ```

4. Generate the application key

    ```bash
    php artisan key:generate
    ```

5. Run the database migrations

    ```bash
    php artisan migrate
    ```

6. Serve the application

    ```bash
    php artisan serve
    ```

### Usage

- Navigate to `http://localhost:8000/products` 
