# PHP REST Demo

- Simple registration form and REST API.

## Setup

1. Clonning the repo
   
   ```bash
    git clone https://github.com/Besufikad17/php_rest_demo.git
   ```
2. Connecting database
   
   ```bash
   // creating .env file
   cd php_rest_demo && touch .env
   ```
   ```.env
   // storing environment variables in .env file
   DB_HOST=DATABASE_HOST
   DB_NAME=DATABASE_NAME
   DB_USER=DATABASE_USERNAME
   DB_PASSWORD=DATABASE_PASSWORD
   API_URL=API_URL
   ```
4. Running 
    
    ```
    // client
    php -S php -S 127.0.0.1:8080

    // server
    cd api && php -S 127.0.0.1:8081
    ```