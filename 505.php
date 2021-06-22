<?php
var_dump(http_response_code(505));
var_dump(http_response_code());
header("HTTP/1.0 505 HTTP Version not supported");
?>