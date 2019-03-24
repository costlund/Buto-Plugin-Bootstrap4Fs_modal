<?php
class PluginBootstrap4Fs_modal{
  public static function widget_include($data){
    $element = array();
    $element[] = wfDocument::createHtmlElement('link', null,   array('href' => '/plugin/bootstrap4/fs_modal/dist/css/bootstrap-fs-modal.css', 'rel' => 'stylesheet'));
    wfDocument::renderElement($element);
  }
}