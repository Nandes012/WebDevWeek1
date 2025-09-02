<?php
try {
    throw new Exception("Data format error");
} catch (Exception $e) {
    echo $e->getMessage();
}
