<?php include 'reusables/connect.php'; ?>
<?php include 'reusables/header.php'; ?>
<body>
    <div class="container">
        <h1>Add Fire Station</h1>
        <form method="POST" action="addStation.php" class="add-station-form">
            <div class="mb-3">
                <label for="stationName" class="form-label">Station Name</label>
                <input type="text" class="form-control" id="stationName" name="stationName" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="municipality" class="form-label">Municipality</label>
                <input type="text" class="form-control" id="municipality" name="municipality" required>
            </div>
            <div class="mb-3">
                <label for="yearBuilt" class="form-label">Year Built</label>
                <input type="number" class="form-control" id="yearBuilt" name="yearBuilt" required>
            </div>
            <div class="mb-3">
                <label for="ward" class="form-label">Ward</label>
                <input type="text" class="form-control" id="ward" name="ward" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <button type="submit" class="btn" name="addStation">Add Station</button>
        </form>
    </div>
</body>    
<?php include('reusables/footer.php'); ?>

