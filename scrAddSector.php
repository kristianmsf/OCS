<!DOCTYPE html>
<html>
<head>
    <title>PHP Design</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>PHP Design</h2>

        <!-- Labels and Text Fields -->
        <label class="label" for="txtBukaCode">Buka Code:</label>
        <input type="text" id="txtBukaCode">

        <label class="label" for="txtSeizou">Seizou:</label>
        <input type="text" id="txtSeizou">

        <label class="label" for="txtSector">Sector:</label>
        <input type="text" id="txtSector">

        <!-- Data Grid View (Table) -->
        <h3>Data Grid View</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <!-- Add other columns here -->
                </tr>
            </thead>
            <tbody>
                <!-- Data rows will be populated here -->
            </tbody>
        </table>

        <!-- Button Menu -->
        <div class="button-container">
            <button class="button" onclick="addItem()">Add</button>
            <button class="button" onclick="updateItem()">Update</button>
            <button class="button" onclick="deleteItem()">Delete</button>
            <button class="button" onclick="clearFields()">Clear</button>
            <button class="button" onclick="exitApp()">Exit</button>
        </div>
    </div>

    <!-- JavaScript (Optional for button functionalities) -->
    <script src="scripts.js"></script>
</body>
</html>