<?php
const ADMIN_USERNAME = 'admin';
const ADMIN_PASSWORD = 'CHANGE_THIS_PASSWORD';
const STATUS_FILE = __DIR__ . '/maintenance_status.txt';

function isMaintenanceEnabled(): bool {
    return file_exists(STATUS_FILE) && trim((string)file_get_contents(STATUS_FILE)) === '1';
}
function setMaintenance(bool $enabled): void {
    file_put_contents(STATUS_FILE, $enabled ? '1' : '0', LOCK_EX);
}
