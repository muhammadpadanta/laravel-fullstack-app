# Tugas ATS Pemrograman Web dengan Laravel + TailwindCSS + DaisyUI

Kelompok 1 PBL, Beranggotakan! 🚀
<br>
3312301053 - Yurisha Anindya 
<br>
3312301032 - Theodore Kevin Sebastian 
<br>
3312301040 - Iqbal Haris Munandar. S 
<br>
3312301051 - Muhammad Padanta Tarigan 
<br>
3312311092 - Christoffel Aristo Marbun 
<br>

## About the App

Our application is built using the Laravel PHP framework, which provides a solid foundation for developing web applications. Laravel offers a wide range of features, including a powerful routing system, database migrations, authentication, and much more, making it an ideal choice for building robust and scalable web applications.
<br><br>
In addition to Laravel, we've utilized TailwindCSS, a utility-first CSS framework that allows us to rapidly build custom designs without the need for writing traditional CSS. TailwindCSS provides a comprehensive set of pre-built components and utilities, enabling us to create beautiful and responsive user interfaces with ease.
<br><br>
To further enhance the design of our application, we've integrated DaisyUI, which extends TailwindCSS with additional components and utilities. DaisyUI offers a variety of ready-made UI components, such as buttons, cards, navigation bars, and more, making it incredibly easy to create stunning and professional-looking interfaces.

## Initial Setup to Launch the App

1. **Clone the Project**: Start by cloning the project from your friend's GitHub repository to your local machine.

   ```bash
   git clone <repository-url>
   ```

2. **Install Composer Dependencies**: Navigate to the newly cloned project directory and install Composer dependencies.

   ```bash
   composer install
   ```

3. **Update Composer Autoload and Dependencies**:
   
   ```bash
   composer dump-autoload
   composer update
   ```

## Handling Errors

If you encounter errors, follow these steps:

1. **Recovery Procedure**:

   ```bash
   php artisan serve
   ```

2. **If you encounter an Error Code 500**:

   - Rename `.env-example` to `.env`.
   - Set `APP_DEBUG=true` in the `.env` file.

3. **Generate New Application Key**:

   ```bash
   php artisan key:generate
   ```

4. **Restart the Server**:

   ```bash
   php artisan serve
   ```

5. **Check in Browser**:

   Open your browser and navigate to the localhost server URL to verify the application is running correctly.


