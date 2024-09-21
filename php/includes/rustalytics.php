<?php
$api_key = '<your-rustalytics-api-key>';
$rustalytics_script = "<script>!function(t,e,s,a,i,n,c,p){t[a]=t[a]||function(){(t[a].q=t[a].q||[]).push(arguments)},n=e.createElement(s),c=e.getElementsByTagName(s)[0],n.async=1,n.src=i,c.parentNode.insertBefore(n,c)}(window,document,\"script\",\"rustalytics\",\"https://rustalytics.dev/rustalytics.js\"),rustalytics(\"init\",{apiToken:\"$api_key\"});</script>";

function track_event($event_name)
{
    echo "<script>rustalytics(\"$event_name\");</script>";
}
