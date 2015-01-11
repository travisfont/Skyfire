<?php 

require_once 'routes.php';
// automatically scan and register the entire class folder

#route::url('contact/{department}')->controller('contact')::METHOD('POST');
route::url('contact/{department}')->controller('contact')->METHOD('POST');