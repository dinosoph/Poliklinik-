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


Our database consists of **3 core tables** designed to manage administrator accounts, clinic staff, and appointment scheduling. Normal users can browse the website without registering, while only administrators need proper authentication for system access to the admin view.


#### Core Tables


- **users** – Stores administrator accounts for system management and access control  
- **staff** – Stores clinic staff information such as name, role, and contact details  
- **appointments** – Stores appointment booking records submitted by website visitors  
Normal website visitors are not stored in the database unless they submit an appointment.


#### Entity Relationship Diagram (ERD)
https://docs.google.com/document/d/1i7vDCXEJQcmjFjJYZp21JR5Smy_8_pylnwfKFccKPkM/edit?usp=sharing


Key Relationships:
- An administrator (user) can approve and manage many Appointments (One-to-Many)  
- A staff member is assigned to multiple appointments (One-to-Many)  
- Each appointment is associated with one staff member (Many-to-One) 
- Each appointment is approved by one admin(user) member (Many-to-One) 


**Laravel Components Implementation**

- Routes (Web.php)

Php
`// Public Clinic Routes`
Route::get('/', function () {
    return view('mainpage');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/departments', function () {
    return view('departments');
});


Route::get('/departments-details', function () {
    return view('department-details');
})->name('departments.details');




Route::get('/services', function () {
    return view('services');
});


Route::get('/services-details', function () {
    return view('service-details');
})->name('services.details');


Route::get('/doctors', function () {
    return view('doctors');
})->name('profile.doctor');


Route::get('/testimonials', function () {
    return view('testimonials');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/appointment', function () {
    return view('appointment');
});


Route::post('/appointment/store',
[AppointmentController::class, 'store'])->name('appointment.store');


Route::get('/about', function () {
    return view('about');  
});


`// Authentication and Clinic Admin Routes`
Route::prefix('admin')->group(function () {


    // Admin login (outside auth middleware)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);


    // Admin logout
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('admin.login');
    })->name('admin.logout');


    // Protected admin routes
    Route::middleware('auth')->group(function () {


  	       // Dashboard
        Route::get('/staff', [StaffController::class,   'dashboard'])->name('staff.dashboard');
        Route::get('/staff/index', [StaffController::class, 'index'])->name('staff.index');
        Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
        Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
        Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
        Route::patch('/staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
        Route::delete('/staff/delete/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
        Route::get('/admin/staff/next-appointment', [StaffController::class, 'nextAppointmentJson'])->name('staff.nextAppointmentJson');


 // Bookings
        Route::get('/bookings', [AppointmentController::class, 'index'])->name('bookings.index');
        Route::get('/bookings/{id}/assign', [AppointmentController::class, 'edit'])->name('bookings.assign');
        Route::put('/bookings/{id}', [AppointmentController::class, 'update'])->name('bookings.update');
        Route::get('/bookings/{id}/view', [AppointmentController::class, 'show'])->name('bookings.show');
        Route::get('/email-log', [EmailLogController::class, 'index'])->middleware('auth');
    });
});


- Controller
Main Controller Implemented are below:
AuthController:Handle Admin login page
AppointmentController:
Store appointment booking from patient
Display Appointment Booking List
Update Booking Informations (Time, Department, Doctor)
Send Appointment Confirmation Email to patient
View Updated Appointment Information
StaffController:
Fetch all Staff to display on admin dashboard
Display Next Appointment Information on admin dashboard
Create Staff Form
Add New Form
Update Staff and Delete 


- Models and Relationships
//user model
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}


//user appointment
class Appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'department',
        'date',
        'time',
        'doctor',
        'message',
    ];
}


//user staff
class Staff extends Model
{
    use HasFactory;
     protected $fillable = [
        'staff_id',
        'role',
        'name',
        'department',
    ];
       protected $table = 'staff';
}


- Views and User Interface
Blade Templates Structure:


Master Layout
Clinic_layout.blade.php
- layout template of header and footer for Clinic Website
Admin_layout.blade.php 
- layout template of header and footer for Admin System




Clinic Website
Mainpage.blade.php -clinic web landing page
about.blade.php - clinic general/background information
department.blade.php - list of clinic’s department
department-details.blade.php - details of each department
services.blade.php - list of services offered by the clinic
Services-details.blade.php - details of each services
doctors.blade.php - list of doctors and medical assistance
Contact.blade.php - clinic’s contact and location information
Testimonials.blade.php - testimonials from past patients
Appointment.blade.php - appointment booking form page


Admin System
Login.blade.php
Staff:
Dashboard.blade.php - admin dashboard displays the next upcoming doctor appointment and doctors card profile
Index.blade.php - List of staffs in the clinic with edit and delete function in each row
Edit.blade.php - Edit staff form
Create.blade.php - Add Staff form


Bookings:
Index.blade.php - List of patient’s appointment booked
Details.blade.php - Edit Appointment form by assigning time of the appointment, which doctor and department assigned for the patient
Show.blade.php - View Booking approved




Design Features:
- Responsive Design: Bootstrap 5 for mobile-first approach for the public clinic website
- Color Scheme: Modern teal blue and white theme representing health care theme
- Navigation: 
	- Clinic Website can be viewed by public (no login)
	- Admin System needs role-based authentication to log in
- Interactive Elements: 
Clinic Website : Appointment Booking, Send Email Message
Admin System : Approve Booking (Assign time and doctor), Send Email Confirmation, Edit Staff Details, Add New Staff 


