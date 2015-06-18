<?php

route::url('contact/{department}')
      ->controller('contact')
      ->method(SF::GET);

route::url('tss/')
      ->controller('tss1')
      ->method(SF::GET);