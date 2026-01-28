
CREATE TABLE utilisateur (
    user_id SERIAL PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    user_email VARCHAR(150) UNIQUE NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    Create_time DATE DEFAULT CURRENT_DATE
);

CREATE TABLE recipes (
    recipe_id SERIAL PRIMARY KEY,
    recipe_title VARCHAR(200) NOT NULL,
    recipe_description TEXT NOT NULL,
    recipe_category VARCHAR(100) NOT NULL,
    recipe_image VARCHAR(255),

    user_id INT NOT NULL,
    CONSTRAINT fk_recipe_user
        FOREIGN KEY (user_id)
        REFERENCES utilisateur(user_id)
        ON DELETE CASCADE
);

CREATE TABLE ingredients (
    ingredient_id SERIAL PRIMARY KEY,
    ingredient_name VARCHAR(150) NOT NULL,
    quantity VARCHAR(50) NOT NULL,

    recipe_id INT NOT NULL,
    CONSTRAINT fk_ingredient_recipe
        FOREIGN KEY (recipe_id)
        REFERENCES recipes(recipe_id)
        ON DELETE CASCADE
);

CREATE TABLE comments (
    comment_id SERIAL PRIMARY KEY,
    comment_content TEXT NOT NULL,
    created_at DATE DEFAULT CURRENT_DATE,

    user_id INT NOT NULL,
    recipe_id INT NOT NULL,

    CONSTRAINT fk_comment_user
        FOREIGN KEY (user_id)
        REFERENCES utilisateur(user_id)
        ON DELETE CASCADE,

    CONSTRAINT fk_comment_recipe
        FOREIGN KEY (recipe_id)
        REFERENCES recipes(recipe_id)
        ON DELETE CASCADE
);

CREATE TABLE ratings (
    rating_id SERIAL PRIMARY KEY,
    rating_value INT CHECK (rating_value BETWEEN 1 AND 5),

    user_id INT NOT NULL,
    recipe_id INT NOT NULL,

    CONSTRAINT fk_rating_user
        FOREIGN KEY (user_id)
        REFERENCES utilisateur(user_id)
        ON DELETE CASCADE,

    CONSTRAINT fk_rating_recipe
        FOREIGN KEY (recipe_id)
        REFERENCES recipes(recipe_id)
        ON DELETE CASCADE,

    CONSTRAINT unique_user_recipe_rating
        UNIQUE (user_id, recipe_id)
);




--SQL DATA

INSERT INTO utilisateur (username, user_email, user_password) VALUES
('amina_cook', 'amina@mail.com', 'hashed_pwd_1'),
('youssef_food', 'youssef@mail.com', 'hashed_pwd_2'),
('fatima_kitchen', 'fatima@mail.com', 'hashed_pwd_3'),
('karim_chef', 'karim@mail.com', 'hashed_pwd_4'),
('sara_taste', 'sara@mail.com', 'hashed_pwd_5'),
('hamza_home', 'hamza@mail.com', 'hashed_pwd_6'),
('nour_flavor', 'nour@mail.com', 'hashed_pwd_7'),
('adil_foodie', 'adil@mail.com', 'hashed_pwd_8'),
('meryem_cuisine', 'meryem@mail.com', 'hashed_pwd_9'),
('omar_spice', 'omar@mail.com', 'hashed_pwd_10');


INSERT INTO recipes (recipe_title, recipe_description, recipe_category, recipe_image, user_id) VALUES
('Chicken Tagine with Preserved Lemon', 'Traditional Moroccan tagine with chicken, olives and preserved lemon.', 'Main Dish', 'https://example.com/images/tagine_chicken.jpg', 1),
('Couscous with Seven Vegetables', 'Classic Friday couscous served with vegetables and chickpeas.', 'Main Dish', 'https://example.com/images/couscous.jpg', 2),
('Harira Soup', 'Rich tomato-based soup with lentils and chickpeas.', 'Soup', 'https://example.com/images/harira.jpg', 3),
('Zaalouk', 'Smoky eggplant and tomato salad.', 'Starter', 'https://example.com/images/zaalouk.jpg', 4),
('Pastilla with Chicken', 'Sweet and savory pastry with chicken and almonds.', 'Main Dish', 'https://example.com/images/pastilla.jpg', 5),
('Rfissa', 'Traditional dish with msemen, lentils and spiced chicken.', 'Main Dish', 'https://example.com/images/rfissa.jpg', 6),
('Baghrir', 'Moroccan thousand-hole pancakes.', 'Dessert', 'https://example.com/images/baghrir.jpg', 7),
('Chebakia', 'Sesame cookies coated with honey.', 'Dessert', 'https://example.com/images/chebakia.jpg', 8),
('Taktouka', 'Cooked salad with peppers and tomatoes.', 'Starter', 'https://example.com/images/taktouka.jpg', 9),
('Msemen', 'Layered Moroccan flatbread.', 'Bread', 'https://example.com/images/msemen.jpg', 10);


INSERT INTO ingredients (ingredient_name, quantity, recipe_id) VALUES
('Chicken', '1 whole', 1),
('Preserved lemon', '1', 1),
('Green olives', '100g', 1),
('Couscous semolina', '500g', 2),
('Carrots', '2', 2),
('Zucchini', '2', 2),
('Tomatoes', '4', 3),
('Lentils', '150g', 3),
('Chickpeas', '100g', 3),
('Eggplant', '2', 4),
('Tomatoes', '3', 4),
('Chicken', '500g', 5),
('Almonds', '200g', 5),
('Msemen', '3 pieces', 6),
('Lentils', '150g', 6),
('Semolina', '250g', 7),
('Yeast', '1 tsp', 7),
('Flour', '500g', 8),
('Sesame seeds', '100g', 8),
('Green peppers', '3', 9),
('Garlic', '2 cloves', 9),
('Flour', '400g', 10),
('Butter', '50g', 10);



INSERT INTO comments (comment_content, user_id, recipe_id) VALUES
('Absolutely delicious, just like my grandmother makes!', 2, 1),
('Perfect for family lunch.', 3, 2),
('Best harira recipe I tried.', 5, 3),
('Very flavorful and easy to prepare.', 1, 4),
('Amazing balance between sweet and salty.', 6, 5),
('Traditional and comforting dish.', 4, 6),
('So light and fluffy!', 8, 7),
('Perfect with tea.', 7, 8),
('Simple and tasty.', 10, 9),
('Crispy and soft at the same time.', 9, 10);


INSERT INTO ratings (rating_value, user_id, recipe_id) VALUES
(5, 2, 1),
(4, 3, 2),
(5, 5, 3),
(4, 1, 4),
(5, 6, 5),
(4, 4, 6),
(5, 8, 7),
(5, 7, 8),
(4, 10, 9),
(5, 9, 10);
