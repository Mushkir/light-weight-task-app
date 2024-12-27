# Task Tracker

Task Track is a lightweight task management application built with Laravel, Filament, and Livewire. It enables users to efficiently manage their tasks by providing features for creating, updating, and deleting tasks with real-time updates to ensure a seamless user experience. The application is designed with simplicity and functionality in mind, leveraging the power of modern web development frameworks for a responsive and interactive interface.

This project is ideal for anyone looking to track their tasks effectively or developers interested in exploring Laravel's capabilities alongside Livewire for real-time interactions and Filament for an elegant user interface. Task Track also includes user authentication to ensure data privacy and security.

With clear setup instructions and well-documented code, Task Track is easy to run locally and provides a solid foundation for further customization and enhancement.

## Technologies and Libraries Used and Learned

| S.No | Technologies and Libraries Used                              |
| :--- | ------------------------------------------------------------ |
| 01   | [Laravel](https://laravel.com/)                              |
| 02   | [Tailwind CSS](https://tailwindcss.com/)                     |
| 03   | [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits) |
| 04   | [Filament](https://filamentphp.com//aos/)                    |
| 05   | [PHPFlasher](https://php-flasher.io/library/toastr/)         |

### Screenshots

![Homepage or Login page](https://i.ibb.co/C0B1H6w/screencapture-127-0-0-1-8000-2024-12-26-23-56-26.png)

![Register page](https://i.ibb.co/fC4zNQT/screencapture-127-0-0-1-8000-register-2024-12-26-23-59-18.png)

![Add new task](https://i.ibb.co/9pTZj4j/screencapture-127-0-0-1-8000-dashboard-2024-12-27-09-24-29.png)

![Edit task](https://i.ibb.co/hyJpRmJ/screencapture-127-0-0-1-8000-dashboard-2024-12-27-09-25-51.png)

![Admin dashboard - Tasks panel](https://i.ibb.co/VwX21KK/screencapture-127-0-0-1-8000-admin-tasks-2024-12-27-09-27-20.png)

![Admin dashboard - Users panel](https://i.ibb.co/z86ttCJ/screencapture-127-0-0-1-8000-admin-users-2024-12-27-09-28-51.png)

## Installation and Setup

-   Clone the Repo into Local machine:

```bash
  git clone https://github.com/Mushkir/light-weight-task-app.git

```

-   Navigate into the project directory:

```bash
cd light-weight-task-app

```

-   Install dependencies:

##### Composer dependencies

```bash
composer install

```

#### NPM dependencies:

```bash
npm install

```

-   Set up the .env file:

    -   Duplicate the .env.example file as .env:
    -   Update environment-specific configurations like database credentials.

-   Generate the application key (APP_KEY):

```bash
php artisan key:generate


```

-   Run migrations

```bash
php artisan migrate

```

### Run the project

1. Open new terminal and run the following command:

```bash
npm run dev

```

2. Open another new terminal and run the following command:

```bash
php artisan serve

```

### License:

-   MIT

### Author

-   [Mohamed Mushkir](https://www.facebook.com/profile.php?id=100059556802890)
