<?php
require_once __DIR__ . '/config.php';
if (isMaintenanceEnabled()) { require __DIR__ . '/maintenance.php'; exit; }
?>
<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><title>My Website</title>
<style>body{margin:0;min-height:100vh;display:grid;place-items:center;background:#080808;color:#fff;font-family:Arial}.box{text-align:center;padding:50px;border:1px solid #292929;border-radius:25px;background:#111;width:min(90%,650px)}h1{font-size:55px}p{color:#aaa}</style>
</head><body><div class="box"><h1>Welcome</h1><p>Your website is online and available.</p></div></body></html>