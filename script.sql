CREATE TABLE categories(
    id INTEGER PRIMARY KEY,
    name VARCHAR(250) NOT NULL
);

CREATE TABLE products(
    id INTEGER PRIMARY KEY,
    name VARCHAR(250) NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (category_id)REFERENCES categories(id)
);


INSERT INTO categories (id,name)VALUES
(1,"Fruit"),
(2,"Bakery"),
(3,"Vegetable"),
(4,"Dry goods");

INSERT INTO products (id,name,category_id)VALUES
(1,"molla", 1),
(2,"banane", 1),
(3,"portokall", 1),
(4,"buka", 2),
(,"domate", 3);