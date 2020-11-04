<?php
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('elements/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('elements/footer', $vars, $return);

        return $content;
    else:
        $this->view('elements/header', $vars);
        $this->view($template_name, $vars);
        $this->view('elements/footer', $vars);
    endif;
    }
    public function adminTemplate($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('elements/admin_header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('elements/admin_footer', $vars, $return);

        return $content;
    else:
         $this->view('elements/admin_header', $vars);
        $this->view($template_name, $vars);
         $this->view('elements/admin_footer', $vars);
    endif;
    }
}
?>