Cooking Recipes Web Platform

Welcome to the Cooking Recipes Web Platform — an interactive space where cooking enthusiasts can share recipes, exchange culinary tips, and discover new inspiring dishes!

Project Overview

This platform aims to create a friendly community for food lovers by allowing users to:

Publish their own recipes with titles, descriptions, ingredients, preparation steps, and images.

Edit or delete their recipes.

View recipes published by other members.

Filter recipes by category such as starters, main courses, desserts, and drinks.

Search for recipes by keyword.

Leave comments to share opinions or ask questions.

Read comments from other members.

View statistics like the total number of recipes and discover the most commented or best-rated recipes.

Features
Recipe Sharing

Publish recipes with detailed information and images.

Edit or delete your own recipes.

Browse recipes created by others.

Filtering and Search

Filter recipes by categories: starters, main courses, desserts, drinks.

Search recipes by keyword.

Comments

Leave comments on recipes.

Read comments from the community.

Statistics

View total recipes count.

Discover popular recipes based on comments and ratings.

Technologies Used

Backend: Laravel (PHP Framework)

Database: PostgreSQL/MySQL (depending on your setup)

Frontend: Blade templating (Laravel), HTML, CSS

Other tools: Composer, Artisan CLI

Installation

Clone the repository:

git clone https://github.com/yourusername/recipes-platform.git
cd recipes-platform


Install dependencies:

composer install


Set up environment:

Copy .env.example to .env

Configure database credentials and other settings in .env

Generate application key:

php artisan key:generate


Run migrations and seeders:

php artisan migrate --seed


Run the development server:

php artisan serve


Access the app:

Open http://localhost:8000 in your browser.

Usage

Register and log in to publish recipes.

Explore recipes, use filters or search.

Leave comments on your favorite dishes.

Check out recipe statistics.