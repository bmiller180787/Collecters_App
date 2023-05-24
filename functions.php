<?php

function returnHtmlFromArray(array $trees): string
{
    try {
        $htmlbody = '';
        foreach ($trees as $tree) {
            $htmlbody .= '<div class="card">'
                . '<div class="tree_image"><img src="' . $tree->getImageLink() . '" alt="A ' . $tree->getName() . '"></div>'
                . '<h2>' . $tree->getName() . '</h2>'
                . '<p>' . $tree->getScientificName() . '</p>'
                . '</div>';
        }
    } catch(Error $exception) {
        return 'Incorrect Data Supplied';
    }

    return $htmlbody;
};
