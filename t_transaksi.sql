CREATE TABLE t_transaksi (
id int NOT NULL AUTO_INCREMENT,
tanggal_order datetime,
status varchar(50),
tanggal_pembayaran datetime,
PRIMARY KEY (id)
);
INSERT INTO t_transaksi (tanggal_order,status,tanggal_pembayaran)
VALUES ('2020-12-01 11:30:00','lunas','2020-12-02 12:00:00');

INSERT INTO t_transaksi (tanggal_order,status,tanggal_pembayaran)
VALUES ('2020-12-01 10:30:00','pending',NULL);
