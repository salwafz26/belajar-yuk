<?php
header('Content-Type: application/json; charset=utf-8');

function response($status, $message) {
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response('error', 'Metode tidak didukung.');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$honeypot = trim($_POST['website'] ?? '');

if ($honeypot !== '') {
    response('error', 'Spam terdeteksi.');
}

if ($name === '' || $email === '' || $message === '') {
    response('error', 'Nama, email, dan pesan wajib diisi.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    response('error', 'Format email tidak valid.');
}

$logData = [
    'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
    'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'subject' => htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'),
    'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
    'created_at' => date('Y-m-d H:i:s'),
];

$storageFile = __DIR__ . '/../data/messages.json';
$messages = [];
if (file_exists($storageFile)) {
    $json = file_get_contents($storageFile);
    $messages = json_decode($json, true) ?: [];
}
$messages[] = $logData;
file_put_contents($storageFile, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Jika hosting mendukung mail(), dapat diaktifkan di sini.
// $to = 'halo@portofolio.dev';
// $subjectMail = 'Pesan Baru dari Portofolio: ' . ($subject ?: 'Tanpa subjek');
// $body = "Nama: {$name}\nEmail: {$email}\nSubjek: {$subject}\n\nPesan:\n{$message}";
// mail($to, $subjectMail, $body);

response('success', 'Pesan berhasil dikirim. Terima kasih telah menghubungi.');
