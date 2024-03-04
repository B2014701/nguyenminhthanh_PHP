create database ct27501_project_B2014701 character set="utf8";

use ct27501_project_B2014701;

CREATE TABLE `contacts` (
`ct_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`notes` varchar(255) NOT NULL,
`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB;

INSERT INTO `contacts`(`name`, `email`, `notes`) VALUES
('Nguyễn Minh Thạnh','thanhb2014701@student.ctu.edu.vn','Cảm ơn');

CREATE TABLE `product` (
  `jd_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `img_1` text NOT NULL,
  `img_2` text NOT NULL,
  `img_3` text NOT NULL,
  `img_4` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`jd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `product`(`name`, `img_1`, `img_2`, `img_3`, `img_4`, `price`) VALUES
('Converse Run Star Motion Canvas Platform - 171545C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/171545C/171546C-650x650a-650x650.jpg', 
'https://authentic-shoes.com/wp-content/uploads/2023/04/erse-run-star-motion-high-top-black-gum-honey-171545c-duyet-fashion-30_54129e99dcb54f03ac7e2e12e6d4e86e-768x768.png', 
'https://bizweb.dktcdn.net/thumb/1024x1024/100/436/098/products/16595ff4-8fa1-443a-a65c-d646e2926604.jpg', 
'https://bizweb.dktcdn.net/thumb/1024x1024/100/436/098/products/16595ff4-8fa1-443a-a65c-d646e2926604.jpg', 2600000), 
('Converse Chuck Taylor All Star Lift Canvas - 560845C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/560845C/560845C-650x650.jpg', 
'https://product.hstatic.net/200000078815/product/560845c_04_54007b16c56e4121b8bc56d731372f09_master.jpg', 
'https://product.hstatic.net/1000387035/product/27_d022e8923f9a49ac86457097ae9aed57_master.png', 
'https://salt.tikicdn.com/ts/product/e7/d0/63/27dd159ffe34f3e4adf94f2c4499085e.jpg', 1800000),
('Chuck Taylor All Star 1970s - 162050', 'https://drake.vn/image/cache/catalog/Converse/1970s/TRANG%20CH%E1%BB%A6/162050-DRAKE-650x650.jpg', 
'https://salt.tikicdn.com/ts/product/1e/b6/95/58e57af1a2f4bb4601574c13d2aee2e6.jpg', 
'https://salt.tikicdn.com/ts/product/63/93/e8/d3d59edae9baa19fb6b967fe7907c1a3.jpg', 
'https://dosi-in.com/file/detailed/328/dosiin-converse-giay-sneakers-converse-chuck-taylor-all-star-s-328363328363.jpg?w=1000&h=1000&fit=fill&fm=webp', 2000000), 
('Converse Chuck Taylor All Star Move Low Top - 570257C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/570257C/570257C-650x650.jpg', 
'https://bizweb.dktcdn.net/100/347/923/products/570257c-1.jpg?v=1617285378370', 
'https://maufeitio.pt/onlineshop/121870-large_default/converse-chuck-taylor-all-star-move-platform-570257c.jpg', 
'https://salt.tikicdn.com/cache/w1200/ts/product/f6/03/9e/68409efb4a77e5dee421ded9292723df.jpg', 1900000), 
('Converse Chuck Taylor All Star 1970s Valentines Day - 171117C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/171117C/171117C-650x650.jpg', 
'https://bizweb.dktcdn.net/100/347/923/products/171117c-1.jpg?v=1610529831567', 
'https://bizweb.dktcdn.net/thumb/1024x1024/100/419/301/products/171117c6.jpg?v=1613990961403', 
'https://bizweb.dktcdn.net/100/347/923/products/171117c-2.jpg?v=1611923741113', 2000000), 
('Converse Chuck Taylor All Star Lift Hi - A04394C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/A04394C/A04394C_1-650x650.jpg', 
'https://drake.vn/image/catalog/Converse/360do/Sneaker/A04394C/3.jpg', 
'https://m.media-amazon.com/images/I/71GHi+ubKdL._AC_UY580_.jpg', 
'https://lzd-img-global.slatic.net/g/p/c6a151e82e1787541b7809f799bbc14e.png_960x960q80.png_.webp', 1800000), 
('Converse Chuck Taylor All Star Digital Daze - 570311C', 'https://product.hstatic.net/1000382698/product/570311c-1_65f6b9909d184a8c9e170c2a54814c1a_master.jpg', 
'https://product.hstatic.net/200000265619/product/570311c_3_5481113a9d264026b1b0f91c1b348db2.jpg', 
'https://drake.vn/image/catalog/Converse/360do/Sneaker/570311C/9.jpg', 
'https://administrator.athlokinisi.com.cy/product_catalog/groups/128504/pics/570311c_1.jpg', 1600000), 
('Converse Chuck Taylor All Star Create Future - 168554V', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/168554V/168554V-650x650.jpg', 
'https://salt.tikicdn.com/cache/w1200/ts/product/e3/13/48/2087bf408ab9e6f2778866a495229e09.jpg', 
'https://footgearh.vn/upload/hinhthem/4-7478.jpg', 
'https://vn-test-11.slatic.net/p/c3c942c777354933a98452ffe9d5f5a3.jpg', 1600000), 
('Converse Run Star Hike Low Top - 168816C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/168816C/168816C-650x650.jpg', 
'https://drake.vn/image/catalog/Converse/360do/Sneaker/168816V/19.jpg', 
'https://authentic-shoes.com/wp-content/uploads/2023/04/ejvimdmxsaqlt9i_1c8f128a602a489a81220c4fe208758d.png', 
'https://authentic-shoes.com/wp-content/uploads/2023/04/converse-run-star-hike-low-black-gum-168816c-3_527aed10f1584a21b23d52c2b79b5356.png', 2200000), 
('Converse Chuck Taylor All Star Made it to The Top - 566130C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/566130C/566130-650x650-1-650x650.jpg', 
'https://bizweb.dktcdn.net/thumb/1024x1024/100/347/923/products/566130c-3.jpg', 
'https://dosi-in.com/file/detailed/328/dosiin-converse-giay-sneakers-converse-chuck-taylor-all-star-made-it-to-the-top-c-328724328724.jpg?w=1000&h=1000&fit=fill&fm=webp', 
'https://bizweb.dktcdn.net/thumb/grande/100/347/923/products/566130c-1.jpg?v=1584452143097', 1900000), 
('Chuck Taylor All Star 1970s Sunflower - 162054C', 'https://drake.vn/image/cache/catalog/Converse/1970s/TRANG%20CH%E1%BB%A6/162054C-DRAKE-650x650.jpg', 
'https://leftfoot.com.sg/cdn/shop/products/162054C_D_107X1_eae33c10-eec5-48fb-a282-49e5e4f5b8a1_1024x1024@2x.jpg?v=1623592309', 
'https://leftfoot.com.sg/cdn/shop/products/162054C_E_107X1_17c79f55-922e-495d-b711-47db006c8066_1024x1024@2x.jpg?v=1623592309', 
'https://bizweb.dktcdn.net/100/438/626/products/d46be62c-5934-47f1-b967-9beee4077ce8.jpg?v=1671967211230', 2000000), 
('Converse Chuck Taylor All Star 1970s Mule Recycled Canvas - 172591C', 'https://drake.vn/image/cache/catalog/Converse/GIA%CC%80Y%202/172591C/172591C_1-650x650.jpg', 
'https://product.hstatic.net/200000078815/product/172591c_02_99a720b75e594f10b35011ae46a900de_master.jpg', 
'https://product.hstatic.net/200000366171/product/172591c_03_56a93b6d8e794f049624a2766dbeb8eb_a76d3ef3daa34de7ab8ce7f55fa32135_master.jpg', 
'https://bizweb.dktcdn.net/thumb/1024x1024/100/436/098/products/30e55f48-5f24-43f4-a647-2797714043e8.jpg?v=1647103164463', 2000000);


CREATE TABLE `size` (
  `size_id` int(10) NOT NULL,
  `size_36` int(11) NOT NULL,
  `size_36_5` int(11) NOT NULL,
  `size_37` int(11) NOT NULL,
  `size_37_5` int(11) NOT NULL,
  `size_38` int(11) NOT NULL,
  `size_38_5` int(11) NOT NULL,
  `size_39` int(11) NOT NULL,
  `size_39_5` int(11) NOT NULL,
  `size_40` int(11) NOT NULL,
  `size_40_5` int(11) NOT NULL,
  `size_41` int(11) NOT NULL,
  `size_41_5` int(11) NOT NULL,
  `size_42` int(11) NOT NULL,
  `size_42_5` int(11) NOT NULL,
  `size_43` int(11) NOT NULL,
  `size_43_5` int(11) NOT NULL,
  `size_44` int(11) NOT NULL,
  `size_44_5` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `jd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`),
  ADD UNIQUE KEY `jd_id` (`jd_id`);
  
INSERT INTO `size` (`size_id`, `size_36`, `size_36_5`, `size_37`, `size_37_5`, `size_38`, `size_38_5`, `size_39`, `size_39_5`,
 `size_40`, `size_40_5`, `size_41`, `size_41_5`, `size_42`, `size_42_5`, `size_43`, `size_43_5`, `size_44`, `size_44_5`, `jd_id`) VALUES
(21, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(25, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 2),
(26, 1, 4, 100, 100, 54, 12, 14, 14, 14, 14, 14, 14, 14, 2, 2, 3, 1, 2, 3),
(27, 1, 3, 2, 2, 3, 3, 5, 4, 12, 12, 14, 14, 14, 14, 14, 14, 1, 0, 4),
(28, 1, 12, 12, 12, 12, 12, 15, 15, 15, 15, 15, 15, 15, 10, 10, 5, 5, 3, 5),
(29, 3, 2, 3, 4, 6, 7, 5, 4, 10, 9, 4, 1, 1, 1, 3, 2, 5, 3, 6),
(30, 1,4, 3, 7, 5, 5, 5, 3, 6, 5, 3, 8, 4, 2, 1, 1, 3, 1, 7),
(31, 3, 2, 4, 6, 2, 12, 2, 4, 5, 2, 6, 4, 1, 4, 3, 1, 2, 3, 8),
(32, 2, 2, 4, 2, 3, 4, 1, 2, 5, 1, 2, 4, 5, 5, 5, 4, 3, 1, 9),
(33, 14, 3, 4, 2, 3, 5, 5, 5, 14, 14, 15, 16, 15, 15, 15, 3, 6, 2, 10),
(34, 3, 1, 3, 4, 2, 1, 2, 1, 2, 32, 32, 33, 12, 13, 16, 1, 2, 2, 11),
(35, 2, 3, 2, 3, 3, 2, 4, 3, 2, 3, 3, 2, 2, 3, 3, 4, 2, 1, 12);


