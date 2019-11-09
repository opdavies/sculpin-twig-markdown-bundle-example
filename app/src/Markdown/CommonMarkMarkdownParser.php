<?php

namespace App\Markdown;

use League\CommonMark\CommonMarkConverter;
use Opdavies\Sculpin\Bundle\TwigMarkdownBundle\Twig\SculpinTwigMarkdownParserInterface;

class CommonMarkMarkdownParser implements SculpinTwigMarkdownParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($text)
    {
        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        return $converter->convertToHtml($text);
    }
}
