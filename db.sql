CREATE TABLE recipe (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(200) NOT NULL,
  description VARCHAR(500) NOT NULL,
  createdate TIMESTAMP,
  active BOOLEAN DEFAULT false
  main_image VARCHAR(200) NOT NULL
);
