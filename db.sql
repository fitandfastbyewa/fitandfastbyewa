CREATE TABLE recipe (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(500) NOT NULL,
  title_variety VARCHAR(500) NOT NULL,
  url VARCHAR(500) NOT NULL,
  description TEXT NOT NULL,
  recipe TEXT NOT NULL,
  createdate TIMESTAMP,
  active BOOLEAN DEFAULT false,
  cook_time INT NOT NULL,
  portion_number INT,
  PRIMARY KEY (id)
);

CREATE TABLE ingredients (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(500) NOT NULL,
  count INT,
  unit VARCHAR(100),
  recipe_id INT(6),
  CONSTRAINT 'ingredients_fk' FOREIGN KEY (recipe_id) REFERENCES recipe(id) ON DELETE CASCADE
);

--ALTER TABLE `ingredients` ADD  CONSTRAINT `ingredients_fk` FOREIGN KEY (`recipe_id`) REFERENCES `recipe`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE images (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(500) NOT NULL,
  description TEXT,
  recipe_id INT(6) NOT NULL
);
