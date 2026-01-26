
CREATE TABLE users (
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
        REFERENCES users(user_id)
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
        REFERENCES users(user_id)
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
        REFERENCES users(user_id)
        ON DELETE CASCADE,

    CONSTRAINT fk_rating_recipe
        FOREIGN KEY (recipe_id)
        REFERENCES recipes(recipe_id)
        ON DELETE CASCADE,

    CONSTRAINT unique_user_recipe_rating
        UNIQUE (user_id, recipe_id)
);
