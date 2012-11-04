<?php

/**
 * --------------------------------------------------------------------------
 * DomainTools
 * --------------------------------------------------------------------------
 * 
 * Domain Tools, a bundle for use with the Laravel Framework.
 *
 * @package  domaintools
 * @version  1.0
 * @author   Bruno Gaspar <brunofgaspar1@gmail.com>
 * @link     https://github.com/bruno-g/domaintools
 */


/*
 * --------------------------------------------------------------------------
 * Register some namespaces.
 * --------------------------------------------------------------------------
 */
Autoloader::namespaces(array(
    'DomainTools\\Library' => __DIR__ . DS . 'libraries',
    'DomainTools'          => __DIR__ . DS
));


/*
 * --------------------------------------------------------------------------
 * Set the global alias.
 * --------------------------------------------------------------------------
 */
Autoloader::alias('DomainTools\\DomainTools', 'DomainTools');
