<?php



return array(
    /** set your paypal credential **/
    'client_id' => 'ARMGsqMUWrUmEZxtX65ssVqhedesNEUCwWM77m2u703rfcC1S876ChksJinPMA4LiWyOZqVYDIUWXRR_',
    'secret' => 'ECfRtX201p-53PIQCYi_dBGK20nS3gkUfx2zqjv195xWmPo-dh1JXuhRVMstFgUFVQGP71rvd6yizviJ',

    //'client_id' => 'AcmRrTOOGDotVNX18KntZe3i6loV30yarxVWlRy6VO4NQlOyMea6xMVodpsRf_dGvl5gUlIeb6iwOdC3',
    //'secret' => 'EMcdaV5pavlfpFNpWcYKKVF-5n4pfqTZYGwpCr91qkQywEnSCdlRemtmgPQNXCX_JMDQb0ObuxKT4idb',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 5000,
        /**
         * ملفات الديباج والعمليات الغير صحيحه
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
