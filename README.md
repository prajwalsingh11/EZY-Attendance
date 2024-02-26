![logo1](snap/logo.png)

# EZY Attendance: Biometric Attendance Tracking System

EZY Attendance is a cost-effective and user-friendly system for managing attendance in business and educational settings using biometric authentication.

## Description

EZY Attendance is a web-based application designed to streamline and simplify attendance tracking using biometric authentication. It offers a user-friendly interface and efficient functionalities, catering to the needs of both businesses (employee attendance) and educational institutions (student and staff attendance).

## Key Features

- **Biometric Authentication:** Utilizes fingerprint scanning for secure and reliable attendance verification.
- **Modular Design:** Comprises two distinct modules:
  - **Admin Module:**
    - Login for authorized personnel to manage attendance data.
    - View, export (Excel format), and email attendance records.
    - Add new employees or students to the system.
  - **Scanner Module:**
    - Captures fingerprint scans using a compatible scanner.
    - Transmits scanned fingerprint data to the database.
- **Cost-Effective:** Leverages readily available technologies and open-source frameworks to minimize cost.
- **Easy Interface:** Employs a user-friendly interface built with HTML5, CSS, JavaScript, and Bootstrap for a seamless experience.
- **Database Storage:** Utilizes MySQL for secure and efficient storage of attendance data.
- **Backend Framework:** Employs Python's Flask framework for robust backend development.

### Home
![home1](snap/Home.png)

### Admin Module
![Admins2](snap/Admin.png)

## Hardware Requirements

- Compatible fingerprint scanner

## Software Requirements

- Python 3.x ([Download Python](https://www.python.org/downloads/))
- pip (Python package installer)
- MySQL ([Download MySQL](https://dev.mysql.com/downloads/mysql/))
- Web server (e.g., Apache, Nginx,xampp)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/krrish9783/EZY-Attendance.git
   
   cd EZY-Attendance
   
   pip install -r requirements.txt
   
   python app.py
   
```bash

   Configure database settings in config.py.

   nano config.py

   Run the development server


This will start the application at http://localhost:5000 by default (port may vary).

Usage
Access the application in your web browser.
Login to the Admin Module using the appropriate credentials (refer to config.py or documentation for details).
Manage attendance data using the available functionalities.
Set up the Scanner Module to capture and transmit fingerprint scans to the database as per the scanner's specific instructions.

## Contributors

- [Kishnu Kumar](https://github.com/krrish9783)
- [Adity Kumar](https://github.com/Aditya)
- [Pranjwal](https://github.com/Pranjyalc)
- [Sujan Shetty](https://github.com/SUjanshetty)



## License

EZY Attendance is licensed under the MIT License. View License

