# Simple REST API for Products

This is a simple REST API for managing products, running in Docker.

## Installation and Setup

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/your-repo.git
   cd your-repo

2. Run the API using Docker:
   docker compose up -d --build
   docker exec -it app-crud bash
   composer install

3. API will be available at http://localhost:8000 (or your configured port).

## API Endpoints

| Method  | Endpoint        | Description          |
|---------|---------------|----------------------|
| GET     | `/products`    | Get all products    |
| GET     | `/products/{id}` | Get a product by ID |
| POST    | `/products`    | Create a new product |
| PUT     | `/products/{id}` | Update a product |
| DELETE  | `/products/{id}` | Delete a product |

