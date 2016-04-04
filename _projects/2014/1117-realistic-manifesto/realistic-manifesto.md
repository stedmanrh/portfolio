---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
thumbnail: thumbnail.png
#subtitle: optional_subtitle
date: 2014-11-17
tags: interactive web
description: This web experience attempts to realize ideas presented in the "Realistic Manifesto" (Gabo & Pevsner, 1920) as an interactive kinetic sculpture. The five tenets of the manifesto may be read as display type set to utilize linear direction and depth to create an awareness of space. Various meshes that represent ideas in these tenets dynamically drift and rotate within three dimensions to aesthetically instantiate the notions of space and time. The user may navigate the environment (within limits) for a more visceral experience or allow the view to rest and observe the sculptural bodies drifting through space.<br><br>The scene (rendered with [three.js](http://threejs.org)) is the S. Mark Taper courtyard at [California Institute of the Arts](http://calarts.edu) in Valencia, California.

links:
    -   title: Web
        url: http://stedmanrh.github.io/realistic-manifesto
        text: Realistic Manifesto
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{media|strip}}real-man-screen.png" alt="{{ page.title }}">
