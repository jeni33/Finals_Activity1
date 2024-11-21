create table search_applicant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    gender VARCHAR(255),
    age INT,
    email VARCHAR(255),
    contact_number VARCHAR(255),
    address VARCHAR(255),
    language_skills VARCHAR(255),
    availability VARCHAR(255),
    experience_level VARCHAR(255),
    added_by INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_by INT,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
 
INSERT INTO search_applicant (
  id, first_name, last_name, gender, age, email, contact_number, address, language_skills, availability, experience_level, date_added
)
VALUES
  (1, 'Rojean', 'Untalan', 'Female', 23, 'genieuntalan03@gmail.com.com', '09887312241', 'Cavite', 'Arabic', 'Part Time', 'Expert', '2023-03-18'),
  (2, 'Janimah', 'Abdul', 'Female', 23, 'janimsabdul@gmail.com', '09778912341', 'Dasmarinas Cavite', 'English', 'Part Time', 'Expert', '2023-03-28'),
  (3, 'Lorah', 'Hernandez', 'Female', 22, 'lorshernndz03@gmail.com', '09881093314', 'Imus Cavite', 'English', 'Part Time', 'Expert', '2023-04-03'),
  (4, 'Angelique', 'Campo', 'Female', 23, 'gelic_campo01@gmail.com', '09027728613', 'Dasmarinas Cavite', 'English', 'Part Time', 'Expert', '2023-04-12'),
  (5, 'Kathryn', 'Bernardo', 'Female', 26, 'kathkath1@gmail.com', '09015563108', 'Manila', 'English', 'Part Time', 'Expert', '2023-04-18'),
  (6, 'Janims', 'Abdul', 'Female', 25, 'janimsss00@gmail.com', '09715229014', 'Mindanao', 'Arabic', 'Full Time', 'Beginner', '2023-04-23'),
  (7, 'Daniel', 'Padilla', 'Male', 27, 'djpadilla@gmail.com', '09706115410', 'Manila', 'Tagalog', 'Part Time', 'Expert', '2023-05-03'),
  (8, 'Sam', 'Mapagmahal', 'Male', 28, 'sammymahal@gmail.com', '09081302189', 'Taguig', 'Tagalog', 'Full Time', 'Beginner', '2023-05-17'),
  (9, 'Princess', 'Sarah', 'Female', 25, 'sarahhh prinsesa@gmail.com', '09637813208', 'Manila', 'English', 'Part Time', 'Expert', '2024-05-28'),
  (10, 'Sophia', 'Grace', 'Female', 28, 'sophieee3@gmail.com', '09118025613', 'Makati', 'English', 'Part Time', 'Expert', '2023-05-31');

CREATE TABLE user_accounts (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    password TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);
