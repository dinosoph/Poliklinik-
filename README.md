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


