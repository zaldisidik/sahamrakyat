
CREATE TABLE td_transaksi (
id int NOT NULL AUTO_INCREMENT,
id_transaksi int,
harga DECIMAL(11,2),
jumlah int,
subtotal INT,
PRIMARY KEY (id)
);
INSERT INTO td_transaksi (id_transaksi,harga,jumlah,subtotal)
VALUES (1,10000,2,20000);

INSERT INTO td_transaksi (id_transaksi,harga,jumlah,subtotal)
VALUES (2,6250,4,25000);
