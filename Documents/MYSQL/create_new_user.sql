CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
GRANT  SELECT ON databasename .* TO 'newuser'@'localhost';
FLUSH PRIVILEGES;