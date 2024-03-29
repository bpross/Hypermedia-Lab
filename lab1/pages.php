<?php

class Pages extends CI_Controller {

    public function view($page = 'home')
    {
        if(!file_exists('application/views/pages/'.$page.'.php'))
        {
            //Page does not EXISTS
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/about',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer',$data);
    }
}
