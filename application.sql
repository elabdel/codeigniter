SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `aplicacion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `aplicacion` ;

-- -----------------------------------------------------
-- Table `aplicacion`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aplicacion`.`categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(50) NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aplicacion`.`articulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aplicacion`.`articulos` (
  `id_articulo` INT NOT NULL AUTO_INCREMENT,
  `nombre_articulo` VARCHAR(100) NULL,
  `contenido_articulo` TEXT NULL,
  `fecha_articulo` DATE NULL,
  `keywords` VARCHAR(100) NULL,
  `id_categoria` INT NOT NULL,
  PRIMARY KEY (`id_articulo`),
  INDEX `fk_articulos_categorias_idx` (`id_categoria` ASC),
  CONSTRAINT `fk_articulos_categorias`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `aplicacion`.`categorias` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
