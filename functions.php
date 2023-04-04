<?php

function returnHtmlFromArray(array $trees): string
{
    $htmlbody = '';
    foreach ($trees as $tree) {
        $htmlbody .= '<div class="card">'
            . '<div><img src="' . $tree->getImageLink() . '" alt="A ' . $tree->getName() . '"></div>'
            . '<h2>' . $tree->getName() . '</h2>'
            . '<p>' . $tree->getScientificName() . '</p>'
            . '</div>';
    }

    return $htmlbody;
};
