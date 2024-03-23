<?php
$files = glob('modules' . '/*.php');

foreach ($files as $file) {
    require $file;
}