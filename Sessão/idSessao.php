<?php

require_once("config.php");

echo session_id();

session_regenerate_id();

echo session_id();