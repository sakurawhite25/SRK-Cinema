<?php
include_once('include/db.php');

$query = "SELECT * FROM `schedule` 
INNER JOIN `movie` ON schedule.movie_id = movie.movie_id
INNER JOIN `rooms` ON schedule.room_id = rooms.room_id";
$result = mysqli_query($conn, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $movie_id = $_POST['movie_id'];
    $start_time = $_POST['start_time'];
    $schedule_date = $_POST['schedule_date'];
    $room_id = $_POST['room_id'];

    $insert_schedule = "INSERT INTO `schedule` (movie_id, room_id, start_time, schedule_date) 
              VALUES ('$movie_id', '$room_id', '$start_time PM', '$schedule_date')";

    $result02 = mysqli_query($conn, $insert_schedule);

    if ($result02) {
        echo "Schedule successfully added!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrange Schedule Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #000;
            background-color: #fff;
            padding: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select,
        input[type="time"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="time"]:focus {
            outline: none;
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* New styles for schedule box */
        .schedule-box {
            padding: 15px;
            border-radius: 8px;
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
<form action="arrange_schedule.php" method="post">
    <h1>Schedule Details</h1>
    <div>
        <label for="movie_name">Movie Name:</label>
        <select name="movie_id" id="movie_id">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <option value="<?= $row['movie_id'] ?>"><?= $row['movie_name'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <label for="start_time">Duration: </label>
        <input type="time" name="start_time">
    </div>
    <div>
        <label for="schedule_date">Date: </label>
        <input type="date" name="schedule_date">
    </div>
    <div>
        <label for="room_name">Room: </label>
        <select name="room_id" id="room_id">
            <?php mysqli_data_seek($result, 0); // Reset the result pointer ?>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <option value="<?= $row['room_id'] ?>"><?= $row['room_name'] ?></option>
            <?php } ?>
        </select>
    </div>
    <!-- Hidden input for movie_id -->
    <input type="hidden" name="movie_id" value="<?= $row['movie_id'] ?>">
    <div>
        <button type="submit" name="submit">Submit</button>
    </div>
</form>

    <table>
        <thead>
            <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <!-- Add more rows for other time slots if needed -->
                <tr>
                    <td>
                        <p>10:00AM-12:00PM</p>
                    </td>
                    <td class="schedule-box">
                        <p><?= $row['movie_name'] ?></p>
                        <p><?= $row['room_name'] ?></p>
                        <p><?= $row['schedule_date'] ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>12:00PM-2:00PM</p>
                    </td>
                    <td class="schedule-box">
                        <p><?= $row['movie_name'] ?></p>
                        <p><?= $row['room_name'] ?></p>
                        <p><?= $row['schedule_date'] ?></p>
                    </td>
                </tr>
                <!-- Add more rows for other time slots if needed -->
            <?php } ?>
        </tbody>
    </table>
</body>

</html>

