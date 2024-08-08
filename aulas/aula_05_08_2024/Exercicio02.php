<?php

echo '<br>$_SERVER: <br>';
echo '<pre>' . print_r($_SERVER, true) . '</pre>';

echo 'IP: ' . $_SERVER['HTTP_HOST'];
echo '<br>Nome do arquivo: ' . $_SERVER['SCRIPT_NAME'];
echo '<br>URL: ' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];