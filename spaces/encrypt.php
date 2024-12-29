<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // $data = json_decode(file_get_contents("php://input"), true);
    $data = $_POST;
    if (isset($data["value"])) {
        
        $inputValue = $data["value"];
        $md5Hash = md5($inputValue .= "space!@#$%^&*()_+");
        echo $md5Hash;
    } else {
        echo "Authorization Fail!";
}
}else{
    echo "Authorization Fail!";
}
?>