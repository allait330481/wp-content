<?php

function render(string $template, array $args = []): void
{
    $path = \locate_template($template);

    if (empty($path)) {
        throw new \Exception(sprintf('Unable to load template "%s"', $template));
    }

    //convert array to usable variables for in the template
    if (!empty($args)) {
        extract($args);
    }

    include $path;
}