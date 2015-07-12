<?php

/**
 * States Dropdown
 *
 * @uses check_select
 * @param string $post, the one to make "selected"
 * @param string $type, by default it shows abbreviations. 'abbrev', 'name' or 'mixed'
 * @return string
 */
function StateDropdown($post=null, $type='abbrev') {
    $states = array(
        array('AL', 'Alabama'),
        array('AK', 'Alaska'),
        array('AZ', 'Arizona'),
        array('AR', 'Arkansas'),
        array('CA', 'California'),
        array('CO', 'Colorado'),
        array('CT', 'Connecticut'),
        array('DE', 'Delaware'),
        array('DC', 'District of Columbia'),
        array('FL', 'Florida'),
        array('GA', 'Georgia'),
        array('HI', 'Hawaii'),
        array('ID', 'Idaho'),
        array('IL', 'Illinois'),
        array('IN', 'Indiana'),
        array('IA', 'Iowa'),
        array('KS', 'Kansas'),
        array('KY', 'Kentucky'),
        array('LA', 'Louisiana'),
        array('ME', 'Maine'),
        array('MD', 'Maryland'),
        array('MA', 'Massachusetts'),
        array('MI', 'Michigan'),
        array('MN', 'Minnesota'),
        array('MS', 'Mississippi'),
        array('MO', 'Missouri'),
        array('MT', 'Montana'),
        array('NE', 'Nebraska'),
        array('NV', 'Nevada'),
        array('NH', 'New Hampshire'),
        array('NJ', 'New Jersey'),
        array('NM', 'New Mexico'),
        array('NY', 'New York'),
        array('NC', 'North Carolina'),
        array('ND', 'North Dakota'),
        array('OH', 'Ohio'),
        array('OK', 'Oklahoma'),
        array('OR', 'Oregon'),
        array('PA', 'Pennsylvania'),
        array('PR', 'Puerto Rico'),
        array('RI', 'Rhode Island'),
        array('SC', 'South Carolina'),
        array('SD', 'South Dakota'),
        array('TN', 'Tennessee'),
        array('TX', 'Texas'),
        array('UT', 'Utah'),
        array('VT', 'Vermont'),
        array('VA', 'Virginia'),
        array('WA', 'Washington'),
        array('WV', 'West Virginia'),
        array('WI', 'Wisconsin'),
        array('WY', 'Wyoming')
    );

    $options = '<option value=""></option>';

    foreach ($states as $state) {
        if ($type == 'abbrev') {
            $options .= '<option value="'.$state[0].'" '. check_select($post, $state[0], false) .' >'.$state[0].'</option>'."\n";
        } elseif($type == 'name') {
            $options .= '<option value="'.$state[1].'" '. check_select($post, $state[1], false) .' >'.$state[1].'</option>'."\n";
        } elseif($type == 'mixed') {
            $options .= '<option value="'.$state[0].'" '. check_select($post, $state[0], false) .' >'.$state[1].'</option>'."\n";
        }
    }

    echo $options;
}

/**
 * Check Select Element
 *
 * @param string $i, POST value
 * @param string $m, input element's value
 * @param string $e, return=false, echo=true
 * @return string
 */
function check_select($i,$m,$e=true) {
    if ($i != null) {
        if ( $i == $m ) {
            $var = ' selected="selected" ';
        } else {
            $var = '';
        }
    } else {
        $var = '';
    }
    if(!$e) {
        return $var;
    } else {
        echo $var;
    }
}
