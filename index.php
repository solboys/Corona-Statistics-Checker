<?php

# Author: Hafiz Tahir
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(isset($_GET['country']) && !empty($_GET['country'])) {