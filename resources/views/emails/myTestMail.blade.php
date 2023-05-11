<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.nombre_principal') }} | Email</title>
</head>

<body>
    <h3>
        Details:
    </h3>
    <p>
        @if ($body['date'])
            Code: {{ $body['code'] }} <br />
            Date: {{ $body['date'] }} <br />
            Time: {{ $body['time'] }} <br />
            Diners: {{ $body['quantity'] }} <br />
        @else
            {{ $body['message'] }}
        @endif
    </p>
    <br />
    Message sent from: <br />
    {{ $name }} - {{ $email }}
</body>

</html>
