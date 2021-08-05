<?php
# 06 - Test Doubles

/**
 * Mailer
 * 
 * Send messages
 */

class Mailer {

    /**
     * Send a message
     * 
     * @param string $email The email address
     * @param string $message The message
     * 
     * @return boolean True if sent, false otherwise
     */

    public function sendMessage($email, $message){
        // use mail() or PHPMailer for example

        // For section 5.22
        if(empty($email)){
            throw new Exception;
        }

        // 3 second delay
        sleep(3);

        echo "send '$message' to '$email'";
        
        return true;
    }
}