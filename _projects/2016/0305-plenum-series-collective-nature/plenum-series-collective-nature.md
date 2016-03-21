---
#defaults
layout: project
permalink: /:collection/:year/:month/:title

title: "Plenum Series: Collective Nature"
date: 2016-03-05
categories: print
description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium tempor felis quis sollicitudin. Cras non elit fringilla, iaculis dui ac, tempor sem. Vivamus semper tempus quam, pharetra accumsan neque ultricies non. Etiam quis arcu sollicitudin, suscipit nunc ac, aliquet arcu. Fusce blandit laoreet efficitur. Mauris vel suscipit urna. Donec ut consequat risus.

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
<img class="span8" src="{{media|strip}}collective-nature-poster.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}collective-nature-detail.jpg" alt="{{ page.title }}">
