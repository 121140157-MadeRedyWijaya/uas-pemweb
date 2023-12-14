-- Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS db_uaspemweb;

-- Pilih database yang akan digunakan
USE db_uaspemweb;

-- Buat tabel pemesanan
CREATE TABLE pemesanan (
  id INT AUTO_INCREMENT NOT NULL,
  nama VARCHAR(100) NOT NULL,
  makanan VARCHAR(255) NOT NULL,
  jenis_pemesanan VARCHAR(50) NOT NULL,
  pengiriman VARCHAR(50) NOT NULL,
  browser VARCHAR(255) NOT NULL,
  ip_address VARCHAR(50) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

-- Sisipkan contoh data
INSERT INTO pemesanan (nama, makanan, jenis_pemesanan, pengiriman, browser, ip_address)
VALUES
  ('Agus Saipuddin', 'pizza, burger, pasta', 'dine_in', 'dine_in', 'Chrome', '192.168.1.1'),
  ('Budi Sudarsono', 'burger', 'take_home', 'shopee_food', 'Firefox', '192.168.1.2'),
  ('Cici Evangelina', 'pasta, sushi', 'dine_in', 'dine_in', 'Safari', '192.168.1.3'),
  ('Dara Andesta', 'Sushi', 'Ttake_home', 'gosend', 'Edge', '192.168.1.4');
