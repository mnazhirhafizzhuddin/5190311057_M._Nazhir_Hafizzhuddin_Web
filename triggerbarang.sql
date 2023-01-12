/*Trigger Barang Sudah Terhapus*/

DELIMITER $$

USE `projectcrud`$$

DROP TRIGGER /*!50032 IF EXISTS */ `triggerdatahapus`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `triggerdatahapus` AFTER DELETE ON `barangs` 
    FOR EACH ROW BEGIN
        INSERT INTO logbarangterhapus(idbarang,STATUS)
    VALUES(OLD.id,old.Namabarang,'BarangSudahterhapus');

   
    END;
$$

DELIMITER ;

/*trigger barang masuk */

DELIMITER $$

CREATE
    /*[DEFINER = { user | CURRENT_USER }]*/
    TRIGGER `projectcrud`.`insertbaru` AFTER INSERT
    ON `projectcrud`.`barangs`
    FOR EACH ROW BEGIN
    INSERT INTO logbarangmasuk
    SET idbarang = new.id,
    STATUS='Barangbarumasuk';
   
    END$$

DELIMITER ;

