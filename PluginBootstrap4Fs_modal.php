<?php
class PluginBootstrap4Fs_modal{
  public static function widget_include(){
    wfPlugin::enable('include/js');
    wfDocument::renderElementFromFolder(__DIR__, __FUNCTION__);
  }
}
