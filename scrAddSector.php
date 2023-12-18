<!DOCTYPE html>
<html>
  <head>
    <title>Office Control System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <div class="container">
      <h2>Office Control System</h2>
      <!-- Labels and Text Fields -->
      <p>
        <label class="label" for="txtBukaCode">Buka Code:</label>
        <input type="text" id="txtBukaCode">
      </p>
      <p>
        <label class="label" for="txtSeizou">Seizou:</label>
        <input type="text" id="txtSeizou">
      </p>
      <p>
        <label class="label" for="txtSector">Sector:</label>
        <input type="text" id="txtSector">
      </p>
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
