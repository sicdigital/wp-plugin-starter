<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration php file. It containts variables used in the template
 *
 */

// Template variables
$template = array(
    'name'        => 'uAdmin',
    'version'     => '1.3.2',
    'author'      => 'Clear C',
    'title'       => 'Welcome to Clear Clinic Labs',
    'description' => 'CClear Clinic Labs is the Place to Monitor and treat your acne',
    'header'      => '', // 'fixed-top', 'fixed-bottom'
    'layout'      => '', // 'fixed'
    'theme'       => 'cclabs', // 'deepblue', 'deepwood', 'deeppurple', 'deepgreen', '' empty for default
    'active_page' => basename($_SERVER['PHP_SELF'])
);

// Primary navigation array (the primary navigation will be created automatically based on this array)
$primary_nav = array( array(
        'name'  => 'Member Dashboard',
        'url'   => '/member-dashboard/',
        'icon'  => 'icon-rocket'
    ),
 array(
        'name'  => 'Track My Progress',
        'url'   => '/member-dashboard/my-progress/',
        'icon'  => 'icon-calendar'
    ),
     array(
        'name'  => 'My Regimen',
        'url'   => '/member-dashboard/my-regimen/',
        'icon'  => 'icon-camera'
    ),
      array(
        'name'  => 'Personal Acne Coach',
        'url'   => '/member-dashboard/personal-acne-coach/',
        'icon'  => 'icon-user'
    )
  );

$example_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => 'index.php',
        'icon'  => 'icon-fire'
    ),
    array(
        'name'  => 'UI Elements',
        'icon'  => 'icon-magic',
        'sub'   => array(
            array(
                'name' => 'General',
                'url' => 'page_ui_general.php',
                'icon'  => 'icon-star'
            ),
            array(
                'name' => 'Forms',
                'url' => 'page_forms.php',
                'icon'  => 'icon-th-list'
            ),
            array(
                'name' => 'Tables',
                'url' => 'page_tables.php',
                'icon'  => 'icon-table'
            )
        )
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'icon-leaf',
        'sub'   => array(
            array(
                'name'  => 'Charts',
                'url'   => 'page_charts.php',
                'icon'  => 'icon-bar-chart'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'page_calendar.php',
                'icon'  => 'icon-calendar'
            ),
            array(
                'name' => 'DataTables',
                'url' => 'page_datatables.php',
                'icon'  => 'icon-th'
            ),
            array(
                'name' => 'Editable DataTables',
                'url' => 'page_datatables_editable.php',
                'icon'  => 'icon-pencil'
            ),
            array(
                'name' => 'Maps',
                'url' => 'page_maps.php',
                'icon'  => 'icon-map-marker'
            ),
            array(
                'name' => 'Form Validation',
                'url' => 'page_form_validation.php',
                'icon'  => 'icon-warning-sign'
            ),
            array(
                'name' => 'Form Wizard',
                'url' => 'page_form_wizard.php',
                'icon'  => 'icon-magic'
            ),
            array(
                'name' => 'Syntax Highlighting',
                'url' => 'page_syntax_highlighting.php',
                'icon'  => 'icon-beaker'
            )
        )
    ),
    array(
        'name'  => 'Typography',
        'url'   => 'page_typography.php',
        'icon'  => 'icon-font'
    ),
    array(
        'name'  => 'Gallery',
        'url'   => 'page_gallery.php',
        'icon'  => 'icon-picture'
    ),
    array(
        'name'  => 'Icons',
        'icon'  => 'icon-tint',
        'sub'   => array(
            array(
                'name' => 'Glyphicons PRO',
                'url' => 'page_glyphicons_pro.php'
            ),
            array(
                'name' => 'Glyphicons Halflings PRO',
                'url' => 'page_glyphicons_halflings_pro.php'
            ),
            array(
                'name' => 'FontAwesome',
                'url' => 'page_fontawesome.php'
            ),
            array(
                'name' => 'Gemicon',
                'url' => 'page_gemicon.php'
            )
        )
    ),
    array(
        'name'   => 'Pages',
        'icon'  => 'icon-file-alt',
        'sub'   => array(
            array(
                'name' => 'Inbox',
                'url' => 'page_inbox.php',
                'icon'  => 'icon-envelope'
            ),
            array(
                'name' => 'ChatUI',
                'url' => 'page_chatui.php',
                'icon'  => 'icon-comments'
            ),
            array(
                'name' => 'Search Results',
                'url' => 'page_search_results.php',
                'icon'  => 'icon-search'
            ),
            array(
                'name' => 'Price Tables',
                'url' => 'page_price_tables.php',
                'icon'  => 'icon-ticket'
            ),
            array(
                'name' => 'Article',
                'url' => 'page_article.php',
                'icon'  => 'icon-pencil'
            ),
            array(
                'name' => 'Invoice',
                'url' => 'page_invoice.php',
                'icon'  => 'icon-book'
            ),
            array(
                'name' => 'Profile',
                'url' => 'page_profile.php',
                'icon'  => 'icon-user'
            ),
            array(
                'name' => 'FAQ',
                'url' => 'page_faq.php',
                'icon'  => 'icon-flag'
            ),
            array(
                'name' => 'Errors',
                'url' => 'page_errors.php',
                'icon'  => 'icon-warning-sign'
            ),
            array(
                'name' => 'Blank',
                'url' => 'page_blank.php',
                'icon'  => 'icon-circle-blank'
            )
        )
    ),
    array(
        'name'  => 'Login Page',
        'url'   => 'page_login.php',
        'icon'  => 'icon-off'
    ),
    array(
        'name' => 'Landing Page',
        'url' => 'page_landing.php',
        'icon'  => 'icon-rocket'
    )
);