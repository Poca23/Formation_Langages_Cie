create database bakery;

use bakery;

CREATE TABLE article (
    article_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    article_name VARCHAR(255) NOT NULL,
    unit_price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE invoice (
    invoice_id INT NOT NULL PRIMARY KEY,
    date DATE NOT NULL,
    time TIME NOT NULL,
    total DECIMAL(10, 2) NOT NULL
);

CREATE TABLE invoice_item (
    invoice_id INT,
    article_id INT,
    quantity INT NOT NULL,
    PRIMARY KEY (invoice_id, article_id), 
    FOREIGN KEY (invoice_id) REFERENCES invoice(invoice_id),
    FOREIGN KEY (article_id) REFERENCES article(article_id)
);

INSERT INTO article (article_name, unit_price) VALUES ('BAGUETTE', 1.00);
INSERT INTO article (article_name, unit_price) VALUES ('BAGUETTE TRADITION', 1.20);
INSERT INTO article (article_name, unit_price) VALUES ('BAGUETTE CEREALES', 1.30);
INSERT INTO article (article_name, unit_price) VALUES ('CAMPAGNE', 2.00); 
INSERT INTO article (article_name, unit_price) VALUES ('COMPLET', 1.80);
INSERT INTO article (article_name, unit_price) VALUES ('SEIGLE', 2.00);
INSERT INTO article (article_name, unit_price) VALUES ('BANETTE', 1.20);
INSERT INTO article (article_name, unit_price) VALUES ('PAIN', 1.10);
INSERT INTO article (article_name, unit_price) VALUES ('PAIN SPECIAL', 2.50);
INSERT INTO article (article_name, unit_price) VALUES ('BOULE 200G', 1.10);
INSERT INTO article (article_name, unit_price) VALUES ('BOULE 400G', 1.60);
INSERT INTO article (article_name, unit_price) VALUES ('CROISSANT', 1.20);
INSERT INTO article (article_name, unit_price) VALUES ('PAIN AU CHOCOLAT', 1.30);
INSERT INTO article (article_name, unit_price) VALUES ('PAIN AUX RAISINS', 1.80);
INSERT INTO article (article_name, unit_price) VALUES ('CHAUSSON AUX POMMES', 2.20);
INSERT INTO article (article_name, unit_price) VALUES ('BRIOCHE', 4.00);   
INSERT INTO article (article_name, unit_price) VALUES ('GAL FRANGIPANE 4P', 8.00);
INSERT INTO article (article_name, unit_price) VALUES ('GAL FRANGIPANE 6P', 12.00);      
INSERT INTO article (article_name, unit_price) VALUES ('COOKIE', 1.20);
INSERT INTO article (article_name, unit_price) VALUES ('CHOUQUETTE', 0.30);

INSERT INTO invoice VALUES (160020, '2024-01-02', '08:32', 5.10);
INSERT INTO invoice VALUES (160021, '2024-01-02', '08:38', 4.60);  
INSERT INTO invoice VALUES (160022, '2024-01-02', '09:12', 6.00); 
INSERT INTO invoice VALUES (160023, '2024-01-02', '09:25', 5.60);
INSERT INTO invoice VALUES (160024, '2024-01-02', '09:27', 1.20);
INSERT INTO invoice VALUES (160025, '2024-01-02', '09:30', 10.80);  
INSERT INTO invoice VALUES (160026, '2024-01-02', '09:37', 20.80);
INSERT INTO invoice VALUES (160027, '2024-01-02', '09:41', 3.60);
INSERT INTO invoice VALUES (160028, '2024-01-02', '09:46', 3.60); 
INSERT INTO invoice VALUES (160029, '2024-01-02', '09:57', 3.50);
INSERT INTO invoice VALUES (160030, '2024-01-02', '09:58', 2.50);
INSERT INTO invoice VALUES (160031, '2024-01-02', '10:03', 4.80);
INSERT INTO invoice VALUES (160032, '2024-01-02', '10:05', 10.90); 
INSERT INTO invoice VALUES (160033, '2024-01-02', '10:12', 13.60);   
INSERT INTO invoice VALUES (160034, '2024-01-02', '10:17', 6.40);  
INSERT INTO invoice VALUES (160035, '2024-01-02', '10:25', 8.60);

INSERT INTO invoice_item VALUES (160020, 2, 1);
INSERT INTO invoice_item VALUES (160020, 13, 3);
INSERT INTO invoice_item VALUES (160021, 13, 2);
INSERT INTO invoice_item VALUES (160021, 4, 1);
INSERT INTO invoice_item VALUES (160022, 2, 5);
INSERT INTO invoice_item VALUES (160023, 1, 2);
INSERT INTO invoice_item VALUES (160023, 12, 3);
INSERT INTO invoice_item VALUES (160024, 7, 1);
INSERT INTO invoice_item VALUES (160025, 2, 3);
INSERT INTO invoice_item VALUES (160025, 12, 6);
INSERT INTO invoice_item VALUES (160026, 13, 4);
INSERT INTO invoice_item VALUES (160026, 12, 4);
INSERT INTO invoice_item VALUES (160026, 5, 6);
INSERT INTO invoice_item VALUES (160027, 12, 3);
INSERT INTO invoice_item VALUES (160028, 14, 2);
INSERT INTO invoice_item VALUES (160029, 2, 2);
INSERT INTO invoice_item VALUES (160029, 8, 1);
INSERT INTO invoice_item VALUES (160030, 9, 1);
INSERT INTO invoice_item VALUES (160031, 2, 4);
INSERT INTO invoice_item VALUES (160032, 12, 5);
INSERT INTO invoice_item VALUES (160032, 2, 2);
INSERT INTO invoice_item VALUES (160032, 9, 1);
INSERT INTO invoice_item VALUES (160033, 11, 1);
INSERT INTO invoice_item VALUES (160033, 18, 1);
INSERT INTO invoice_item VALUES (160034, 2, 2);
INSERT INTO invoice_item VALUES (160034, 16, 1);
INSERT INTO invoice_item VALUES (160035, 20, 12);
INSERT INTO invoice_item VALUES (160035, 3, 2);
INSERT INTO invoice_item VALUES (160035, 2, 2);