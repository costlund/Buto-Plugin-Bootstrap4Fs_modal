<?php
class PluginBootstrap4Fs_modal{
  public static function widget_include($data){
    $element = array();
    /**
     * Library
     */
    $element[] = wfDocument::createHtmlElement('link', null,   array('href' => '/plugin/bootstrap4/fs_modal/dist/css/bootstrap-fs-modal.css', 'rel' => 'stylesheet'));
    /**
     * Fix
     */
    $element[] = wfDocument::createHtmlElement('link', null,   array('href' => '/plugin/bootstrap4/fs_modal/style.css', 'rel' => 'stylesheet'));
    wfDocument::renderElement($element);
  }
}