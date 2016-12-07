CREATE TABLE markets(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
	name varchar(255) NOT NULL UNIQUE
)ENGINE=InnoDB;

CREATE TABLE brands(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
	name varchar(255) NOT NULL UNIQUE
)ENGINE=InnoDB;

CREATE TABLE goods(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
	name varchar(255) NOT NULL UNIQUE

)ENGINE=InnoDB;

CREATE TABLE purchases(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
	goods_id int NOT NULL,
	brands_id int NOT NULL,
	markets_id int NOT NULL,
	weight int DEFAULT NULL,
	quantity int DEFAULT NULL,
	price decimal NOT NULL,
	rate smallint NOT NULL,
	comments varchar(255),
	purchase_date date NOT NULL,
	CONSTRAINT fk_good_purchases FOREIGN KEY (goods_id) REFERENCES goods(id) ON DELETE CASCADE,
	CONSTRAINT fk_brand_purchases FOREIGN KEY (brands_id) REFERENCES brands(id) ON DELETE CASCADE,
	CONSTRAINT fk_market_purchases FOREIGN KEY (markets_id) REFERENCES markets(id) ON DELETE CASCADE

)ENGINE=InnoDB;

INSERT INTO `goods_catalog`.`brands` (`id`, `name`) VALUES (NULL, 'Яготинске');
INSERT INTO `goods_catalog`.`goods` (`id`, `name`) VALUES (NULL, 'МОлоко');
INSERT INTO `goods_catalog`.`markets` (`id`, `name`) VALUES (NULL, 'Сильпо');
INSERT INTO `goods_catalog`.`purchases` 
(`goods_id`, `brands_id`, `markets_id`, `weight`, `quantity`, `price`, `rate`, `comments`, `purchase_date`)
 VALUES
 ('1', '1', '1', '1', NULL, '22', '5', 'Вкусно', '2016-11-20'),
 ('1', '1', '1', '250', '7', '12.5', '5', 'Вкусно', '2016-11-20'),
 ('1', '1', '1', '1205', NULL, '72', '5', 'Вкусно', '2016-11-20'),
 ('1', '1', '1', '3015', NULL, '436', '5', 'Вкусно', '2016-11-20'),
 ('1', '1', '1', '81', '4', '965', '5', 'Вкусно', '2016-11-20');
