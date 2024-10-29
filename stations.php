<?php 

include('reusables/header.php'); 
?>

<div class="container">
    <h1>Firefighter Resources</h1>    
    <div class="mb-3">
        <a href="addStation.php" class="btn">Add Station</a>
        
    </div>
    <div class="station-cards">
        <?php 
        
        require('reusables/connect.php');

       
        $query = 'SELECT * FROM fire_station_locations';
        $stations = mysqli_query($connect, $query);

        
        if ($stations && mysqli_num_rows($stations) > 0) {
           
            foreach($stations as $station) {
                echo '<div class="station-card">';
                echo '<div class="station-title">' . htmlspecialchars($station['STATION']) . '</div>';
                echo '<div class="station-info"><strong>Address:</strong> ' . htmlspecialchars($station['ADDRESS']) . ', ' . htmlspecialchars($station['MUNICIPALITY_NAME']) . '</div>';
                echo '<div class="station-info"><strong>Year Built:</strong> ' . htmlspecialchars($station['YEAR_BUILD']) . '</div>';
                echo '<div class="station-info"><strong>Ward:</strong> ' . htmlspecialchars($station['WARD_NAME']) . '</div>';
                echo '<span class="badge">Type: ' . htmlspecialchars($station['TYPE_DESC']) . '</span>';
                echo '<a href="deleteStation.php?id=' . htmlspecialchars($station['_id']) . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this station?\');">Delete</a>';
                echo '</div>';
            }
        } else {
            
            echo '<p>No fire stations found.</p>';
        }

        
        mysqli_close($connect);
        ?>
    </div>
</div>

</body>
<?php include('reusables/footer.php'); ?>
</html>

