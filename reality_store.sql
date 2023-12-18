CREATE TABLE admin (
    a_id INT AUTO_INCREMENT PRIMARY KEY,
    a_nama VARCHAR(255),
    a_email VARCHAR(255),
		a_pass CHAR(8)
);

CREATE TABLE produk (
    p_id INT AUTO_INCREMENT PRIMARY KEY,
    p_nama VARCHAR(255),
    p_deskripsi TEXT,
    p_warna VARCHAR(50),
    p_ukuran VARCHAR(5),
    p_harga DECIMAL(10, 2),
		p_gambar LONGTEXT
);

CREATE TABLE user (
    u_id INT AUTO_INCREMENT PRIMARY KEY,
    u_nama VARCHAR(255),
    u_telepon VARCHAR(13),
    u_email VARCHAR(255),
		u_pass CHAR(8),
		u_alamat TEXT
);

CREATE TABLE checkout (
    c_id INT AUTO_INCREMENT PRIMARY KEY,
    c_tanggal TIMESTAMP,
		c_warna TEXT,
		c_ukuran TEXT,
		c_shipment TEXT,
		c_pembayaran TEXT
);

CREATE TABLE detail (
    d_id INT AUTO_INCREMENT PRIMARY KEY,
    c_id INT,
    p_id INT,
		u_id INT,
    FOREIGN KEY (c_id) REFERENCES checkout(c_id),
    FOREIGN KEY (p_id) REFERENCES produk(p_id),
		FOREIGN KEY (u_id) REFERENCES user(u_id)
);


INSERT INTO `produk` (`p_id`, `p_nama`, `p_deskripsi`, `p_warna`, `p_ukuran`, `p_harga`, `p_gambar`) VALUES
(1, 'Reality Club Asia Tour T-Shirt Black', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Black', 'L, XL', '100000.00', 'https://imagetolink.com/ib/dQlLhrUdB2.png'),
(2, 'Reality Club Asia Tour T-Shirt White', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'White', 'L, XL', '190000.99', 'https://imagetolink.com/ib/JWURjY9PrJ.png'),
(3, 'Club Athleisure Classic Crew Socks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'White', 'All S', '50000.00', 'https://imagetolink.com/ib/7ntFtPJqQh.png'),
(4, 'Club Athleisure Sweatshorts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Navy, Cream', 'L, XL', '250000.00', 'https://imagetolink.com/ib/ZF4DVPcrce.png'),
(5, 'Athleisure Halfzip Sweatshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Navy', 'M, L,', '150000.00', 'https://imagetolink.com/ib/9gTe9pxvaA.png'),
(6, 'Club Athleisure Long Sweat Set', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Cream, Navy', 'M, L', '350000.00', 'https://imagetolink.com/ib/DGbh08KGe4.png'),
(7, 'Reality Club - Lovestruck Limited Enamel Pin Club ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', '-', '-', '30000.00', 'https://imagetolink.com/ib/pm4S43YBs2.png'),
(8, 'Club Athleisure Short Sweat Set', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Cream, Navy', 'S, M', '250000.00', 'https://imagetolink.com/ib/E8ZKci2Enq.png'),
(9, 'Reality Club - Lovestruck Premium Canvas Totebag', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Cream, Navy', '-', '30000.00', 'https://imagetolink.com/ib/9R2Ysv3BYz.png');

INSERT INTO `user` (`u_id`, `u_nama`, `u_telepon`, `u_email`, `u_pass`, `u_alamat`) VALUES
(1, 'User 1', '123456789012', 'user1@example.com', 'userpass', 'Address 1'),
(2, 'User 2', '987654321098', 'user2@example.com', 'userpass', 'Address 2'),
(3, 'User 3', '111222333444', 'user3@example.com', 'userpass', 'Address 3');

