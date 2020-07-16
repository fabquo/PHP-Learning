<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array 3</title>
</head>
<body>
    
    <?php

        $web_development = array('frontend' => [],'backend' => []);

        array_push($web_development['frontend'],'xhtml');
        array_push($web_development['backend'],'Ruby on Rails');
        array_push($web_development['frontend'],'CSS');
        array_push($web_development['frontend'],'Flash');
        array_push($web_development['frontend'],'Javascript');

        echo '<pre>';
        print_r($web_development);
        echo '</pre>';

        // print_r($web_development['frontend']);

        $xhtmlKey = array_search('xhtml', $web_development['frontend']);

        $web_development['frontend'][$xhtmlKey] = 'HTML';

        $flashKey = array_search('Flash', $web_development['frontend']);
        unset($web_development['frontend'][$flashKey]);
        
        print_r($web_development['frontend']);


    ?>

</body>
</html>