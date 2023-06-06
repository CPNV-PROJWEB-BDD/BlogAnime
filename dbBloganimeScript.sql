-- dbBloganimeScript Script generated by MySQL Workbench
-- Wed 24 May 2023 10:23:31 AM CEST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering




SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Bloganime
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Bloganime
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bloganime` DEFAULT CHARACTER SET utf8 ;
USE `bloganime` ;

-- -----------------------------------------------------
-- Table `bloganime`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bloganime`.`users` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `emailAddress` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(64) NOT NULL,
  `lastname` VARCHAR(64) NOT NULL,
  `accountLevel` INT NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE INDEX `emailAddress_UNIQUE` (`emailAddress` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bloganime`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bloganime`.`articles` (
  `idarticles` INT NOT NULL AUTO_INCREMENT,
  `bannersPath` VARCHAR(255) NULL,
  `name` VARCHAR(255) NOT NULL,
  `codename` VARCHAR(255) NULL,
  `age` INT NULL,
  `anime` VARCHAR(255) NULL,
  `imagePath` VARCHAR(255) NULL,
  `firstappear` VARCHAR(255) NULL,
  `gender` VARCHAR(50) NULL,
  `species` VARCHAR(60) NULL,
  `locationLive` VARCHAR(255) NULL,
  `origin` VARCHAR(60) NULL,
  `afiliate` VARCHAR(255) NULL,
  `occupation` VARCHAR(255) NULL,
  `fightstyle` VARCHAR(255) NULL,
  `power` VARCHAR(255) NULL,
  `articles` MEDIUMTEXT NOT NULL,
  `users_idusers` INT NOT NULL,
  PRIMARY KEY (`idarticles`, `users_idusers`),
  UNIQUE INDEX `title_UNIQUE` (`name` ASC) VISIBLE,
  INDEX `fk_articles_users_idx` (`users_idusers` ASC) VISIBLE,
  CONSTRAINT `fk_articles_users`
    FOREIGN KEY (`users_idusers`)
    REFERENCES `bloganime`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



-- -----------------------------------------------------
-- User and grants
-- -----------------------------------------------------
CREATE USER 'bloganime'@localhost IDENTIFIED BY 'Pa$$w0rd';
GRANT SELECT,INSERT,DELETE,UPDATE ON  bloganime.* TO 'bloganime'@localhost IDENTIFIED BY 'Pa$$w0rd';
