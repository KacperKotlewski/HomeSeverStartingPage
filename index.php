<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chopchu Home Server</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Index file/style/style.css">
</head>
<body>
    <div id="main">
        <h2>Hello!</h2>
        <?php
            echo '<div id="buttons">';
                $array = array('Mantis', 'Google', 'Youtube');
                foreach ($array as $value){
                    
                    $link = "";
                    switch ($value) {
                        case 'Mantis':
                            $link = "http://chopchuhomeserver.asuscomm.com/mantis";
                            break;

                        case 'Google':
                            $link = "https://www.google.com/";
                            break;
                            break;

                        case 'Youtube':
                            $link = "https://www.youtube.com/";
                            break;
                        
                        default:
                            $link = "http://chopchuhomeserver.asuscomm.com/";
                            break;
                    }

                    echo '<a class="button" id="'.$value.'" href="'.$link.'">';                        
                        echo '<div class="svg"><img src="Index file/src/'.$value.'.svg"></div>';
                        echo '<span class="text">'.$value."</span>";
                    echo '</a>';
                }
                echo '</div>';
        ?>
    </div>



<div id="links">
    <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</div>
</body>
</html>