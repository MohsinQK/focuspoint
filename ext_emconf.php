<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "focuspoint".
 *
 * Auto generated 02-04-2015 06:34
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Focuspoint',
    'description' => 'Focuspoint integrate the focal point method to crop images in the frontend of the web page. Use the jQuery-focuspoint plugin (https://github.com/jonom/jquery-focuspoint example http://jonom.github.io/jquery-focuspoint/demos/helper/index.html) to crop the images. Use the function as wizard in the file list view and directly in the content element.',
    'category' => 'be',
    'version' => '6.0.5',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Tim Lochmüller',
    'author_email' => 'tim.lochmueller@hdnet.de',
    'author_company' => 'hdnet.de',
    'constraints' => [
        'depends' => [
            'php' => '8.0.99-8.2.99',
            'typo3' => '12.4.0-12.4.99',
        ],
    ],
];
