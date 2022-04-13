<?php 

$landoInfo = json_decode(getenv('LANDO_INFO'), true);

$landoWebroot = getenv('LANDO_WEBROOT');

$url = $landoInfo['appserver']['urls'][0];

$dbServer = $landoInfo['database']['internal_connection']['host'];

$dbName = $landoInfo['database']['creds']['database'];
$dbUser = $landoInfo['database']['creds']['user'];
$dbPassword = $landoInfo['database']['creds']['password'];

$cmd = [
    "cd $landoWebroot;",
    "wp core download"
];

$installScript = implode(" ", $cmd);
shell_exec($installScript);

$cmd = [
    "cd $landoWebroot;",
    "wp core config",
    "--dbprefix=wp_",
    "--dbhost=$dbServer",
    "--dbname=$dbName",
    "--dbuser=$dbUser",
    "--dbpass=$dbPassword"
];
$installScript = implode(" ", $cmd);
shell_exec($installScript);

$cmd = [
    "cd $landoWebroot;",
    "wp core install",
    "--url='$url'",
    "--title='mon deuxieme wordpress'",
    "--admin_user='admin'",
    "--admin_password='admin'",
    "--admin_email='kevin.bardou@lidem.education'",
];
$installScript = implode(" ", $cmd);
shell_exec($installScript);
?>
