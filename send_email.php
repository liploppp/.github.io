<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

$firstName = htmlspecialchars($input['firstName'] ?? '');
$lastName = htmlspecialchars($input['lastName'] ?? '');
$email = filter_var($input['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone = htmlspecialchars($input['phone'] ?? '');
$subject = htmlspecialchars($input['subject'] ?? '');
$message = htmlspecialchars($input['message'] ?? '');

if (!$firstName || !$lastName || !$email || !$subject || !$message) {
    echo json_encode(['success' => false, 'message' => 'Semua field wajib harus diisi']);
    exit;
}

$to = 'alifnurimam2007@gmail.com';
$emailSubject = "Pesan dari Portfolio: " . $subject;
$emailBody = "
Nama: $firstName $lastName
Email: $email
Telepon: " . ($phone ?: 'Tidak disediakan') . "

Pesan:
$message

---
Pesan ini dikirim dari form kontak portfolio website.
";

$headers = [
    'From: ' . $email,
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8'
];

if (mail($to, $emailSubject, $emailBody, implode("\r\n", $headers))) {
    echo json_encode(['success' => true, 'message' => 'Pesan berhasil dikirim!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal mengirim pesan. Silakan coba lagi.']);
}
?>