# Laravel CRUD Application

This is a Laravel application with Docker integration for easy setup and deployment.

## Prerequisites

- Docker
- Docker Compose

## Setup

1. **Clone the repository:**

    ```sh
    git clone https://github.com/your-username/your-repo.git
    cd your-repo
    ```

2. **Request the `.env` file:**

    Contact the developer to obtain the `.env` file required for the application.

3. **Place the `.env` file:**

    Once you receive the `.env` file, place it in the root directory of the project.

4. **Build and start the Docker containers:**

    ```sh
    docker-compose up --build
    ```

5. **Run migrations and seeders:**

    ```sh
    docker-compose exec app php artisan migrate:fresh --seed
    ```

6. **Access the application:**

    The application should be accessible at `http://localhost:8000`.

7. **Access phpMyAdmin:**

    phpMyAdmin can be accessed at `http://localhost:8080`. Use the credentials provided in the `.env` file.

## Usage

### Running Artisan Commands

To run Artisan commands inside the Docker container:

```sh
docker-compose exec app php artisan <command>
