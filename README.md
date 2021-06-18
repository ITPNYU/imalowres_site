# NYU ITP LowRes theme

## Frontpage
The frontpage ```frontpage.php``` is hardcoded in the theme. It consists of multiple elements that all start with ```front-page-*.php```, with the exception of the header and footer that uses the regular Wordpress template parts. The mobile menu is hard coded as well in ```header.php```.

### Editing content on the homepage
The announcement part can be updated in the ```front-page-info-block.php```. The years for the cities can be updated in ```front-page-three-cities.php```

### Carousel
Carousel settings can be found in ```/assets/carousel.json```. The carousel is very bare bones right now. Every x seconds it picks a random position in an array with images. To change the time interval please change ```time_interval``` value (ms). Images of the carousel can be placed in the ```assets/carousel``` folder.

```
{
  "carousel_settings": {
    "time_interval": 10000
  },
  "carousel": [
    {
      "image": "01.jpg",
      "title": "Description One"
    },
    {
      "image": "02.jpg",
      "title": "Description Two"
    },
    {
      "image": "03.jpg",
      "title": "Description Three"
    }
  ]
}
```

## People page
Consists of a 4 column grid. First column contains the team. All parts are raw html blocks. Seperate season teams can be made by creating different containers.

```
<div class="profile__piccontainer">
<div class="circle"></div>
<img class="profile__pic" src="[!IMAGE!]" />
<div class="circle__back"></div>
</div>

<h3 class="profile__name">[!NAME!]</h3>
<span class="profile__title>[!TITLE!]</span>
<br/>
<a href="[!URL!]" class="profile__button" />Read further</a>

<div class="profile__bottomline"></div>
```

## Mobile menu
Is currently hard coded in the ```header.php``` block.

## Plugins

* All-in-one WP Migration
* WPBakery Page Builder
* Yoast SEO