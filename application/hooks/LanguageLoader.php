<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('general_messages',$siteLang);
            $ci->lang->load('nav_informativo',$siteLang);
            $ci->lang->load('footer_informativa',$siteLang);
            $ci->lang->load('home_informativo',$siteLang);
            $ci->lang->load('about_informativo',$siteLang);
            $ci->lang->load('service_informativo',$siteLang);
            $ci->lang->load('blog_informativo',$siteLang);
            $ci->lang->load('contacto_informativa',$siteLang);
            $ci->lang->load('event_informativo',$siteLang);
            $ci->lang->load('blogpages_informativo',$siteLang);
            $ci->lang->load('offer_informativo',$siteLang);
            $ci->lang->load('login',$siteLang);
        } else {
            $ci->lang->load('general_messages','spanish');
            $ci->lang->load('nav_informativo','spanish');
            $ci->lang->load('footer_informativa','spanish');
            $ci->lang->load('home_informativo','spanish');
            $ci->lang->load('about_informativo','spanish');
            $ci->lang->load('service_informativo','spanish');
            $ci->lang->load('blog_informativo','spanish');
            $ci->lang->load('contacto_informativa','spanish');
            $ci->lang->load('event_informativo','spanish');
            $ci->lang->load('blogpages_informativo','spanish');
            $ci->lang->load('offer_informativo','spanish');
            $ci->lang->load('login','spanish');
        }
    }
}
