<?php
/*********************
Name: Hope Watson
Coding 07
Purpose: Controller for templating site pages in view folder.
**********************/
class Pages extends CI_Controller {

        
        public function view($page = 'home')
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }
                
                $data = [
                        'title' => ucfirst($page),
                        'homeTitle' => "Recipe Book",
                        'homeSubTitle' => "Categories",
                        'imgSubTitle' => "Image Source: ",
                        'homeCategory1' => "Indian Inspired",
                        'homeCategory2' => "Soups and Stews",
                        'homeCategory3' => "Japanese Inspired",
                        'homeCategory4' => "Drinks",
                        'homeCategory5' => "Breakfast",
                        'homeCategory6' => "Mexican Inspired",
                        'homeCategory7' => "Desserts",
                        'homeCategory8' => "Sandwiches and Wraps"
                ];
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }


        
        
}