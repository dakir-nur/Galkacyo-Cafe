<?php
date_default_timezone_set('Africa/Mogadishu');

// Site information
$site = [
    'name'    => 'Galkayo Café',
    'phone'   => '+252 90 000 0000',
    'email'   => 'info@galkayocafe.com',
    'address' => 'Main Road, Galkayo, Somalia',
];

// Menu items
$menuItems = [
    ['name' => 'Somali Tea (Shaah)', 'category' => 'Drinks', 'price' => '$0.50', 'description' => 'Spiced tea with cardamom and ginger.',   'featured' => true],
    ['name' => 'Espresso',           'category' => 'Drinks', 'price' => '$1.50', 'description' => 'Strong and fresh single shot.',         'featured' => false],
    ['name' => 'Cappuccino',         'category' => 'Drinks', 'price' => '$2.00', 'description' => 'Espresso with steamed milk foam.',      'featured' => false],
    ['name' => 'Fresh Mango Juice',  'category' => 'Drinks', 'price' => '$1.50', 'description' => 'Made from local mangoes.',              'featured' => true],
    ['name' => 'Sambuusa (3 pcs)',   'category' => 'Snacks', 'price' => '$1.00', 'description' => 'Crispy pastry filled with spiced meat.', 'featured' => true],
    ['name' => 'Chocolate Cake',     'category' => 'Snacks', 'price' => '$2.50', 'description' => 'Soft cake with chocolate cream.',       'featured' => false],
];

// Gallery photos (files are in assets/images/)
$gallery = [
    ['image' => 'coffee.svg',   'caption' => 'Fresh coffee'],
    ['image' => 'shaah.svg',    'caption' => 'Somali tea'],
    ['image' => 'sambuusa.svg', 'caption' => 'Hot sambuusa'],
    ['image' => 'mango.svg',    'caption' => 'Mango juice'],
    ['image' => 'cake.svg',     'caption' => 'Chocolate cake'],
    ['image' => 'cafe.svg',     'caption' => 'Our café'],
];

// Team members
$team = [
    ['name' => 'Ahmed Ali',     'role' => 'Head Barista'],
    ['name' => 'Hodan Warsame', 'role' => 'Manager'],
    ['name' => 'Yusuf Farah',   'role' => 'Chef'],
    ['name' => 'Amina Hassan',  'role' => 'Cashier'],
];

// Opening hours
$openingHours = [
    'Saturday'  => '6:00 AM – 10:00 PM',
    'Sunday'    => '6:00 AM – 10:00 PM',
    'Monday'    => '6:00 AM – 10:00 PM',
    'Tuesday'   => '6:00 AM – 10:00 PM',
    'Wednesday' => '6:00 AM – 10:00 PM',
    'Thursday'  => '6:00 AM – 11:00 PM',
    'Friday'    => '2:00 PM – 11:00 PM',
];
