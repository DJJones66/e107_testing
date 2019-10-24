<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Provides information about external libraries.
 */


/**
 * Class theme_library.
 */
class theme_library
{

	/**
	 * Provides information about external libraries.
	 */
	function config()
	{

        // ----------------- Fontawesome 5 ---------------------------//

        // Fontawesome 5.
        // Font-Awesome 5 (Cloudflare) converted from
        // Font-Awesome 5 (CDN).
        $libraries['cloudflare.fontawesome5'] = array(
            'name'              => 'Font-Awesome 5 (Cloudflare)',
            'vendor_url'        => 'https://fontawesome.com/',
            'version_arguments' => array(
                'file'    => 'css/all.css',
                'pattern' => '/(\d\.\d\.\d+)/',
                'lines'   => 10,
            ),
            'files'             => array(
                'css' => array(
                    'css/all.css' => array(
                        'zone' => 2,
                    ),
                    'css/v4-shims.css' => array(
                        'zone' => 2,
                    ),
                ),
            ),

            'library_path'      => 'https://use.fontawesome.com/releases',
            'path'              => 'v5.8.1',
        );
        // ----------------- Bootstrap 4 ---------------------------//

        // Bootstrap 4(Cloudflare).
        $libraries['cloudflare.bootstrap4'] = array(
            'name'              => 'Bootstrap 4 (Cloudflare)',
            'vendor_url'        => 'https://cdnjs.cloudflare.com/',
            'version_arguments' => array(
                'file'    => 'js/bootstrap.min.js',
                'pattern' => '/Bootstrap\s+v(\d\.\d\.\d+)/',
                'lines'   => 5,
            ),
            'files'             => array(
                'js'  => array(
                    'js/bootstrap.bundle.min.js' => array(
                        'zone' => 2,
                        'type' => 'footer',
                    ),
                ),
                'css' => array(
                    'css/bootstrap.min.css' => array(
                        'zone' => 1,
                    ),
                ),
            ),

            // Override library path to CDN.
            //	https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js
            'library_path'      => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1',
            'path'              => '',
        );


		return $libraries;
	}


	/**
	 * Alters library information before detection and caching takes place.
	 */
	function config_alter(&$libraries)
	{


	}

}
