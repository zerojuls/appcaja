

DELIMITER $$

DROP PROCEDURE IF EXISTS GET_TOTAL$$

CREATE PROCEDURE `GET_TOTAL`()

BEGIN

    SELECT
    SUM(importe) AS valortotal FROM
    NUEVA_TRANSACCION;

END$$




