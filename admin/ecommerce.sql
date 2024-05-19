-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ecommerce.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prodid` int NOT NULL DEFAULT '0',
  `prodname` varchar(1000) NOT NULL DEFAULT '0',
  `proddesc` varchar(1000) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `image` varchar(1000) NOT NULL DEFAULT '0',
  `category` varchar(1000) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecommerce.cart: ~9 rows (approximately)
INSERT INTO `cart` (`id`, `prodid`, `prodname`, `proddesc`, `price`, `image`, `category`) VALUES
	(41, 8, 'Apple iPhone 14 (6.1 inch)', 'iPhone 14 offer exciting new options with the popular 6.1-inch size. A15 Bionic with 5-core GPU provides amazing performance and even better graphics. iPhone 14 feature a huge upgrade to the camera system, including a new Main camera with a larger sensor for great shots in all lighting scenarios, a new front camera with autofocus, Photonic Engine for improved low-light photos, and Action mode for extra smooth handheld videos.', 39890, '8.png', 'phone');

-- Dumping structure for table ecommerce.prodtable
CREATE TABLE IF NOT EXISTS `prodtable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prodname` varchar(1000) NOT NULL DEFAULT '0',
  `proddesc` varchar(1000) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `image` varchar(1000) NOT NULL DEFAULT '0',
  `category` varchar(1000) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecommerce.prodtable: ~30 rows (approximately)
INSERT INTO `prodtable` (`id`, `prodname`, `proddesc`, `price`, `image`, `category`) VALUES
	(1, 'Asus ROG ZEPHYRUS G14', 'Dynamic and ready to travel, the pioneering ROG Zephyrus G14 is the world’s most powerful 14-inch Windows 10 Pro gaming laptop. Live life at Zephyrus speed with a light and portable gaming laptop, and be active anywhere.', 62295, '1.png', 'laptop'),
	(2, 'Acer Predator Helios Neo 16', 'Unleash the future of gaming with the Predator Helios Neo 16. Dive into a neon-lit world with cutting-edge specs, AI-powered graphics, NVIDIA DLSS 3.5, and unique mysteries waiting to be unlocked.', 74550, '2.png', 'laptop'),
	(3, 'Apple MacBook Air 13-inch M1 Chip with 8‑Core CPU and 7‑Core GPU 256 GB Storage', 'The Apple MacBook Air 13-inch with M1 Chip combines blazing-fast performance with impressive energy efficiency, thanks to its 8-core CPU and 7-core GPU. With ample 256GB storage, it delivers seamless multitasking and stunning graphics, making it an ideal companion for both work and entertainment.', 45390, '3.png', 'laptop'),
	(4, 'Razer Blade 17 Gaming Laptop Intel Core i7-11800H 8-Core + 4.6GHz + RTX 3070', 'The Razer Blade 17 Gaming Laptop packs an Intel Core i7-11800H 8-Core processor and an NVIDIA RTX 3070, delivering outstanding gaming performance in a sleek, portable design.', 84075, '4.png', 'laptop'),
	(5, 'HUAWEI MateBook D 15 2022 Laptop', 'The HUAWEI MateBook D 15 2022 Laptop features an Intel Core i5-1155G7 processor, 8GB RAM, and 256GB storage on a vibrant FullView Display, with a Fingerprint Power Button and Super Device capabilities for added convenience.', 28999, '5.png', 'laptop'),
	(6, 'Dell XPS 13 Laptop', 'Experience powerful performance with the Lenovo IdeaPad Slim 5i Laptop, featuring an Intel Core i5-1135G7 processor and 8GB RAM, alongside a spacious 512GB SSD for smooth multitasking. Its vibrant 14" Full HD display and sleek design make it perfect for both work and entertainment, all at a competitive price of 45,000 pesos.', 45000, '6.png', 'laptop'),
	(7, 'Apple iPhone 12', 'iPhone 12 pushes everything forward with superfast 5G.1 A14 Bionic, the fastest chip in a smartphone. A new dual-camera system. And a beautiful Super Retina XDR display, so you can see everything in vivid detail.', 30990, '7.png', 'phone'),
	(8, 'Apple iPhone 14 (6.1 inch)', 'iPhone 14 offer exciting new options with the popular 6.1-inch size. A15 Bionic with 5-core GPU provides amazing performance and even better graphics. iPhone 14 feature a huge upgrade to the camera system, including a new Main camera with a larger sensor for great shots in all lighting scenarios, a new front camera with autofocus, Photonic Engine for improved low-light photos, and Action mode for extra smooth handheld videos.', 39890, '8.png', 'phone'),
	(9, 'Apple iPhone 13', 'iPhone 13. The most advanced dual-camera system ever on iPhone. Lightning-fast A15 Bionic chip. A big leap in battery life. Durable design. Super-fast 5G.1 And a brighter Super Retina XDR display.', 33090, '9.png', 'phone'),
	(10, 'Samsung Galaxy A15 Smartphone', 'The Samsung Galaxy A15 is a mid-range smartphone offering from Samsung, known for its balance of performance and affordability. With its sleek design and decent specifications, the A15 aims to provide a solid user experience without breaking the bank. Key features typically include a large display, a capable camera system, reliable performance for everyday tasks, and a long-lasting battery.', 12090, '10.png', 'phone'),
	(11, 'Samsung Galaxy A73 5G', 'The product listed has box slightly dirt. However, the item inside the box is still sealed and in good condition. Rest assured that the actual item inside the box is NEW or untouched.', 27990, '11.png', 'phone'),
	(12, 'Redmi 10 2022', 'The Redmi 10 (2022) features a modern and sleek design with slim bezels surrounding the display. It', 69696, '12.png', 'phone'),
	(13, 'PlayStation®5', 'Experience lightning-fast loading with an ultra-high-speed SSD, deeper immersion with support for haptic feedback, adaptive triggers, and 3D Audio, and an all-new generation of incredible PlayStation games.', 25000, '13.png', 'console'),
	(14, 'Xbox Series X', 'Explore the next generation of gaming with speed and performance powered by a custom-designed processor leveraging AMD', 25000, '14.png', 'console'),
	(15, 'Nintendo Switch', 'Enjoy gaming on the go or at home with the versatile Nintendo Switch, offering a unique hybrid design that seamlessly transitions between handheld and docked modes, along with a vast library of iconic Nintendo titles.', 15000, '15.png', 'console'),
	(16, 'Steam Deck', 'Immerse yourself in PC gaming wherever you go with the Steam Deck, featuring a powerful custom APU developed with AMD, a 7-inch touchscreen display, and full compatibility with your Steam library.', 20000, '16.png', 'console'),
	(17, 'PlayStation®5 Slim', 'Experience the power of the PlayStation®5 in a sleeker, more compact design with the PlayStation®5 Slim, offering lightning-fast loading, immersive gameplay features, and a wide range of next-gen titles.', 22000, '17.png', 'console'),
	(18, 'Nintendo Switch Lite', 'Enjoy the handheld gaming experience with the Nintendo Switch Lite, a dedicated portable gaming device that', 10000, '18.png', 'console'),
	(19, 'Xiaomi Redmi Pad 10.5 inch', 'The Redmi Pad 10.5 features a 10.5-inch display with a high-resolution screen, providing sharp visuals and ample screen real estate for multimedia consumption, productivity tasks, and gaming.', 4990, '19.png', 'tablet'),
	(20, 'xiaomi A9 Galaxy Tab Lite', 'Introducing the Xiaomi A9 Galaxy Tab Lite! This revolutionary tablet combines the best of Xiaomi', 4399, '20.png', 'tablet'),
	(21, 'xiaomi tablet pad 6 por', 'Boasting a sleek and ergonomic design, the Tablet Pad 6 Por features a large 10.5-inch AMOLED display with stunning 4K resolution. Whether you', 2590, '21.png', 'tablet'),
	(22, 'XIAOMI REDMI MI PAD', 'Featuring a sleek and lightweight design, the Redmi Mi Pad Tab boasts a stunning 10.1-inch IPS LCD display with vivid colors and crisp details, perfect for watching movies, playing games, or browsing the web.', 4999, '22.png', 'tablet'),
	(23, 'Apple 10.9-inch iPad Air Wi-Fi (5th Generation)', 'With a powerful M1 chip, a stunning 10.9-inch Liquid Retina display, and a sleek new design, the iPad Air is the perfect way to get creative, stay productive, and connect with the people you love.', 50490, '23.png', 'tablet'),
	(25, 'Alienware Area 51', 'Immerse yourself in ultimate gaming performance with the Alienware Area 51, featuring cutting-edge hardware, innovative cooling systems, and customizable lighting effects for a truly immersive gaming experience.', 150000, '25.png', 'PC'),
	(26, 'ROG STRIX G35CA', 'Dominate the gaming arena with the ROG Strix G35CA, equipped with powerful hardware including the latest Intel Core i7 processor, NVIDIA GeForce RTX graphics, and high-speed DDR4 memory.', 170000, '26.png', 'PC'),
	(27, 'ROG NUC', 'Experience uncompromising gaming performance with the ROG NUC, powered by Intel Core processors and featuring NVIDIA GeForce graphics. Despite its compact size, it delivers impressive power for smooth gaming and multitasking. With customizable Aura Sync lighting and versatile connectivity options, it', 60000, '27.png', 'PC'),
	(28, 'ROG Strix GA15 G15', 'Elevate your gaming experience with the ROG Strix GA15 G15, featuring a potent combination of AMD Ryzen processors and NVIDIA GeForce graphics, ensuring smooth gameplay and stunning visuals for the latest AAA titles. Its sleek chassis, customizable Aura Sync lighting, and ample connectivity options make it a versatile and stylish addition to any gaming setup.', 80000, '28.png', 'PC'),
	(29, 'Alienware Aurora R15', 'The Alienware Aurora R15 is a powerful prebuilt gaming PC packed with the latest components that performs and cools better than its predecessors.', 145156, '29.png', 'PC'),
	(30, 'Corsair Vengeance i7500', 'Our review system, with an Intel Core i9-14900K and Nvidia GeForce RTX 4090 from Palit, offered top-notch performance. And while it', 100000, '30.png', 'PC');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
