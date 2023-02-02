<html>
<head>
    <title>Calendar</title>
</head>
<body>
    <h1>Calendar</h1>
    <form method="post" action="{{ route('calendar.store') }}">
        @csrf
        <input method="post" type="date" name="selected_date">
        <input method="post" type="text" name="appointment">
        <button type="submit">Submit</button>
    </form>

</body>
</html>

