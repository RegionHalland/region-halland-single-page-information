# Hämta information om valfri sida

## Hur man använder Region Hallands plugin "region-halland-single-page-information"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-single-page-information".


## Användningsområde

Denna plugin skapar ett objekt() som innehåller all information om en valfri sida


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-single-page-information/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-single-page-information.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-single-page-information.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-single-page-information": "1.0.0"
},
```


## Visa "sidans" innehåll via "Blade"

```sh
@if(function_exists('get_region_halland_single_page_information'))
  @php($myPage = get_region_halland_single_page_information(30)) 
  <div>
    {{ $myPage->post_title }}
  </div>          
  <div>
    {!! do_shortcode(wpautop($myPage->post_content)) !!}
  </div>          
  <div>
    <img src="{{ $myPage->image_url }}" alt="{{ $myPage->image_alt }}">
  </div>          
@endif
```
        

## Exempel på hur arrayen kan se ut

```sh
object(WP_Post)[6431]
  public 'ID' => int 30
  public 'post_author' => string '1' (length=1)
  public 'post_date' => string '2018-11-23 11:17:24' (length=19)
  public 'post_date_gmt' => string '2018-11-23 10:17:24' (length=19)
  public 'post_content' => string 'Lorem ipsum dolares' (length=19)
  public 'post_title' => string 'Startsida' (length=9)
  public 'post_excerpt' => string '' (length=0)
  public 'post_status' => string 'publish' (length=7)
  public 'comment_status' => string 'closed' (length=6)
  public 'ping_status' => string 'closed' (length=6)
  public 'post_password' => string '' (length=0)
  public 'post_name' => string 'startsida' (length=9)
  public 'to_ping' => string '' (length=0)
  public 'pinged' => string '' (length=0)
  public 'post_modified' => string '2018-11-26 12:44:01' (length=19)
  public 'post_modified_gmt' => string '2018-11-26 11:44:01' (length=19)
  public 'post_content_filtered' => string '' (length=0)
  public 'post_parent' => int 17
  public 'guid' => string 'http://exempel.se/startsida/' (length=28)
  public 'menu_order' => int 0
  public 'post_type' => string 'page' (length=4)
  public 'post_mime_type' => string '' (length=0)
  public 'comment_count' => string '0' (length=1)
  public 'filter' => string 'raw' (length=3)
  public 'image_url' => string 'http://exempel.se/startsida/' (length=28)
  public 'image_alt' => string 'Min bild' (length=8)
```

## Versionhistorik

### 1.1.0
- Lagt till information om licensmodell
- Bifogat fil med licensmodell
- Alt-text för bild

### 1.0.0
- Första version