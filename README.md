## 🚀 EunoiaCode Test 
This project is a Laravel API that handles users and related subjects, saves them in a MySQL database and supplies an endpoint to access the user subjects. 

### 💻 Installation 

To install the application, follow these steps:

1.  Clone the project from GitHub to your local machine.
2.  Navigate to the project directory and run `composer install` to install the required dependencies.
3.  Create a new MySQL database for the application.
4.  Create a copy of the `.env.example` file and rename it to `.env`. Update the database credentials in this file to match your MySQL database.
5.  Run `php artisan key:generate` to generate a new encryption key for the application.
6.  Run `php artisan migrate` to run the database migrations and create the necessary tables.
6.  Run `php artisan db:seed` to insert dummy data into the database.
7.  Start the development server by running `php artisan serve`.
9.  You can now access the api at `http://localhost:8000/api`.

### 🔬  API Documentation  
Postman is a popular REST client for testing and documenting APIs, and it allows you to import API documentation from a JSON file. 
Here are the steps to import a JSON file into Postman:

1.  Open Postman and click on the "Import" button on the top right corner.
2.  In the "Import" window, click on the "Choose File" button and choose `postman-api-doc.json` 
3.  Select the JSON file you want to import and click on the "Open" button.
4.  Postman will then parse the JSON file and display the available endpoints and methods.
5.  Set the base url in the collection settings to `http://localhost:8000/api` 
6.  Save the imported API documentation as a collection in Postman.

Test user credentials:
email:`user@user.com`
password: `123123123`

That's it! You should now have your API documentation imported into Postman and be ready to test your API endpoints.

