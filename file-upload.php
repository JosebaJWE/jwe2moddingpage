<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir - "files";
    $target_file - $target_dir . basename((["file"]["name"]));

    if (move_uploaded_file($_FILES["tmp_name"], $target_file)) {
        echo "The file has been succesfully uploaded!";
    } else {
        echo "Something went wrong, the file wasn't uploaded correctly!";
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "I don't know what this means either.";

}
?>