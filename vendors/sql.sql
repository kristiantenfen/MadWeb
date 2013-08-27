SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`compras`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`compras` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `metros` VARCHAR(45) NULL ,
  `toneladas` VARCHAR(45) NULL ,
  `data` DATETIME NULL ,
  `valor` VARCHAR(45) NULL ,
  `observacao` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vendas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`vendas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `valor_metro` VARCHAR(45) NULL ,
  `metros` VARCHAR(45) NULL ,
  `data` DATETIME NULL ,
  `cliente` VARCHAR(45) NULL ,
  `observacao` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cheques`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`cheques` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `valor` VARCHAR(45) NULL ,
  `data_vencimento` DATETIME NULL ,
  `destinatario` VARCHAR(45) NULL ,
  `observacao` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`tipos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`custos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`custos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `valor` VARCHAR(45) NULL ,
  `data` DATETIME NULL ,
  `origem` VARCHAR(45) NULL ,
  `obervacao` TEXT NULL ,
  `tipos_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `tipos_id`) ,
  INDEX `fk_custos_tipos_idx` (`tipos_id` ASC) ,
  CONSTRAINT `fk_custos_tipos`
    FOREIGN KEY (`tipos_id` )
    REFERENCES `mydb`.`tipos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
