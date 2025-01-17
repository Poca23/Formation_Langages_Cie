CREATE TABLE person (
id_person INT NOT NULL PRIMARY KEY,
name VARCHAR(255) NOT NULL,
age INT NOT NULL
);
ALTER TABLE person
ADD email VARCHAR(255) NOT NULL;
EXEC sp_rename 'person', 'customer';
EXEC sp_rename 'customer.id_person', 'id_customer', 'COLUMN';
INSERT INTO customer(id_customer, name, age, email)
VALUES (1, 'Jean Dupont', 30, 'jean.dupont@example.com');
UPDATE customer
SET email = 'jean.dupont@gmail.com'
WHERE id_customer= 1;
DELETE FROM Employes
WHERE id_customer= 1;
DROP TABLE customer;