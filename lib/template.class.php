<?php
require_once('lib/smarty/Smarty.class.php');
class Template extends Smarty{
	private $templateConfig;

	public function __construct(){
		parent::__construct();
		$this->templateConfig=$GLOBALS['_config']['template'];
		$this->template_dir=$this->templateConfig['template_dir'];
		$this->compile_dir=$this->templateConfig['compile_dir'];
		$this->config_dir=$this->templateConfig['config_dir'];
		$this->cache_dir=$this->templateConfig['cache_dir'];
	}
	public function __destruct(){
		parent::__destruct();
	}
}
