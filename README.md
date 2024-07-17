# Kadence Child Theme

## Overview

Kadence Child Theme is a child theme for the Kadence WordPress theme. It allows you to customize and extend the functionality of the Kadence theme without losing your changes when the parent theme is updated.

## Features

- Inherits all features and functionalities of the Kadence theme.
- Easy to customize with your own CSS and PHP code.
- Safe from updates to the parent theme.

![wp-kadence-child-screenshot](https://github.com/user-attachments/assets/1279b251-b8f1-495c-9554-7e308703fbda)

## Installation

### Via Composer

1. Open your terminal and navigate to your WordPress project directory.
2. Run the following command to install the Kadence Child theme:
    ```bash
    composer require devuri/wp-kadence-child
    ```
3. The theme will be installed in the `wp-content/themes/wp-kadence-child` directory.

### Manual Installation

#### 1. Download and Extract

1. Download the child theme files.
2. Extract the files to a folder on your computer.

#### 2. Upload to WordPress

1. Connect to your WordPress site via FTP or use the File Manager in your hosting control panel.
2. Navigate to `wp-content/themes`.
3. Upload the entire `kadence-child` folder to the `themes` directory.

### 3. Activate the Child Theme

1. Log in to your WordPress admin dashboard.
2. Go to `Appearance > Themes`.
3. Find `Kadence Child` and click `Activate`.

## Customization

### Custom CSS

Add your custom styles in the `style.css` file located in the `wp-kadence-child` folder.

### Custom PHP Functions

Add your custom PHP functions in the `functions.php` file located in the `wp-kadence-child` folder. Here is an example of how to enqueue the parent and child theme styles:

```php
<?php
function kadence_child_example() {
    // feature code here
}


```

### Custom Templates

If you want to override specific template files from the parent theme, copy the template file from the parent theme to the child theme folder and make your changes there.

## Credits

- **Parent Theme:** [Kadence Theme](https://wordpress.org/themes/kadence/)

## License

This theme is licensed under the [GPL License](http://www.gnu.org/licenses/gpl-2.0.html).
