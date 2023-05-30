use campus;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(64) NOT NULL,
    password VARCHAR(72) NOT NULL,
    FOREIGN KEY (idCamper) REFERENCES campers(id)
 )