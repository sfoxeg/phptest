<?php

define('F_ACCESS', true);

header('Content-type:text/html;charset=utf-8');

session_start();

require_once 'models/Auction.php';

$auc = new Auction();

$res = $auc->dbc->query("SELECT * FROM temp WHERE 1=0;");
print_r($res);
#print($user->type);

