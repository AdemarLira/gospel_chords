CREATE TABLE usuarios (
       id SERIAL PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       email VARCHAR(100) UNIQUE NOT NULL,
       senha VARCHAR(255) NOT NULL,
       celular VARCHAR(255) NOT NULL, 
       status VARCHAR(255) NOT NULL,
       cidade VARCHAR(255) NOT NULL,
       estado VARCHAR(255) NOT NULL,
       tipo_cadastro VARCHAR(255) NOT NULL,
       datahora_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);