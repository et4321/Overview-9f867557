<!DOCTYPE html>


<?php
    $host = 'localhost';
    $user = 'root';
    $password = '123abc';
    $dbname = 'netland';
    $charset = 'utf8mb4';

    $dsn = 'mysql:host='. $host . ';dbname='. $dbname . ';charset=' . $charset;

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }

    $stmt = $pdo->query('SELECT title, rating FROM series');
        while ($row = $stmt->fetch()){
            echo $row['title'] . '<br>' . "\n";
            echo $row['rating'] . '<br>' . "\n";
        }
?>
    <html>
        <br>
        <br>
        <br>
    </html>

<?php
    $stmt = $pdo->query('SELECT title, duur FROM films');
        while ($row = $stmt->fetch()){
            echo $row['title'] . '<br>' . "\n";
            echo $row['duur'] . '<br>' . "\n";
             }
?>
