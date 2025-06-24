<?php
$token = "7533551574:AAGyHWJvXMc5Bo5BJCK2jQTm3mH3iniuxqk";
$chat_id = "@richgergert";

$tg = htmlspecialchars($_POST['telegram']);
$service = htmlspecialchars($_POST['service']);
$details = htmlspecialchars($_POST['details']);

$message = "📝 <b>Новая заявка в Artlink</b>%0A";
$message .= "👤 Пользователь: $tg%0A";
$message .= "💼 Услуга: $service%0A";
$message .= "🖋 Описание: $details";

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message&parse_mode=HTML";

$response = file_get_contents($url);

if ($response) {
    echo "Заявка отправлена!";
} else {
    echo "Ошибка при отправке.";
}
?>
