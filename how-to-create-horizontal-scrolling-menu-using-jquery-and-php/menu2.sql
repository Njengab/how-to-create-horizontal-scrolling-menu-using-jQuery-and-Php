-- creating  and using database menu2
CREATE DATABASE IF NOT EXISTS menu2;
USE menu2;
-- creating table'menu_items' with two rows ; item_id and items_name
CREATE TABLE `menu2`.`menu_items` ( `items_id` INT NOT NULL AUTO_INCREMENT , `items_name` VARCHAR(255) NOT NULL, PRIMARY KEY (`items_id`)) ENGINE = InnoDB;
 -- inserting data into the menu_items table
INSERT INTO `menu_items` (`item_id`, `table_data`) VALUES 
(1, 'about'), (2, 'contact'), (3, 'info'), (4, 'services'),
(5,'help'),(6,'coutries'),(7,'cities'),(8,'jobs'),
(9,'calender'),(10,'feed'),(11,'dashboard'),(12,'login'),
(13,'clients'),(14,'supports',(15,'donates');