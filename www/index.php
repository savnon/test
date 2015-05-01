<?php
$servername = "localhost";
$username = "root";
$password = "dcam09@CTC";
$dbname = "report_db";

// 创建连接
$con = new mysqli($servername, $username, $password, $dbname);

if (!$con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';





mysqli_query($con,"INSERT INTO detail_result (caseName,testResult,timecost,detailInfo,comments,checked_by)
VALUES ('Case1','Pass','12.3','ErrorMessage','checked','wanpe02')");




$sql = "SELECT caseName, testResult, timecost, detailInfo,comments,checked_by FROM detail_result";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> Result: ". $row["caseName"].$row["testResult"]. " " . $row["timecost"] . " " . $row["detailInfo"] . " " . $row["comments"] . " " . $row["checked_by"];
    }
} else {
    echo "0 results";
}


?>
