<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $resourcesPath = "http://localhost:2777/banner-builder-lumen/resources/views";

    public $domain;
    public $product;
    public $campaign;
    public $size;
    public $lang;

    public $template;

    public $path;

    public $logo;
    public $button;
    public $cta;
    public $ctaLink;
    public $background;
    public $hero;
    public $text;
    public $textS;


    public function __construct($domain, $product, $campaign, $size, $lang)
    {
        $this->domain = $domain;
        $this->product = $product;
        $this->campaign = $campaign;
        $this->size = $size;

        if(!$lang)
        {
            $this->lang = 'en';
        } else {
            $this->lang = $lang;
        }

        $this->path = 'pages.html5.' . $domain . '.' . $product . '.' . $campaign . '.' . $size . '.template';

        $this->ctaLink = "http://go.netbet.ro";
        $this->logo = "logo_1.png";
    }

    public function setElements($template, $button, $background, $cta, $hero, $text, $textS)
    {
        $this->template = "banner-lab/templates/" . $template . "/template.tpl";
        $this->button = $button;
        $this->background = $background;
        $this->hero = $hero;
        $this->cta = str_replace('-', ' ', $cta);

        $this->text = $text;
        $this->textS = $textS;
    }

    public function highlightTextElement()
    {
        if(strrpos($this->text,"^") > -1)
        {
            $texts = explode("^", $this->text);
            return $texts;
        } else {
            return $this->text;
        }
    }

    public function getPathToTemplate()
    {
        return $this->path;
    }

    public function getLogoPath()
    {
        return 'https://bookiesbonuses.com/assets/local/Company/logos/_400xAUTO_fit_center-center/netbet_logo_transp.png';
    }

    public function getButtonsPath()
    {
        return 'banner-lab/components/buttons/' . $this->button;
    }

    public function getHeroPath()
    {
        return  $this->hero;
    }
}
