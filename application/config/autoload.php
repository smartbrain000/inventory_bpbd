<?php
defined('BASEPATH') or exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('email', 'session', 'database', 'form_validation');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file', 'sandra');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('mydb', 'Global_model');
