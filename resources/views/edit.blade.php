<!DOCTYPE html>
<html>
<head>
    <title>Редагування рахунку</title>
</head>
<body>

<h1>Редагування рахунку</h1>

<form action="/accounting/{{ $account->id }}" method="POST">
    @method('PUT')
    @csrf

    <label for="code">Код:</label><br>
    <input type="text" id="code" name="code" value="{{ $account->code }}"><br><br>

    <label for="name">Ім'я:</label><br>
    <input type="text" id="name" name="name" value="{{ $account->name }}"><br><br>

    <label for="position">Посада:</label><br>
    <input type="text" id="position" name="position" value="{{ $account->position }}"><br><br>

    <label for="salary">Зарплата:</label><br>
    <input type="text" id="salary" name="salary" value="{{ $account->salary }}"><br><br>

    <label for="children_count">Кількість дітей:</label><br>
    <input type="text" id="children_count" name="children_count" value="{{ $account->children_count }}"><br><br>

    <label for="experience">Досвід:</label><br>
    <input type="text" id="experience" name="experience" value="{{ $account->experience }}"><br><br>

    <button type="submit">Зберегти зміни</button>
</form>

</body>
</html>
