
$mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$result = $mysqli->query("SELECT * FROM schools");
while($row = $result->fetch_assoc()) {
    echo $row["name"] . "\n";
}
