<?php

error_reporting(E_ALL);
ini_set("display_errors", "On");
date_default_timezone_set("UTC");
header("Content-Type: application/json");
session_start(); //used to keep track of when the file changes
$changed = false; //assume tha the file has not changed

$basename = basename($_SERVER["REQUEST_URI"], "?" . $_SERVER["QUERY_STRING"]);

$referrer = isset($_SERVER["HTTP_REFERER"])
    ? $_SERVER["HTTP_REFERER"]
    : "./css/styles.css";

$filename = isset($_REQUEST["file"]) ? trim($_REQUEST["file"]) : $referrer; //assume that the calling web-

if (@file_exists($filename)) {
    // deepcode ignore InsecureHash: <please specify a reason of ignoring this>
    $sha1_file = sha1_file($filename);
}
//let's get the sha1 file info
else {
    die(
        json_encode(
            "file [$filename] MISSING, filename does not exist. Check name and path ."
        )
    );
}

//now let's save the current file
if (isset($_SESSION[$filename])) {
    //do we have this session set?
    if ($sha1_file != $_SESSION[$filename]) {
        $changed = true;
    }
    $_SESSION[$filename] = $sha1_file; //update the session variable
} else {
    $_SESSION[$filename] = $sha1_file;
}

//store this information into the file array

$file_data = [
    "filename" => $filename,
    "hasChanged" => $changed,
    "filetime" => date("H:i:s m-d-Y", filemtime($filename)),
    "filesize" => filesize($filename),
    "basename" => $basename,
];

$result = json_encode($file_data);

echo $result;

?>
