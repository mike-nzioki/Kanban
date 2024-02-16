# Laravel + Inertia.js + Vue.js Kanban Board

This project is a Kanban board built with Laravel, Inertia.js, and Vue.js. It's designed to help teams and individuals manage their tasks efficiently, with an easy-to-use drag-and-drop interface for organizing tasks across different stages of completion.

## Features

- **Task Management:** Create, update, and delete tasks with ease.
- **Column Organization:** Organize tasks in customizable columns (e.g., To Do, In Progress, Done).
- **Drag and Drop:** Move tasks between columns using drag-and-drop functionality.
- **Responsive Design:** Fully responsive interface for managing tasks on desktop and mobile devices.
- **User Authentication:** Secure authentication system to manage user access.

## Prerequisites

Before installing the Kanban board, ensure you have the following:

- PHP >= 8.0
- Composer installed
- Node.js and npm installed
- A supported database (MySQL, PostgreSQL, SQLite, etc.)
- Laravel development environment set up

## Installation

Follow these steps to get your Kanban board up and running:

1. **Clone the repository:**

```
git clone git@github.com:mike-nzioki/Kanban.git
```
2. **Navigate to the project directory:**

```
cd kanban
```
3. **Install PHP dependencies:**

```
composer install
```
4. **Install NPM packages:**

```
npm install
```
5. **Copy the example environment file and make the necessary changes in the .env file:**
```
cp .env.example .env
```
6. **Generate an app encryption key:**
```
php artisan key:generate
```
7. **Run the database migrations. Ensure your database connection is configured in .env before migrating:**
```
php artisan migrate
php artisan db:seed
```
8. **Start the Laravel development server:**
```
php artisan serve

npm run dev
```
You can now access the application in your web browser at http://localhost:8000.


# Usage
After logging in, you can create columns and tasks. Tasks can be easily dragged and dropped between columns to reflect their current status or progress.

# Contributing
Contributions to the Kanban board project are welcome! Whether it's submitting bugs, requesting new features, or contributing code, please feel free to make a pull request or open an issue.

# License
This Kanban board is open-sourced software licensed under the MIT license.

# Acknowledgments
- Thanks to the Laravel team for the incredible framework.
- Gratitude to the Inertia.js team for facilitating the integration between Laravel and Vue.js.
- All contributors and users of this project.
