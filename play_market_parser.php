<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            $hl = 'en';

            $app_id = 'de.toastcode.screener';

            $result = mb_convert_encoding(
                file_get_contents("https://play.google.com/store/apps/details?hl=$hl&id=$app_id"),
                'HTML-ENTITIES',
                'UTF-8'
            );

            $html = DOMDocument::loadHTML($result);

            $selector = new DOMXPath($html);

            $name = $selector->query("//*[contains(@class, 'id-app-title')]")->item(0)->nodeValue;

            $category = $selector->query("//*[contains(@class, 'category')]")->item(0)->childNodes->item(1)->nodeValue;

            $vendor = $selector->query("//*[contains(@class, 'document-subtitle')]")->item(0)->childNodes->item(1)->nodeValue;

            $description_node = $selector->query("//*[contains(@class, 'show-more-content')]")->item(0);

            $description = $html->saveHTML($description_node->childNodes->item(1));
            $description = preg_replace('/<a[^>]*>([^<]+)<\/a>/i', '$1', $description);

            $image_node = $selector->query("//img[contains(@class, 'cover-image')]")->item(0);

            $image_url = $image_node->getAttribute('src');

            $image = file_get_contents('https:'.$image_url);

            file_put_contents('image.png', $image);

            var_dump($name, $category, $vendor, $description);

        ?>
   </body>
</html>
