# LearnHub

LearnHub is a web-based learning platform that allows users to explore a wide range of courses with a user-friendly interface. The application is built with HTML, Bootstrap for styling, PHP for backend functionality, and MySQL for data management. It is deployed on [InfinityFree](https://www.infinityfree.net/), providing open access to the index page for both authenticated and non-authenticated users.

## Table of Contents

1. [Features](#features)
2. [Tech Stack](#tech-stack)
3. [Getting Started](#getting-started)
4. [Installation](#installation)
5. [Database Structure](#database-structure)
6. [Usage](#usage)
7. [Deployment](#deployment)
8. [Contributing](#contributing)
9. [License](#license)

---

## Features

- **Course Listings**: Browse and explore a wide selection of courses.
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
- A local server setup (e.g., XAMPP or WAMP for Windows, MAMP for Mac)

### Installation

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/your-username/learnhub.git
    cd learnhub
    ```

2. **Set Up the Database**:
    - Import the provided SQL file into MySQL to create the necessary tables.
    - Configure the database credentials in `config.php` or similar setup file.

3. **Start the Server**:
   - Run your local server and access the application from `localhost/learnhub`.

## Database Structure

- **Users Table**: Stores user details like ID, username, email, password, etc.
- **Courses Table**: Contains course details, including course ID, title, description, price, etc.
- **Enrollments Table**: Tracks users enrolled in specific courses.

## Usage

1. **Home Page**: View a range of course options and categories.
2. **User Authentication**: Sign up or log in to save courses and access additional features.
3. **Explore Courses**: Browse detailed course content, see pricing, and get started.

## Deployment

The application is deployed on [InfinityFree](https://www.infinityfree.net/). Make sure to:

1. **Upload Files**: Transfer project files via FTP or the InfinityFree file manager.
2. **Set Up Database**: Use the InfinityFree MySQL management tool to set up your database and import your tables.

## Contributing

If you would like to contribute:
1. Fork the repository.
2. Make your changes in a new branch.
3. Submit a pull request.
