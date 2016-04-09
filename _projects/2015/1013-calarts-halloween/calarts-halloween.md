---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


title: CalArts Halloween 2015
subtitle: Freakshow
thumbnail: thumbnail.jpg
date: 2013-10-13
tags: event print
description: Art direction and team lead for the CalArts Halloween 2015 poster campaign. Design for "Strongman" poster in collaboration with <a href="http://katiebarger.com" target="_blank">Katie Barger.</a> Design for 13 typographic posters complementing scenic prosthetics by the CalArts Themed Entertainment Association. Strongman flexin' by the legendary <a href="http://dongeratcalarts.tumblr.com/" target="_blank">Donger</a> (né <a href="http://davidchathas.com" target="_blank">David Chathas</a>).

#links:
#    -   title: Link_Header
#        url: localhost
#        text: Lorem_ipsum
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}series.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}strongman.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}strongman-2.jpg" alt="{{ page.title }}">

<p class="span8 divider">Event Photos by <a href="https://www.flickr.com/photos/2071/" target="_blank">Rafael Hernandez</a></p>

<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}event-1.jpg" alt="{{ page.title }}">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}event-2.jpg" alt="{{ page.title }}">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}event-3.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}event-4.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}event-5.jpg" alt="{{ page.title }}">
