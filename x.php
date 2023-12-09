<?
$iframe_url = "https://sustech-sus-chat-34b.hf.space/";

$Referer = @$_SERVER["HTTP_REFERER"];
$RefererHost = @explode(":", explode("/", explode("//", $Referer)[1])[0])[0];

if ($RefererHost == $_SERVER["SERVER_NAME"]) {
    header("Location: " . $iframe_url);
} else {
    echo "Invalid URL";
}
?>
