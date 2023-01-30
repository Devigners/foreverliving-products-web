<?php
namespace App\Traits;

use Artesaos\SEOTools\Facades\SEOTools;

trait AppCommonTraits
{
    public function generateSeoData($data)
    {
        $title = $data['title'] ?? "";
        $description = $data['description'] ?? "";
        $url = $data['url'] ?? "";
        $image = $data['image'] ?? "";

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::setCanonical($url);
        SEOTools::opengraph()->addProperty('type', 'articles');
        if ($image) {
            SEOTools::jsonLd()->addImage($image);
        }
    }
}
