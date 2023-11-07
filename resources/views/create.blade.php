<form method="POST" action="/accounting">
    @csrf

    <div>
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" required>
    </div>

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>
    </div>

    <div>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required>
    </div>

    <div>
        <label for="children_count">Number of Children:</label>
        <input type="number" id="children_count" name="children_count" required>
    </div>

    <div>
        <label for="experience">Experience:</label>
        <input type="number" id="experience" name="experience" required>
    </div>

    <button type="submit">Create</button>
</form>
