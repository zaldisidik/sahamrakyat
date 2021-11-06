SELECT a.id, a.tanggal_order,a.status,a.tanggal_pembayaran,
b.subtotal AS total,b.jumlah AS jumlah_barang FROM t_transaksi a
JOIN td_transaksi b ON a.id=b.id_transaksi

