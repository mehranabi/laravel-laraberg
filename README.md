## Laravel & Laraberg
This is a [Laravel](https://github.com/laravel/laravel) project which uses [Laraberg](https://github.com/VanOns/laraberg) (that created on top of [GutenbergJs](https://github.com/front/gutenberg-js)) as a content editor. So users can create/make beautiful articles (Just like what you do in WordPress) and save them into database as posts. Post model (which represents an article) use `Gutenbergable` feature of [Laraberg](https://github.com/VanOns/laraberg) to save rendered content of the editor and then use that later to show the content. Also there's an Articles page which list all of articles created by the user. It uses [Fomantic-UI](https://fomantic-ui.com) as UI library.

## Use & Run
  - Clone this repository
  
    `git clone https://github.com/mehranabi/laravel-laraberg.git && cd laravel-laraberg`
  
  - Install dependencies by composer: `composer install`
  - Create your `.env` file from `.env.example`
  - Put your database credentials in `.env`
  - Run migrations: `php artisan migrate` **(You have to use newer versions of MySql that supports Json field type or you'll get error!)** 
  - Run the App: `php artisan serve`
  - Now, you can access it on [http://localhost:8000](localhost:8000)

#### Developer
Mehran Abghari - [mehran.ab80@gmail.com](mailto:mehran.ab80@gmail.com) - [github.com/mehranabi](https://github.com/mehranabi)

Lisence: MIT

You can do anything with this code :) Hope you enjoy!
