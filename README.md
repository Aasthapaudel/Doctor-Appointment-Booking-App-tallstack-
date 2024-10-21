
# Doctor Appointment Booking App (Tall Stack)

This is a web application built using the Tall Stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) that allows patients to book appointments with doctors. The app streamlines the entire process of appointment scheduling, approval, lab test prescription, and medication tracking.

## Features

- **Patient Booking**: Patients can book appointments with their desired doctor.
- **Doctor Approval**: Doctors can approve or reject appointment requests.
- **Lab Tests**: Doctors can prescribe lab tests for patients, which the patients can view and complete.
- **Medication Tracking**: Doctors can prescribe medications, and the pharmacy can manage the medication collection process.
- **Notification System**: Real-time notifications for patients, doctors, and pharmacies regarding appointments, tests, and medications.
- **Admin Dashboard**: Admin can manage users, doctors, appointments, and monitor system-wide activities.

## Technologies Used

- **Laravel**: PHP web framework for server-side logic.
- **Livewire**: A full-stack framework for Laravel to handle front-end interactions without leaving PHP.
- **Tailwind CSS**: Utility-first CSS framework for styling.
- **Alpine.js**: Minimal JavaScript framework for simple interactivity.
  
## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Aasthapaudel/Doctor-Appointment-Booking-App-tallstack.git
    cd Doctor-Appointment-Booking-App-tallstack
    ```

2. **Install dependencies:**

    - Install PHP dependencies via Composer:

      ```bash
      composer install
      ```

    - Install Node dependencies via npm:

      ```bash
      npm install
      ```

3. **Set up environment variables:**

    Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other required configurations.

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run database migrations and seeders:**

    ```bash
    php artisan migrate --seed
    ```

6. **Run the application:**

    - Start the Laravel development server:

      ```bash
      php artisan serve
      ```

    - Start the npm watcher for assets:

      ```bash
      npm run dev
      ```

7. **Access the application:**

    Navigate to `http://localhost:8000` in your web browser.

## Usage

- **Patient View**: Patients can log in and book appointments with doctors.
- **Doctor View**: Doctors can approve appointments and prescribe lab tests and medications.
- **Admin View**: Admin can monitor all activities, manage doctors, patients, and appointments.
- **Pharmacy View**: Pharmacies can manage medication requests and inventory.

<!-- ## Screenshots

_(Add screenshots of the key views of the app, like booking page, admin dashboard, doctor approval page, etc.)_ -->

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## License

This project is open-source and available under the [MIT License](LICENSE).
