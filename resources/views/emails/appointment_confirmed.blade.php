<!DOCTYPE html>
<html>
<body>
    <h3>Appointment Confirmation</h3>

    <p>Dear {{ $appointment->name }},</p>

    <p>Your appointment has been confirmed. Here are the details:</p>

    <ul>
        <li><strong>Date:</strong> {{ $appointment->date }}</li>
        <li><strong>Time:</strong> {{ $appointment->time }}</li>
        <li><strong>Department:</strong> {{ $appointment->department }}</li>
        <li><strong>Doctor:</strong> {{ $appointment->doctor }}</li>
    </ul>

    <p>Thank you,<br>Poliklinik Alisya</p>
</body>
</html>
