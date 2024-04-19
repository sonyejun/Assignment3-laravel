# Movie and User management 

## Project Introduction
This project aims to create a movie recommendation and sharing platform where users can register and share information about various movies.

## Description of Features and Database Schema
This platform primarily consists of user management and movie information management functionalities. Users can register, log in, and edit their profiles. User roles, such as administrators and regular users, allow administrators to view and delete user information, as well as manage movie information submitted by users. Movie information management includes storing and managing details such as movie titles, directors, cast, genres, etc., in the database.

### Database Schema
The database schema comprises two tables: users and movies. The users table stores user information, while the movies table stores movie information. There exists a one-to-many relationship between the users and movies tables.

## Thoughts on Laravel
Laravel is considered a powerful and flexible framework for PHP development. It provides various libraries that make it easy to establish and create a basic structure, which is convenient for developers.

## Technologies Used
- Laravel: A PHP framework for backend development.
- MySQL: Relational database management system.

## Screen Shots
- User Site
<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/90a1428b-bb67-442a-b2c8-387e3b76c688">

<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/ebaae7f7-a28b-4dc4-8736-f98863f202d8">

<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/1f41a8b1-3fc3-47f4-9472-deb416b2d862">

<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/6bed45fc-3b94-409f-89ad-ba0b53f075b1">

<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/c649c222-bad4-4579-a4bd-d894993ba04f">

<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/ad0ed6d6-9454-4733-bc13-282146d0cea9">

- Guest Site
<img width="1691" alt="image" src="https://github.com/sonyejun/Assignment3-laravel/assets/62229757/8f293e96-c85b-4bd1-82e0-ab98e6426fab">


## Installation
1. Clone the repository: `git clone <repository-url>`
2. Install dependencies: `composer install`
3. Configure database settings in the `.env` file.
4. Run migrations: `php artisan migrate`
5. Serve the application: `php artisan serve`

## Usage
1. Register an account or log in if already registered.
2. Share information about movies or explore movies shared by other users.
3. Administrators can manage user accounts and movie information.
