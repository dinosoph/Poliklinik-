# POLIKLINIK ALISYA

# Poliklinik Alisya - Website for a family-focused healthcare clinic

## Group Information

**Group Name**: BladeBuilders
**Section**: 6

**Group Members** :
- SOFIA ALYSHA BINTI HAMZAH - 2318366
- NUR KHAIRYNA BINTI AHMAD KHAIRY - 2316996
- NURFARHAH SYAZWANI BINTI RAMZI - 2318666
- NURUL AISYAH BINTI MOHD RUSLLIM - 2312852

## Technical Implementation

** Technology Stack **

- Backend Framework: Laravel 12.x
- Frontend: Blade Templates with Bootstrap and Livewire
- Database: MySQL
- Authentication: Laravel Fortify and Jetstream
- API Authentication: Laravel Sanctum
- Image Storage: Laravel File Storage 
- Queue System: Database Queue
- Session Management: Database Session Driver
- Development Environment: XAMPP

** Database Design **

Database Schema Overview

Our database consists of **3 core tables** designed to manage administrator accounts, clinic staff, and appointment scheduling. Normal users can browse the website without registering, while only administrators need proper authetication for system access to the admin view.

#### Core Tables

- **users** – Stores administrator accounts for system management and access control  
- **staff** – Stores clinic staff information such as name, role, and contact details  
- **appointments** – Stores appointment booking records submitted by website visitors  

#### Database Relationships

- An administrator (user) can manage multiple staff records (One-to-Many)  
- A staff member can handle multiple appointments (One-to-Many)  
- Each appointment is associated with one staff member (Many-to-One)  

Normal website visitors are not stored in the database unless they submit an appointment.


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Poliklinik Alisya

# Poliklinik Alisya - Healthcare System

## Group Information

**Group Name**: BladeBuilders
**Section**: 6

**Group Members** :
- 
- 
-  
- NUR KHAIRYNA BINTI AHMAD KHAIRY - 2316996


## Project Overview

Introduction :
Poliklinik Alisya is a web-based healthcare platform designed to streamline the appointment booking process for patients and improve the management of healthcare services. The platform connects patients with healthcare providers, allowing them to book appointments, view doctor profiles, access healthcare services, and track their health progress. Clinic administrators can manage patient appointments and update healthcare services through a user-friendly dashboard.

## Project Objectives

- Primary Goal: Create a functional healthcare platform that connects patients and healthcare providers.
- Technical Goal: Implement the Laravel MVC architecture with full CRUD operations for clinic and appointment management.
- User Experience Goal: Provide an intuitive, responsive interface for both patients and healthcare providers.
- Business Goal: Improve the efficiency of appointment management and enhance patient engagement.

## Target Users

- Patients: Individuals seeking to book medical appointments, view clinic services, and manage their health records.
- Healthcare Providers (Doctors): Doctors and specialists who want to manage their appointments and interact with patients digitally.
- Administrators: Clinic staff who oversee the platform, manage appointments, and update clinic services.


## Features and Functionalities

** Patient Features**

- Homepage: The homepage provides an overview of the clinic, including a brief introduction to Poliklinik Alisya, highlights of key services, and easy access to other sections of the website.
- About Us: This page contains the background and history of Poliklinik Alisya and their official panels.
- Departments: The page lists various departments within the clinic (Cardiology, Neurology, Orthopedics, Oncology and Pediatrics). Patients can browse the different areas of medical expertise offered at the clinic.
- Services: Patients can view a list of available health services offered by the clinic, such as consultations, vaccinations, maternal health, and family medicine.
- Doctors: A page displaying doctor profiles, including their department and experiences. Patients can book appointment and choose the doctor.
- Testimonials: A page showcasing patient reviews and feedback about their experiences at Poliklinik Alisya. This helps build trust and credibility with new patients.
- Contact: This page provides the clinic’s contact information, including the clinic’s physical address, phone number, and email address. Patients can send messages via email to inquire about services, provide feedback, or make requests.
- Appointment Booking: Patients can book an appointment using an online form. The form captures essential details such as Patient’s name, Email, Phone Number, Birth Date and any notes or requests.


**Admin Features**

