-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bdCoins` DEFAULT CHARACTER SET utf8 ;
USE `bdCoins` ;

-- -----------------------------------------------------
-- Table `roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `roles` ;

CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` INT NOT NULL AUTO_INCREMENT,
  `nombre_rol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuarios` ;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `status` INT NOT NULL DEFAULT 1,
  `fk_rol` INT NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;

CREATE INDEX `fk_usuarios_roles_idx` ON `usuarios` (`fk_rol` ASC) ;


-- -----------------------------------------------------
-- Table `categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `categorias` ;

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `productos` ;

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `nombre_producto` VARCHAR(45) NOT NULL,
  `descripcion_producto` TINYTEXT NULL,
  `pais` VARCHAR(45) NULL,
  `precio` FLOAT NOT NULL,
  `stock` INT NOT NULL,
  `img_producto` VARCHAR(45) NULL,
  `status` INT NOT NULL DEFAULT 1,
  `fk_categoria` INT NOT NULL,
  `fk_usuario` INT NOT NULL,
  PRIMARY KEY (`id_producto`))
ENGINE = InnoDB;

CREATE INDEX `fk_productos_categorias1_idx` ON `productos` (`fk_categoria` ASC) ;

CREATE INDEX `fk_productos_usuarios1_idx` ON `productos` (`fk_usuario` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
