
# Redmine Task Manager

Redmine Task Manager is a web application built using the Laravel and Vue.js frameworks, with Docker for containerization. This project provides a task management page integrated with Redmine, allowing users to search, create, and delete tasks seamlessly.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Task Search**: Search for tasks without reloading the page, using both local database and Redmine API.
- **Pagination**: Display tasks with pagination for better user experience.
- **Task Deletion**: Remove tasks easily through the web interface.
- **Task Creation**: Add new tasks directly from the application.
- **Responsiveness**: Ensures correct display across various devices, from iPhones to 4K monitors.

## Getting Started

### Prerequisites

Make sure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)

### Installation

1. Clone the repository:

   ```bash
   git clone <repository-url>
   cd redmine-task-manager
   
2 Set up Laravel and Docker:
    docker-compose up -d

3. install PHP dependencies:
   docker-compose exec app composer install

4. Run migrations
   docker-compose exec app php artisan migrate

5. Start the Laravel development server:
    docker-compose exec app php artisan serve

   Access the application at http://localhost:8000


   
