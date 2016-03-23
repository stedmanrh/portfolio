---
#defaults
layout: project
permalink: /:collection/:year/:month/:title


#title: The Future of Creative Education
subtitle: The Future of Creative Education
date: 2014-04-21
categories: web interactive identity
description: Kadenze brings together educators, artists, and engineers from leading universities across the globe to provide world-class education in the fields of art and creative technology. Halliday joined Kadenze in 2014 to transform a prototypical MVP into a suite of fully-fledged web products for virtual learning. His continued work with the team focuses on directing brands behind Kadenze's products, securing [amazing institutional partners,](http://kadenze.com/partners) and interface/experience design and web development for products.

links:
    -   title: Web
        url: http://kadenze.com
        text: kadenze.com
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<div class="span8 video-wrapper">
    <iframe class="span8" src="https://player.vimeo.com/video/112505592?title=0&byline=0&portrait=0" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
