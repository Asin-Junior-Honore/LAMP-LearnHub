---

# LearnHub

LearnHub is a web-based learning platform where users can explore a wide range of courses. The application is built using the LAMP stack, leveraging **Linux (InfinityFree hosting), Apache, MySQL, and PHP** for backend functionality. For styling, I used HTML and Bootstrap to ensure a user-friendly and responsive interface. LearnHub is deployed on [InfinityFree](https://www.infinityfree.net/), with open access to the index page for both authenticated and unauthenticated users.

## Table of Contents

1. [Features](#features)
2. [Tech Stack](#tech-stack)
3. [Getting Started](#getting-started)
4. [Installation](#installation)
5. [Database Structure](#database-structure)
6. [Usage](#usage)
7. [Deployment](#deployment)
8. [Contributing](#contributing)

---

## Features

- **Course Listings**: Browse and explore a diverse selection of courses.
- **User Authentication**: Register, log in, and access additional features.
- **Responsive Design**: Mobile-friendly design using Bootstrap.
- **Accessible Content**: Unauthenticated users can view the main content on the homepage.
- **MySQL Database**: Backend data storage and management for courses and user data.

## Tech Stack

- **Frontend**: HTML, CSS (Bootstrap)
- **Backend**: PHP
- **Database**: MySQL
- **Deployment**: InfinityFree hosting platform

## Getting Started

### Prerequisites

To run this project locally, you'll need:
- PHP (>=7.0)
- MySQL
- A local server setup (e.g., XAMPP, MAMP, or WAMP)

### Installation

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/your-username/learnhub.git
    cd learnhub
    ```

2. **Set Up the Database**:
    - Import the provided SQL code (see below) to create the necessary tables.
    - Configure database credentials in `db.php` or similar setup file.

3. **Start the Server**:
   - Run your local server and access the application from `localhost/learnhub`.

## Database Structure

### Users Table

The `users` table stores user information for authentication and profile details. 

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Courses Table

The `courses` table contains information about each course available on the platform.

```sql
CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    course_description TEXT,
    course_image VARCHAR(255),
    course_price DECIMAL(10, 2),
    course_duration VARCHAR(50),
    category1 VARCHAR(50),
    category2 VARCHAR(50),
    creator_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Usage

1. **Home Page**: Browse available courses and categories.
2. **User Authentication**: Sign up or log in to save view all courses and unlock additional features.
3. **Explore Courses**: View detailed course content, pricing, and other information.

## Deployment

The application is hosted on [InfinityFree](https://www.infinityfree.net/). <br/>
The application deployed link [Learnhub](http://lamp-learnhub.ct.ws/).

### Steps:

1. **Upload Files**: Transfer project files via FTP or the InfinityFree file manager.
2. **Set Up Database**: Use InfinityFree’s MySQL management tool to create your database and import tables.

## Contributing

If you would like to contribute:
1. Fork the repository.
2. Create a new branch for your feature or fix.
3. Submit a pull request.

---
