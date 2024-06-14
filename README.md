# Project Title

Simple Login and Registration System

## Project Description

This project is a basic web application that provides user authentication functionalities such as login, registration, and logout. The system connects to a database using PHP and ensures that user data is securely handled. The main components of the project include the following files:

- **connect.php**: Handles the connection to the MySQL database.
- **home.php**: The homepage that users are redirected to after a successful login.
- **login3.css**: Stylesheet for the login page.
- **login3.js**: JavaScript file for the login page, managing client-side interactions and validations.
- **login3.php**: HTML code for the login page.
- **logout.php**: Code for logging out users and redirecting them back to the login page.
- **register.php**: Handles the interaction between the registration page and the database, allowing new users to sign up.

## File Descriptions

- **connect.php**
  - Establishes a connection to the MySQL database.
  - Contains the necessary credentials and connection logic.
  
- **home.php**
  - The main webpage that users see after logging in.
  - Displays a welcome message and includes a logout button.

- **login3.css**
  - Stylesheet for the login page.
  - Ensures the login form is visually appealing and user-friendly.

- **login3.js**
  - JavaScript file that handles client-side validations and interactions on the login page.

- **login3.php**
  - HTML structure of the login page.
  - Includes the login form that users fill out to access their accounts.

- **logout.php**
  - Handles the logout functionality.
  - Destroys the user session and redirects them to the login page.

- **register.php**
  - PHP script that processes user registration.
  - Interacts with the database to store new user information securely.

## Getting Started

1. Clone the repository to your local machine.
2. Set up a MySQL database using XAMPP and update the connection details in `connect.php`.
3. Start the Apache and MySQL modules from the XAMPP control panel.
4. Place the project files in the `htdocs` directory of your XAMPP installation.
5. Run the application by accessing `http://localhost/{your_project_directory}/login3.php` in your web browser.

## Requirements

- XAMPP (includes PHP 7.0 or higher, Apache, and MySQL)
- A web browser

## Usage

1. Open `http://localhost/{your_project_directory}/login3.php` in your web browser.
2. Register a new user or log in with existing credentials.
3. Upon successful login, you will be redirected to `home.php`.
4. To log out, click the logout button, which will redirect you back to the login page.

