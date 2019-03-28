
### Crianção do banco de dados
CREATE DATABASE finance CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


### Crianca da tabela e os campos
CREATE TABLE `finance`.`entradas` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `valor` FLOAT

(11) NOT NULL , `data` DATE NOT NULL , `descricao` VARCHAR(255) NOT NULL , PRIMARY KEY 

(`id`)) ENGINE = InnoDB;