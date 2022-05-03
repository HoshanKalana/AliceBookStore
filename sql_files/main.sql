SET @OLD_SQL_MODE=@@SQL_MODE, 
SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema alicebookstore_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema alicebookstore_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `alicebookstore_db` DEFAULT CHARACTER SET utf8;
USE `alicebookstore_db`;
-- -----------------------------------------------------
-- Table `mydb`.`Roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alicebookstore_db`.`Roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `role_UNIQUE` (`role` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `alicebookstore_db`.`Users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(450) NULL,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone_no` VARCHAR(20) NULL,
  `company_name` VARCHAR(200) NULL,
  `address` VARCHAR(400) NULL,
  `password` VARCHAR(45) NOT NULL,
  `role_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`, `role_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `fk_Users_Roles_idx` (`role_id` ASC) )
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;