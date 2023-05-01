# LAMP Guestbook Project

This is a basic Guestbook project that demonstrates fundamental Linux, Apache, MySQL, and PHP (LAMP) skills. Users can submit their name and message to the Guestbook, and the entries are displayed in a table.

## Features

- Submit Guestbook entries with name and message
- View Guestbook entries in a table
- Built using LAMP stack (Linux, Apache, MySQL, PHP)
- Utilises Bootstrap for responsive design

## Installation

1. Clone the repository to your local machine or server:

git clone https://github.com/yourusername/guestbook.git

2. Set up a LAMP environment on your server. Ensure that Apache, MySQL, and PHP are installed and configured.
3. Import the `guestbook.sql` file into your MySQL database to create the guestbook table.
4. Update the `submit_guestbook.php` and `view_guestbook.php` files with your database connection information (hostname, username, password, and database name).
5. Configure your Apache server to serve the Guestbook project files.
6. Open a web browser and navigate to the Guestbook project on your server.

## Usage

1. To submit a new entry, go to `submit_guestbook.php`. Enter your name and message, then click "Submit".
2. To view all Guestbook entries, go to `view_guestbook.php`.
