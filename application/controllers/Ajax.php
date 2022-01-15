<?php
/*********************
Name: Hope Watson
Coding 07
Purpose: Controller for AJAX on contact page.
**********************/
class Ajax extends CI_Controller {

    public function processform() {

        //if this is an ajax request
        if ($this->input->is_ajax_request()){
        
        
            $name = strip_tags(trim($this->input->post('name')), 0, 64);
            $email = strip_tags(trim($this->input->post('email')));
            $from = strip_tags(trim($this->input->post('from')));
            $subject = strip_tags(trim($this->input->post('subject')), 0, 64);
            $message = strip_tags(trim($this->input->post('message')), 0, 1000);

    
        //validates that variables are not empty
        if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {

            //creates email header for email function
            $headers = "From: $from\r\n";
            $headers .= "Reply-To: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

            $to = "hope.watson@g.austincc.edu";

            //if the email sends using above information return success page, else return failure page
            if (mail($to, $subject, $message, $headers)) {
                echo "okay";
            } else {
                echo "error";
            }
        } else {
                echo "error";
        }
    } else {
        echo "error";
    }
}

    public function index() {

        echo "";
    }
}