<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";


if (!empty($_POST['form1'])) {
    //do something here;

    $ques1 = $_POST["o1"];
$ans1 =  $_POST["ans1"];


$sql = "INSERT INTO qna (ques, ans)
VALUES ('$ques1','$ans1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

 }



 if (!empty($_POST['form2'])) {
    //do something here;
    
    $ques2 = $_POST["o2"];
$ans2 =  $_POST["ans2"];


$sql = "INSERT INTO qna (ques, ans)
VALUES ('$ques2','$ans2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

 }


 if (!empty($_POST['form3'])) {
    //do something here;
    
    $ques3 = $_POST["o3"];
$ans3 =  $_POST["ans3"];


$sql = "INSERT INTO qna (ques, ans)
VALUES ('$ques3','$ans3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

 }

 if (!empty($_POST['form4'])) {
    //do something here;
    
    $ques4 = $_POST["o4"];
$ans4 =  $_POST["ans4"];


$sql = "INSERT INTO qna (ques, ans)
VALUES ('$ques4','$ans4')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

 }

 

 if (!empty($_POST['form5'])) {
    //do something here;
    
    $ques5 = $_POST["o5"];
$ans5 =  $_POST["ans5"];


$sql = "INSERT INTO qna (ques, ans)
VALUES ('$ques5','$ans5')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

 }




    $sql = "SELECT * FROM qna";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "question: " . $row["ques"]. " - Answer: " . $row["ans"]. "<br>";
        }
    } else {
        echo "0 results";
    }
$conn->close();


 

?>