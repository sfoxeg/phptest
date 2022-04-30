<?php

defined('F_ACCESS') || die ('Access denied');

require_once 'models/User.php';
require 'core/config.php';


class Auction
{
    # Просто контейнеры для экземпляров
    public $dbc;
    public $user;

    function __construct(){

        # Инит юзверя, ибо нехуй
        $this->user = new User();

        # Нам нужна треск.. БД! Запилим коннектор
        $this->dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die (print(mysqli_connect_errno().' - '.mysqli_connect_error()));
    }
}
