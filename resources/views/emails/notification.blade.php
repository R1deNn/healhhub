<!DOCTYPE html>
<html>
<head>
    <title>HealthHub</title>
</head>
<body>
    <h1>Здравствуйте, {{ $name }}</h1>
    <p>К вам записан пациент: {{ $patient_surname }} {{ $patient_name }}</p>
    <p>На: {{ $date }} в {{ $time }}</p>
</body>
</html>