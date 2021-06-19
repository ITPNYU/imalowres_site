# NYU ITP LowRes theme

## Frontpage
The frontpage ```frontpage.php``` is hardcoded in the theme. It consists of multiple elements that all start with ```front-page-*.php```, with the exception of the header and footer that uses the regular Wordpress template parts. The mobile menu is hard coded as well in ```header.php```.

### Editing content on the homepage
The most important parts for editing are ```front-page-info-block.php``` and the ```front-page-three-cities.php```.

| Template part               | Role                                         |
|-----------------------------|----------------------------------------------|
| front-page-divider-one.php  | Divider piece for frontpage (can be ignored) |
| front-page-divider-two.php  | Divider piece for frontpage (can be ignored) |
| front-page-ecosystem.php    | Footer ecosystem part                        |
| front-page-info-block.php   | Info block frontpage with announcements      |
| front-page-intro.php        | Intro text introducing the program           |
| front-page-three-cities.php | Three cities introduction                    |

### Uploading images and swapping them
All the homepage imagery – with the exception of the carousel, please see next paragraph – can be changed in ```/assets/homepage.json```. All the images are currently uploaded in the IMA Media File Uploader, but it's advised to upload these images in the LowRes Media File Uploader.

```
{
  "note": "in case these images go offline please refer to the github repo",
  "three_cities": {
    "new_york": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/bg_nyc-min-1024x1024.jpg"
    },
    "berlin": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/berlin-1024x899.jpg"
    },
    "shanghai": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/bg_shanghai.jpg"
    }
  },
  "online_onsite": {
    "online": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/87904966345D0F29.jpg"
    },
    "offsite": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/8798B472EE6B6370.png"
    }
  },
  "ecosystem": {
    "itp": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/itpfloor.jpg"
    },
    "ima": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/imafloor.jpg"
    },
    "ima_shanghai": {
      "image_url": "https://itp.nyu.edu/ima/wp-content/uploads/2021/06/shanghaifloor.jpg"
    }
  }
}
```

### Carousel JSON
Carousel settings can be found in ```/assets/carousel.json```. The carousel is very bare bones right now. Every x seconds it picks a random position in an array with images. To change the time interval please change ```time_interval``` value (ms). Images of the carousel can be placed in the ```assets/carousel``` folder. All the images in the carousel have a width of ```1000 pixels``` and a height of ```461```. You can increase the height and width for a sharper image, but please keep a 1 : .461 ratio.

```
{
  "carousel_settings": {
    "time_interval": 10000
  },
  "carousel": [
    {
      "image": "01.jpg",
      "full_path": "",
      "title": "Description One"
    },
    {
      "image": "02.jpg",
      "full_path": "",
      "title": "Description Two"
    },
    {
      "image": "03.jpg",
      "full_path": "",
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

## To do
[ ] Mobile menu is currently hard coded. Would be better if this is generated dynamically
[ ] Settings on the front page are currently edited through ```homepage.json``` and ```carousel.json```. Would be better to create a Wordpress plugin for this that generates a JSON.
[ ] The current carousel doesn't meet the WCAG standards.

## Plugins

* All-in-one WP Migration
* WPBakery Page Builder
* Yoast SEO

## Contact
For additional questions please reach out to Erik van Zummeren << evz213 <> nyu.edu >>