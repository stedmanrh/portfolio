---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: Greg Victoroff & Associates
#subtitle: & Associates
date: 2014-01-01
tags: identity print
description: Two logo and business card options from an identity proposal for [Greg Victoroff & Associates](http://www.victoroff-law.com/), a law firm specializing in IP and copyright law.

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
<img class="span5" src="{{media|strip}}marks.png" alt="{{ page.title }} logos">
<img class="span8" src="{{media|strip}}cards.png" alt="{{ page.title }} business cards">
