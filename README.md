# Tasty Trap

## WordPress Theme for Fast Food

The Tasty Trap project originated in college as an assignment for the subject **CMS Systems**.

The project's theme was to create a WordPress theme for a fast-food restaurant, utilizing custom post types, taxonomies, and custom meta-boxes.

The website showcases all the knowledge acquired about using **WordPress**, which utilizes **PHP** programming language and **MySQL** for the database.

[![My Skills](https://skills.thijs.gg/icons?i=wordpress,php,mysql)](https://skills.thijs.gg)

---

### Administrative Interface

- The **Menu** custom post type includes **Food** and **Beverage** custom post types connected via custom meta-boxes.
- **Food** and **Beverage** have their own custom meta-boxes displaying nutritional values, which are summed up in the menu display.
- There are also **Employee**, **Restaurant**, and **News** custom post types, each with their custom meta-boxes.
- Each custom post type has its unique taxonomy.
- The **MetaSlider** plugin is used to display employees in a slider format.

---

### On the website, you can:

- Browse through menus, their food, and beverages.
- View food items sorted by taxonomy.
- View beverages sorted by taxonomy.
- Read news articles.
- Explore featured employees and their stories.
- Find locations on the map.
- Search the website.

---

## Project Setup

You need to install [XAMPP](https://www.apachefriends.org) and run **Apache** and **MySQL** through it.

Then, paste the **Tasty-Trap** folder into `C:\xampp\htdocs\` and rename it to `TastyTrap`.

Link to access the database: [http://localhost/phpmyadmin/index.php](http://localhost/phpmyadmin/index.php).

In **phpMyAdmin**, create a database named `tastytrap` (Character Set should be **Collation**), and then import `tastytrap.sql` located in the project's root.

Link to access the application: [http://localhost/TastyTrap/wp-admin/](http://localhost/TastyTrap/wp-admin/).
