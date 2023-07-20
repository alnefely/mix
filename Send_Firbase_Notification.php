<?php
function Send_Firbase_Noti()
{

    $server_api_key = "AAAAMIVXuF8:APA91bF_UbtITR1oN__2385Q14NiuUq0xZIRY5NXgCOKNvm21MTrdu0WhdW5L5T_xlOsDa-z9SJ_SqtxiQk0pYYlLPGB5Y-YlO8C_UFKL589VwUv6ixcpyeCaxbo7aJlh8UtmXb6mH0F";
    $token_1 = "";

    $data = [
        // 'registration_ids' => [$token_1],
        'to' => '/topics/welcome',
        'notification' => [
            'title' => 'Notification Title',
            'body' => 'Message Body',
            'sound' => 'default', 
        ],
    ];

    $fields = json_encode ($data);
    
    $headers = [
        'Authorization: key='.$server_api_key,
        'Content-Type: application/json',
    ];

    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt ( $ch, CURLOPT_POST, true);
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields);
    
    $result = curl_exec ($ch);
    return $result;
    //curl_close ( $ch );
}

echo Send_Firbase_Noti();
