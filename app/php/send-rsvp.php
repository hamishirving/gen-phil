<?php

function storeAddress(){

    require_once('mailchimp.php');  // same directory as store-address.php

    // grab an API Key from http://admin.mailchimp.com/account/api/
    $api = new MCAPI('03cdaad3115f6e8347f2cfaffd94ddf4-us13');

    $merge_vars = Array( 
        'EMAIL' => $_GET['email'],
        'FNAME' => $_GET['fname'], 
        'MESSAGE' => $_GET['message']
    );

    // grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
    // Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
    $list_id = "afed1a5639";

    if($api->listSubscribe($list_id, $_GET['email'], $merge_vars , $_GET['emailtype']) === true) {
        // It worked!   
        return 'Success!&nbsp; Check your inbox or spam folder for a message containing a confirmation link.';
    }else{
        // An error ocurred, return error message   
        return '<b>Error:</b>&nbsp; ' . $api->errorMessage;
    }

}

// If being called via ajax, autorun the function
if($_GET['ajax']){ echo storeAddress(); }
?>