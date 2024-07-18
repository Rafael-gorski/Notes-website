
# Notes website

This project is a small notes website created as part of the Laracast classes. The objective of these classes is to teach object-oriented programming (OOP), SQL integration, PHP classes, and various integrations with HTML and CSS.



## Features

- Object-Oriented Programming (OOP): Utilizes PHP to demonstrate principles such as encapsulation, inheritance, and polymorphism.

- SQL Integration: Demonstrates how PHP interacts with a SQL database to store and retrieve notes.

- PHP Classes: Illustrates the use of classes and objects in PHP to organize and encapsulate functionality.

- HTML and CSS Integration: Integrates with HTML for content structure and CSS for styling to create a user-friendly interface.


## Installation

To install my project, just follow these steps:

1. Prerequisites: Ensure you have PHP
2. Clone the repository:

```bash
    https://github.com/Rafael-gorski/Notes-website.git
```
3. Configure: create a database with the information inside the 'config.php'. Ensure that the db has these two tables:

```bash
    -- Create 'users' table
    CREATE TABLE users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    );

    -- Create 'notes' table
    CREATE TABLE notes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        body TEXT,
        user_id INT,
        FOREIGN KEY (user_id) REFERENCES users(user_id)
    );
```

4. Run: you can run as a localhost using:
```bash
    php -S localhost:8000 -t public public/index.php
```



## Contact

- Linkedin: [rafael-gorski](https://www.linkedin.com/in/rafael-gorski/)


## Acknowledgements

- [Laracast](https://laracasts.com/) - For providing this tutorial and a lot of resources.

