<?php
require "functions.php";
require "router.php";
require "config.php";
require "Database.php";

require routeToController($_SERVER["REQUEST_URI"]);