- Admin Dashboard: Overview of doctors and their department, can add and delete staff.
- Staff profile: Add, edit, or remove doctors and medical services offered at the clinic.
- Booking List: Approve, assign doctor, reschedule, or cancel patient appointments.

## Technical Implementation

** Technology Stack**

- Backend Framework: Laravel 10.x
- Frontend: Blade Templates with Bootstrap 5
- Database: MySQL 8.0
- Authentication: Laravel Breeze
- Image Storage: Laravel File Storage
- Development Environment: XAMPP

** Database Design**

Database Schema Overview
Our database consists of [X] main tables designed to handle users, restaurants, menus, orders, and related data:
Core Tables:

- users - Customer and restaurant owner accounts
- restaurants - Restaurant information and details
- menu_items - Food items with pricing and descriptions
- orders - Customer order records
- order_items - Individual items within each order
- categories - Food categories for menu organization

### Entity Relationship Diagram (ERD)

https://docs.google.com/document/d/1gQeg-at7jM69PBJz9OZSUhfYTOzc6jTW5IDaH_PtuKg/edit?usp=sharing

Key Relationships:

- Users can have multiple Orders (One-to-Many)
- Restaurants can have multiple Menu Items (One-to-Many)
- Orders can have multiple Order Items (One-to-Many)
- Menu Items belong to Categories (Many-to-One)

** Laravel Components Implementation**

- Routes (Web.php)
  
php
`// Authentication Routes`
Auth::routes();

`// Public Routes`
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');

`// Customer Protected Routes`
Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::resource('orders', OrderController::class);
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
});

`// Restaurant Owner Protected Routes`
Route::middleware(['auth', 'restaurant'])->group(function () {
    Route::get('/restaurant/dashboard', [RestaurantOwnerController::class, 'dashboard'])->name('restaurant.dashboard');
    Route::resource('menu-items', MenuItemController::class);
});

- Controllers
  
  *Main Controllers Implemented are below :*

  1. HomeController: Handles homepage display and restaurant listings
  2. RestaurantController: Manages restaurant information and menu display
  3. OrderController: Processes order creation, tracking, and management
  4. MenuItemController: Handles CRUD operations for menu items
  5. CartController: Manages shopping cart functionality
  6. CustomerController: Customer dashboard and profile management
  7. RestaurantOwnerController: Restaurant owner dashboard and analytics

- Models and Relationships
  
php// User Model
class User extends Authenticatable {
    public function orders() {
        return $this->hasMany(Order::class);
    }
    
    public function restaurant() {
        return $this->hasOne(Restaurant::class);
    }
}

// Restaurant Model  
class Restaurant extends Model {
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function menuItems() {
        return $this->hasMany(MenuItem::class);
    }
}

// Order Model
class Order extends Model {
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}

- Views and User Interface

  *Blade Templates Structure:*
  - layouts/app.blade.php - Main application layout
  - home.blade.php - Homepage with restaurant listings
  - restaurants/index.blade.php - Restaurant browsing page
  - restaurants/show.blade.php - Individual restaurant menu
  - orders/create.blade.php - Order placement form
  - dashboard/customer.blade.php - Customer dashboard
  - dashboard/restaurant.blade.php - Restaurant owner dashboard

   *Design Features:*
   - Responsive Design: Bootstrap 5 for mobile-first approach
   - Color Scheme: Modern orange and white theme representing food industry
   - Navigation: Intuitive menu structure with user role-based options
   - Interactive Elements: Dynamic cart updates, real-time order tracking


## User Authentication System

### ** Authentication Features**
- **Registration System**: Email validation, password confirmation, role selection
- **Login System**: Secure authentication with "Remember Me" option
- **Password Reset**: Email-based password recovery system
- **Role-Based Access**: Different dashboards for customers and restaurant owners as admin
- **Profile Management**: Users can update their information and preferences

### **Security Measures**
- Password encryption using Laravel's built-in hashing
- CSRF protection on all forms
- Input validation and sanitization
- Middleware protection for authenticated routes


## Installation and Setup Instructions
### Prerequisites :
- PHP >= 8.1
- Composer
- Node.js and NPM
- MySQL 8.0
- XAMPP 