## User Authentication System
### ** Authentication Features**
- **Login System**: Only authorised admin can log in the admin system


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
git clone https://github.com/[dinosoph]/QuickPlate.git/n
cd QuickPlate


2. Install Dependencies
Bash composer install
npm install


3. Environment Configuration
Bash cp .env.example .env
php artisan key:generate


4. Database Setup
bash# Configure database in .env file
php artisan migrate
php artisan db:seed


5. Start Development Server
Bash php artisan serve
npm run dev


##Testing and Quality Assurance


### Functionality Testing
- Homepage navigation and content display
- Appointment booking form submission and database storage
- Validation of required appointment fields (name, email, phone number, date)
- Successful retrieval of appointment records in the admin booking list
- Dynamic service-detail and department-detail page navigation using route parameters
- "Learn More" service and department links routing to correct service-detail and department-detail content
- Contact form redirection to gmail with pre-filled message details
- Navigation bar active state highlighting based on current oage
- Route accessibility testing for public and admin pages
- Admin View authentication (login and logout)
- Admin dashboard access and navigation
- Staff list management (add, edit, delete)
- Appointment booking management (view, assign doctor and department)


### Browser Compatibility
- Google Chrome (Latest)
- Mozilla Firefox (Latest)
- Microsoft Edge (Latest)


### Performance Testing
- Appointment booking form submission tested with multiple entries
- Database operations tested for accuracy and reliability
- Responsive layout testing on desktop, tablet and mobile screen sizes
- Navigation performance tested to ensure smooth transitions between pages
## Challenges Faced and Solutions


### Challenge 1: Appointment Booking Data Management
- Problem: Ensuring that appointment data submitted by patients was accurately stored and accessible for admin management.
- Solution: Implemented Laravel controllers, models, and database migrations to handle appointment data securely and reliably.
### Challenge 2: Admin Access and Route Protection
- Problem: Protecting admin routes while ensuring proper redirection for unauthenticated access
- Solution: Applied authentication middleware and adjusted route handling to manage admin access appropriately.


## Future enhancements
### Phase 2 Features (Potential Improvement)
**Patient Account System** - Allow patients to create accounts to view medical history, reschedule bookings, and update personal details.

**Doctor Availability Calendar** - Real-time doctor schedule display with time-slot selection for appointments.

**Role-Based Access Control** - Separate accessibility for admin, doctors, and other clinic staff.
**Advanced Search and Filtering** - Search appointments by date, department, doctor, or patient name for admin.
**Automated Email & SMS Notifications** - Appointment reminders(patients), approval notifications(admin), and reschedule alerts(doctors) can be sent automatically.
### Scalability Considerations
Database indexing and optimization to handle increasing appointment and patient records
Caching frequently accessed data, such as doctor and department information, for faster performance
API development to support future mobile application integration
Load balancing to ensure system stability during high traffic usage


## Learning Outcomes
### Technical Skills Gained
Here are the technical skills gained from this project:
Environment Configuration: Setting up local development servers using XAMPP and installing Laravel through Composer.
Blade Templating: Building modular user interfaces by splitting HTML into master layouts and child views using @yield and @extends.
MVC Architecture: Developing application logic by mapping web routes to specific Controller actions.
Database Management: Designing table schemas through migrations and utilizing Eloquent Models for data interaction.
CRUD Development: Creating functional forms and "store" methods to persistently save user-submitted data.
Tinker Proficiency: Performing direct database operations like inserting, counting, and deleting records via the command-line interface.
### Soft Skills Developed
- **Problem Solving** : Identifying, debugging, and resolving technical and logical issues
- **Documentation** :Preparing clear and structured technical and project documentation
- **Team Collaboration** : Communicating and coordinating effectively with group members throughout the project
- **Project Management** : Organizing tasks, setting timelines, and ensuring project milestones were achieved


## References
1. MediTrust – Bootstrap Template for Hospitals, Clinics, and Healthcare Services 2025 | BootstrapMade. (2025). Bootstrapmade.com. https://bootstrapmade.com/meditrust-bootstrap-hospital-website-template/
2. Sharma, A. (2025). Doctor Appointment Dasboard. Tableau.com. https://public.tableau.com/views/DoctorAppointmentDashboard/LANDINGPAGE?:language=en-US&:sid=&:redirect=auth&:display_count=n&:origin=viz_share_link
## Conclusion
### Key Achievements
Development of the Centralized "Poliklinik Alisya" Admin System The project successfully delivered a comprehensive medical management dashboard that provides real-time visibility into clinic operations. Key features include a visual staff profile grid for immediate identification of medical personnel, a detailed staff directory with full administrative controls (edit and delete), and a patient booking tracking system that allows administrators to monitor appointment statuses and assign specific doctors to incoming patient requests.


Mastery of Full-Stack Integration and Modular Templating A major technical milestone was the successful transition from static third-party HTML templates, such as MediTrust, into a dynamic Laravel environment. This achievement involved utilizing the Blade engine to architect a scalable UI by splitting standard files into a Master Layout and child views using @extends, @section, and @yield directives. This modularity ensures that global changes to the header, sidebar, or footer can be managed from a single location.


### Project Impact
This project demonstrates the development of a full-stack clinic management system that integrates the patient's front end with administrative functionality. Through systematic testing and quality assurance, the system ensures reliability, usability, and maintainability across multiple users and devices. The project also highlights effective team collaboration and practical application of laravel in a real-world web development context.

   - Project Completion Date: 16/1/2025
Course: INFO 3305 Web Application Development



## Security Vulnerabilities


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.


## License


The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).





