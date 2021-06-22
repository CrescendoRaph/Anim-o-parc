<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_USER', '0a6ea21283f1001cd82bc9463004026f');
    define('API_LOGIN', 'c9ff88f7b9060cefe34fbf5c5cde177a');
    $mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);

    if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
                [
                  'From' => [
                    'Email' => "rondoudou21@gmail.com",
                    'Name' => "Raphael"
                  ],
                  'To' => [
                    [
                      'Email' => "rondoudou21@gmail.com",
                      'Name' => "Raphael"
                    ]
                  ],
                  'Subject' => "Greetings from Mailjet.",
                  'TextPart' => "$email, $message",
                  'CustomID' => "AppGettingStartedTest"
                ]
              ]
            ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        }
        else{
            echo "Email non valide";
        }

    }