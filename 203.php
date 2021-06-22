<?php
var_dump(http_response_code(203));
var_dump(http_response_code());
header("HTTP/1.1 203 Non-Authoritative Information");
exit();
?>
