<?php 
echo date("Y-m-d H:i:s A");

date_default_timezone_set('Asia/Kolkata');
if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

echo date("Y-m-d H:i:s A");