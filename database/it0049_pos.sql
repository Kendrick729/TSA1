CREATE DATABASE IF NOT EXISTS it0049_pos CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE it0049_pos;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review project brief', 'pending', DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW()),
('Prepare meeting agenda', 'in_progress', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Check daily sales report', 'pending', CURDATE(), NOW()),
('Update CRM records', 'in_progress', CURDATE(), NOW()),
('Reply to client emails', 'pending', CURDATE(), NOW()),
('Submit weekly status update', 'completed', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Review inventory counts', 'pending', DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW()),
('Plan next sprint tasks', 'pending', DATE_ADD(CURDATE(), INTERVAL 3 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('kendrick729', 'Kendrick', 'kendrick@example.com', NOW());
