<?php
    //This function provides automatic linking to a specified URL for a
    // specified phrase.

    function linktoaphrase_filter($courseid, $text) {
        global $CFG;

        if (!isset($CFG->filter_linktoaphrase_phrase)) {
            set_config( 'filter_linktoaphrase_phrase', get_string('phrasedefault', 'filter_linktoaphrase') );
        }

        if (!isset($CFG->filter_linktoaphrase_link)) {
            set_config( 'filter_linktoaphrase_link', get_string('linkdefault', 'filter_linktoaphrase') );
        }

        $searchphrase = $CFG->filter_linktoaphrase_phrase;
        $starttag     = "<a href=\"{$CFG->filter_linktoaphrase_link}\">";
        $endtag       = "</a>";

        $filterobjects = array();
        $filterobjects[] = new filterobject($searchphrase, $starttag, $endtag);

        $text = filter_phrases($text, $filterobjects);

        return $text;
    }
?>
