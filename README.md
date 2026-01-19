**Project Description**

This is a web-based application designed to manage staff profiles for an organization. It allows users to input personal details, skills, and education levels, as well as view and delete existing staff records. The solution is built using PHP for the backend, MySQL for the database, and HTML/JavaScript for the frontend interface.

**Technologies Used**

-Backend: PHP (Vanilla)

-Database: MySQL

-Frontend: HTML5, CSS3, JavaScript (Fetch API)

-Server: Apache (via XAMPP/WAMP)

**Prerequisites**

To run this application locally, you need:

XAMPP (or WAMP/MAMP) installed on your machine.

A web browser (Chrome, Edge, Firefox)

**Installation & Setup Instructions**

Step 1: Clone or Download
Download the project files or clone the repository.

Move the project folder (e.g., named staff-app) into your local server directory:

XAMPP: C:\xampp\htdocs\

WAMP: C:\wamp64\www\

Step 2: Database Configuration
Open your XAMPP/WAMP Control Panel and start Apache and MySQL.

Open your browser and navigate to phpMyAdmin (http://localhost/phpmyadmin).

Click New and create a database named: staff_portal

Select the staff_portal database on the left sidebar.

Click the SQL tab at the top.

Copy and paste the contents of database.sql (provided in the source code) into the text area and click Go.

Alternatively, if you saved the SQL as a file, go to the Import tab and upload database.sql.

Step 3: Database Connection
Ensure the api.php file has the correct credentials for your local MySQL server. The default settings for XAMPP are currently set in the code:

$servername = "localhost";
$username = "root";
$password = ""; // Default is empty for XAMPP
$dbname = "staff_portal";
**How to Run the Application**

Ensure Apache and MySQL are running.

Open your web browser.

Visit the following URL: http://localhost/staff-app/index.html (Note: Adjust staff-app to match the folder name you created in htdocs)

**Application Credentials**

Since this version of the application is designed for open internal use (per the provided code solution), there is no login wall for the main interface.

Database Access Credentials (Default Local Environment):

Host: localhost

Database Name: staff_portal

User: root

Password: (Empty)

**Features**

Add Staff: Form to input Index Number, Name, Email, Location, Duty Station, and Expertise.

View Staff: Dynamic table that fetches and displays all staff records from the database.

Delete Staff: Ability to remove staff records directly from the listing.

Data Validation: Basic required fields validation.
