<?php
    $settings->add(new admin_setting_configtext('filter_linktoaphrase_phrase',
                   get_string('phrase','filter_linktoaphrase'),
                   get_string('phraseconfig', 'filter_linktoaphrase'),
                   get_string('phrasedefault', 'filter_linktoaphrase')));

    $settings->add(new admin_setting_configtext('filter_linktoaphrase_link',
                   get_string('link','filter_linktoaphrase'),
                   get_string('linkconfig', 'filter_linktoaphrase'),
                   get_string('linkdefault', 'filter_linktoaphrase')));
?>