<?php
/*
 * In this example i'll show you how to get all the tld's available from a section.
 *
 */

/*
 * ---------------------------------------------------
 * Method 1
 * ---------------------------------------------------
 */
try
{
    // Get all the common tlds.
    //
    $tlds = DomainTools::servers()->tlds('common');

    // Print or do what you want with the information.
    //
    echo '<pre>';
    var_dump($tlds);
    echo '</pre>';
}
catch (Exception $e)
{
    echo $e->getMessage();
}


/*
 * ---------------------------------------------------
 * Method 2
 * ---------------------------------------------------
 */
try
{
    // Instantiate the servers library.
    //
    $servers = DomainTools::servers();

    // Get all the common tlds.
    //
    $tlds = $servers->tlds('common');

    // Print or do what you want with the information.
    //
    echo '<pre>';
    var_dump($tlds);
    echo '</pre>';
}
catch (Exception $e)
{
    echo $e->getMessage();
}


/*
 * ---------------------------------------------------
 * Method 3
 * ---------------------------------------------------
 */
try
{
    // Instantiate DomainTools
    //
    $dt = new DomainTools();

    // Instantiate the servers library.
    //
    $servers = $dt->servers();

    // Get the common tlds.
    //
    $tlds = $servers->tlds('common');

    // Print or do what you want with the information.
    //
    echo '<pre>';
    var_dump($tlds);
    echo '</pre>';
}
catch (Exception $e)
{
    echo $e->getMessage();
}
