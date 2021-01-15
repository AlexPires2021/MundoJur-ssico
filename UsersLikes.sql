
/*
    Alterar a tabela `fotos`
    removendo a coluna `like` 

ALTER TABLE  `fotos` 
DROP COLUMN `like`;
*/
 
--   Criar a Tabela `users`
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
     `email` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB CHARSET=utf8;

-- Criar a tabela `userlikes`
CREATE TABLE IF NOT EXISTS `userlikes` (
  `fotoId` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`username`, `fotoId`),
  FOREIGN KEY (`username`) REFERENCES users(`username`),
  FOREIGN KEY (`fotoId`) REFERENCES fotos(`id`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de registos de utilizadores`
--
INSERT INTO `users` (`username`, `password`, `email`) VALUES
('antrob', '1234', 'antrob@gmail.com'),
('bujibuji', '1234', 'buji@gmail.com'),
('roni', '1234', 'roni@gmail.com');


-- Inserção de valores na tabela `userlikes`
INSERT INTO `userlikes` ( `username`, `fotoId` ) VALUES
('antrob', '30470554015' ),
('antrob', '30381001171' ),
('antrob', '30169193330' ),
('antrob', '30341542442' ),
('bujibuji', '10264710515' ),
('bujibuji', '26576011703' );

