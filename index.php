<?php
// PHP Script to verify environment
echo "✅ PHP Engine is running successfully on OpenShift Pod!";

/* FUTURE DEVOPS NOTE:
   When you connect a MySQL Operator, you will use:
   $host = getenv('DB_HOST');
   $user = getenv('DB_USER');
   $pass = getenv('DB_PASSWORD');
*/
?>