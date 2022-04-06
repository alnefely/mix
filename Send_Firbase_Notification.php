function Send_Firbase_Noti()
    {

        $server_api_key = "AAAABcPMcR4:APA91bHupEwcqmqX-UNFglYf6XOG54h27SMafBtzxYpaVOQjYcVTZZd0J43IMXlZwFv5ZAk5adjSvZcjoFjImZWIIu2s_Wno5Sl6w6EKZRtPudcEsdT9DsIO4rU7JMJVeKhdmzSPZtB0";
        $token_1 = "";

        $data = [
            'registration_ids' => [$token_1],
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
