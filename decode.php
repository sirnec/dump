<!DOCTYPE html>
<html>
    <head>
        <title>Link decode</title>
        <meta charset="utf-8">
        <style>
            html, body, .container {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html {
                min-width: 600px;
            }
            
            .container:after {
                display: block;
                clear: both;
                content: '';
            }
            
            .half {
                width: 49%;
                height: 100%;
                float: left;
                box-sizing: border-box;
                margin-right: 2%;
            }
            
            .half:last-child {
                margin-right: 0;
            }
            
            form {
                width: 100%;
                height: 100%;
            }
            
            textarea {
                width: 100%;
                height: 85%;
                margin-bottom: 5%;
                box-sizing: border-box;
            }
            
            button {
                width: 100%;
                height: 10%;
                box-sizing: border-box;
            }
            
            .match {
                margin-bottom: 5px;
            }
            
            .match-header {
                position: relative;
                padding: 5px;
                background-color: lightgray;
                cursor: pointer;
                -webkit-touch-callout: none;
                  -webkit-user-select: none;
                   -khtml-user-select: none;
                     -moz-user-select: none;
                      -ms-user-select: none;
                          user-select: none;
            }
            
            .match-button {
                position: absolute;
                top: 5px;
                left: 5px;
                width: 35px;
                height: 35px;
                margin-right: 5px;
                line-height: 35px;
                text-align: center;
                font-size: 2em;
                background-color: darkgray;
            }
            
            .file-name {
                height: 35px;
                line-height: 35px;
                text-align: left;
                margin-left: 40px;
                padding-left: 5px;
                font-size: 1.5em;
                background-color: darkgray;
            }
            
            .match-details {
                display: none;
                padding: 5px;
                padding-left: 45px;
                background-color: lightgray;
                overflow: visible;
                word-wrap: break-word;
            }
            
            .match-details.visible {
                display: block;
            }
            
            .striped {
                width: 100%;
                border: solid 1px darkgray;
                border-collapse: collapse;
            }
            
            .striped td {
                padding: 5px;
            }
            
            .striped tr:nth-child(2n) {
                background-color: darkgray;
            }
            
            .striped th {
                background-color: black;
                color: white;
            }
            
            @media (max-width: 900px) {
                .half {
                    float: none;
                    width: 100%;
                    height: auto;
                    margin: 0;
                    margin-bottom: 10px;
                }
                
                .half:last-child {
                    margin-bottom: 0; 
                }
                
                textarea {
                    height: 300px;
                    margin-bottom: 20px;
                }
                
                button {
                    height: 40px;
                    
                }
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="half">
                <form method="post">
                    <textarea name="input"><?php if(isset($_POST['input'])) : ?><?= $_POST['input'] ?><?php endif; ?></textarea>

                    <button name="submit" type="submit">Decode</button>
                </form>
            </div>
            <div class="half">
                <?php
                    if(isset($_POST['input'])){

                        $input = filter_input(INPUT_POST, 'input', FILTER_SANITIZE_STRING);
                        
                        if(preg_match_all('/https?:\/\/[^\s]+/', $input, $matches)){

                            foreach ($matches[0] as $match) {
                                $match_parameter = preg_replace('/^\S+?f=/', '', $match);

                                $decoded = base64_decode($match_parameter);

                                $unserialized = unserialize($decoded);
                                
                                if($unserialized) {
                                    $date  = new DateTime();
                                    $date->setTimestamp($unserialized['time']);
                                    $unserialized['time'] = $date->format('Y-m-d H:i:s');
                                }

                                ?>  
                                    <div class="match">
                                        <?php if ($unserialized) : ?>
                                            <div class="match-header">
                                                <div class="match-button">+</div>
                                                <div class="file-name">
                                                    <?= $unserialized['file']; ?>
                                                </div>
                                            </div>
                                            <div class="match-details">
                                                <table class="striped">
                                                    <thead>
                                                        <th>Field</th>
                                                        <th>Value</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($unserialized as $field => $value): ?>
                                                            <tr>
                                                                <td><?= $field; ?></td>
                                                                <td><?= $value; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php else : ?>
                                            <div class="match-header">
                                                <div class="match-button">+</div>
                                                <div class="file-name">
                                                    <?= 'Unrecognized link' ?>
                                                </div>
                                            </div>
                                            <div class="match-details">
                                                <?= $match; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php
                            }
                        }
                    } else {
                        echo "no results";
                    }
                ?>
            </div>
        </div>
        <script>
            $(window).ready(function(){
                $('.match-header').click(function(){
                    var body = $(this).parent().children('.match-details');
                    var button = $(".match-button", this);
                    
                    if(button.html() == "+") {
                        button.html("-");
                    } else {
                        button.html("+");
                    }
                    
                    body.toggleClass('visible');
                });
            });
        </script>
    </body>
</html>
