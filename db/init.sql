CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password) VALUES
('yappi', '12345678'),
('admin', 'admin123'),
('user1', 'password1'),
('user2', 'password2');
