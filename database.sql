CREATE DATABASE IF NOT EXISTS staff_portal;
USE staff_portal;

CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    index_number VARCHAR(50) NOT NULL UNIQUE,
    full_names VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    current_location VARCHAR(100),
    highest_education VARCHAR(100),
    duty_station VARCHAR(100),
    availability_remote VARCHAR(10), -- 'Yes' or 'No'
    software_expertise VARCHAR(255),
    expertise_level VARCHAR(50),     -- e.g., 'Intermediate', 'Expert'
    language VARCHAR(100),
    responsibility_level VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO staff (index_number, full_names, email, current_location, highest_education, duty_station, availability_remote, software_expertise, expertise_level, language, responsibility_level)
VALUES ('EMP001', 'John Doe', 'john@example.com', 'Nairobi', 'Bachelor Degree', 'Headquarters', 'Yes', 'React, PHP', 'Expert', 'English', 'Manager');
