<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- All Bootstrap CDN's -->
    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<body style="background-color:#2fbad9">

    <?php
    $answer = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quest = $_POST['Askq'];

            if (strpos($quest, '?') !== false) {
                 $quest = 'question';
            }

        switch ($quest) {
            case !isset($_POST['Askq']):
                $answer = 'See if I care!';
                break;
            case 'question' :
                $answer = 'Sure.';
                break;
            case (ctype_upper($quest)) :
                $answer = 'Chill!';
                break;
            default:
                $answer = 'Whatevs.';
                        }
        }
    ?>

    <div id="headerCSS">
        <div class="row">
            <div class='col-lg-2 col-md-3 hidden-md hidden-sm hidden-xs'>
                <h1 style="color:#ffffff;font-size:50px;font-weight:bold;font-style:italic;font-family:'Book Antiqua';text-align: center">Q/A</h1>
            </div>
            <div class='col-lg-offset-1 col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-1'>
                <h2 style="color:#ffffff;font-size:50px;font-weight:bold;font-style:italic;font-family:'Book Antiqua';text-align: center"> Implement Francis</h2>
            </div>
            <div class='col-lg-2 col-lg-offset-2 col-md-3 col-md-offset-1 hidden-md hidden-sm hidden-xs'>
                <h1 style="color:#ffffff;font-size:50px;font-weight:bold;font-style:italic;font-family:'Book Antiqua';text-align: center">Q/A</h1>
            </div>
        </div>
    </div>
    
    <div id="renderBody">
        <style>
            container, caption, th {
                font-size: larger;
                font-family: Helvetica Neue, Lucida Grande, Segoe UI, Arial, Helvetica, Verdana, sans-serif;
                color: white;
                font-weight: bold;
                background-color: rgb(80, 124, 209);
            }

            table tr:nth-child(even) {
                background-color: rgb(239, 243, 251);
            }

            table tr:nth-child(odd) {
                background-color: #ffffff;
            }
        </style>


        <div id="checkOut" class="container">

            <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a href="#formTab" data-toggle="tab" style=" font-family: 'Bookman Old Style'; font-style: italic; font-size:large">Ask your question with a ? at the end.</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="well tab-pane active" id="formTab">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset id="pay">
                            <label for="odateInput" class="control-label col-md-2" >Ask Question</label>
                            <div class="col-md-10 col-lg-10">
                                <input name="Askq" type="text" class="form-control" value="">
                                <br />
                            </div>
                            <br />
                            <br />
                            <br />
                            <label for="odateInput" class="control-label col-md-2">Your Answer</label>
                            <div class="col-md-10 col-lg-10">

                                <input id="Desc" name="Desc" class="form-control" value="<?php
                                                        echo htmlspecialchars($answer);
                                                                                         ?>">
                                <br />
                                <div class="col-md-3 col-md-offset-3">
                                    <input type=submit name="submit" value=SubmitQuestion class="btn-lg btn-success">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>


        <br /><br />
    </div>
</body>
</html>

<!--Your objective is to implement Francis, a simple message responder that responds as follows:
Francis answers 'Sure.' if you ask him a question
He answers 'Chill!' if you yell at him using all capital letters
He says 'See if I care!' if you address him without actually saying anything
He answers 'Whatevs.' to anything else
You may choose to implement Francis in either PHP 7 or Ruby 2.4. We have included a test suite in each of those languages which your implementation of Francis must pass without any alteration to the test suite.
If you don't have a working PHP + PHPUnit or Ruby environment available, you may wish to use this page as a starting point to get Ruby installed on your computer: https://www.ruby-lang.org/en/installation/.
Please complete this exercise, upload your solution as a private Gist on GitHub, and send us the URL.-->