### Step-by-Step Installation

1. Clone the Repository

bash/n
git clone https://github.com/[your-username]/QuickPlate.git/n
cd QuickPlate

2. Install Dependencies

bashcomposer install
npm install

3. Environment Configuration

bashcp .env.example .env
php artisan key:generate

4. Database Setup

bash# Configure database in .env file
php artisan migrate
php artisan db:seed

5. Start Development Server

bashphp artisan serve
npm run dev

## Testing and Quality Assurance

###  Functionality Testing

 - User registration and login system
 - Restaurant browsing and menu display
 - Shopping cart add/remove functionality
 - Order placement and confirmation
 - Order status tracking
 - Restaurant owner menu management
 - Admin user management
 - Responsive design across devices

### Browser Compatibility

-  Google Chrome (Latest)
-  Mozilla Firefox (Latest)
-  Safari (Latest)
-  Microsoft Edge (Latest)

### Performance Testing

- Page load times under 3 seconds
- Database queries optimized
- Image compression implemented
- Responsive design tested on multiple screen sizes


## Challenges Faced and Solutions
### Challenge 1: Complex Order Management
- Problem: Managing relationships between orders, order items, and menu items
- Solution: Implemented proper Eloquent relationships and created pivot tables for many-to-many relationships
### Challenge 2: Real-time Order Tracking
- Problem: Updating order status in real-time without page refresh
- Solution: Used AJAX calls to update order status dynamically
### Challenge 3: Role-based Authentication
- Problem: Different user types requiring different access levels
- Solution: Implemented middleware to check user roles and redirect appropriately

## Future Enhancements
### Phase 2 Features (Potential Improvements)
- **Real-time Notifications**: Push notifications for order updates
- **Payment Integration**: Stripe or PayPal payment processing
- **GPS Tracking** : Real-time delivery tracking with maps
- **Rating System** : Customer reviews and restaurant ratings
- **Advanced Analytics** : Detailed sales reports and customer insights
- **Mobile App** : Native mobile application for iOS and Android

### Scalability Considerations

- Database optimization for larger datasets
- Caching implementation for improved performance
- API development for mobile app integration
- Load balancing for high traffic scenarios


## Learning Outcomes
### Technical Skills Gained

- Laravel Framework: Understanding of MVC architecture and Eloquent ORM
- Database Design: Creating efficient database schemas and relationships
- Authentication: Implementing secure user authentication systems
- Frontend Development: Building responsive interfaces with Bootstrap
- Version Control: Using Git and GitHub for project management

### Soft Skills Developed

- **Team Collaboration** : Working effectively in a group environment
- **Project Management** : Planning and executing a complex web application
- **Problem Solving** : Debugging and resolving technical challenges
- **Documentation** : Creating comprehensive project documentation


## References

1. Laravel Documentation. (2024). Laravel 10.x Documentation. Retrieved from https://laravel.com/docs/10.x
2. Bootstrap Documentation. (2024). Bootstrap 5.3 Documentation. Retrieved from https://getbootstrap.com/docs/5.3/
3. MySQL Documentation. (2024). MySQL 8.0 Reference Manual. Retrieved from https://dev.mysql.com/doc/refman/8.0/en/
4. MDN Web Docs. (2024). Web Development Resources. Retrieved from https://developer.mozilla.org/
5. Stack Overflow. (2024). Programming Q&A Platform. Retrieved from https://stackoverflow.com/


## Conclusion
QuickPlate successfully demonstrates the implementation of a comprehensive food ordering system using Laravel framework. The project showcases proficiency in web development fundamentals including MVC architecture, database design, user authentication, and responsive web design.

### Key Achievements

- Successfully implemented all required Laravel components (Routes, Controllers, Views, Models)
- Created a functional food ordering system with user role management
- Developed a responsive, user-friendly interface
- Demonstrated understanding of database relationships and CRUD operations
- Applied security best practices for user authentication

### Project Impact
This project provides practical experience in building real-world web applications and demonstrates the ability to work collaboratively in a team environment. The skills gained through this project are directly applicable to professional web development scenarios.

- Project Completion Date: 11/6/2025
- Course: INFO 3305 Web Application Development


