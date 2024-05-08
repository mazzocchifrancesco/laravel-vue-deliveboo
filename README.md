
<h3 align="center">Deliveboo</h3>
<div align="center">

<img src="/backend/public/img/delivebooOrange.png" alt="Logo" width="80" height="80">

<p style="margin-top:1rem;">A delivery web app</p>
</div>

<!-- ABOUT THE PROJECT -->
## About The Project
<img src="/backend/public/img/readme/example_1.png" alt="main_example">
<br>
<br>

This is a web app that allows a user to <b>order food</b> and a restaurateur to <b>manage</b> their business, <b>built with:</b>

<ul>
<li><img src="/backend/public/img/readme/JavaScript-logo.png" alt="vuejs" width="20"> Javascript</li>  
    <li>
       <img src="/backend/public/img/readme/vue.svg" alt="vuejs" width="20"> Vue.js
    </li>
    <li>
      <img src="/backend/public/img/readme/axios.svg" alt="axios" width="90">
    </li>
    <li><img src="/backend/public/img/readme/bootstrap.png" alt="bootstrap" width="20"> Bootstrap</li>
    <li><img src="/backend/public/img/readme/PHP-logo.svg.png" alt="PHP" width="25"> PHP</li>
    <li><img src="/backend/public/img/readme/1969px-Laravel.svg.png" alt="laravel" width="15"> Laravel</li>
        <li><img src="/backend/public/img/readme/braintree-logo-black.png" alt="braintree" width="70"></li>
  </ul>


This app currently allows you to:

<b>user side</b>
* search for a restaurant by category
* select food from a single restaurant and add it to your cart
* pay for your order and receive a confirmation email with the summary (by <a href="https://mailtrap.io/">Mailtrap</a>)

<b>restaurateur side</b>
* register / log in with your credentials
* see a summary of your restaurant
* manage the restaurant and products
* check orders and see statistics
<!-- GETTING STARTED -->
## Getting Started

### Installation

<details><summary>Instructions</summary>

1. `Clone` the repo

   ```sh
   git clone https://github.com/mazzocchifrancesco/laravel-vue-deliveboo.git
   ```
   
2. `create` a <b>.env</b> file in `/backend` using the <b>.env.example</b> file as a template:
 * setup the database
 * uncomment the entry `APP_FRONTEND_URL`
 * <a href="https://api-docs.mailtrap.io/">setup the mail provider</a>

3. Move to <b>backend</b> folder
<br>
4. Install `NPM` packages

   ```sh
   npm install
   ```
   
5. Install `Composer` dependencies

   ```sh
   composer update
   ```

6. Generate the `APP_KEY`

   ```sh
   php artisan key:generate
   ```
   
7. Create the `tables` and launch exemple `seeding`

   ```sh
   php artisan migrate:fresh --seed
   ```
   
8. Start the `development server`

   ```sh
   npm run dev
   ```
   
9. Start the `PHP's built-in development server`

   ```sh
   php artisan serve
   ```

10. move to <b>frontend</b> folder

<br>

11. Install `NPM` packages

   ```sh
   npm install
   ```

12. Start the `development server`

   ```sh
   npm run dev
   ```
   
</details>

## Gallery

Selection by category

<img src="/backend/public/img/readme/example_2.png" alt="main_example">
<br>
<br>

Food list

<img src="/backend/public/img/readme/example_3.png" alt="main_example">
<br>
<br>

Checkout page

<img src="/backend/public/img/readme/example_6.png" alt="main_example">
<br>
<br>

Restaurateur Dashboard

<img src="/backend/public/img/readme/example_4.png" alt="main_example">
<br>
<br>

Order statistics

<img src="/backend/public/img/readme/example_5.png" alt="main_example">
