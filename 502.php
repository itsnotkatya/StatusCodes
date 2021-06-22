<?php
var_dump(http_response_code(502));
var_dump(http_response_code());
header("HTTP/1.1 502 Bad Gateway");
exit();
?>
