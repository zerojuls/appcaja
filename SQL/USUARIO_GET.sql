DELIMITER $$

DROP PROCEDURE IF EXISTS USUARIO_GET$$

CREATE PROCEDURE `USUARIO_GET`(
 IN P_UsuarioId VARCHAR(64)
)
BEGIN

SELECT U.UsuarioId, 
	   U.UsuarioNombre,
	   U.FechaVigencia, 
	   T.c_tipo AS Estado
FROM MPC_TM_USUARIO U
INNER JOIN TIPO T
WHERE U.Estado = 'COD0000002' AND T.c_tipo = 'Activo';

END$$