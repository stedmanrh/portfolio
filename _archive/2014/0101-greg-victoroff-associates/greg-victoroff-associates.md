---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: Greg Victoroff & Associates
thumbnail: cards.png
colspan: 2
#subtitle: & Associates
date: 2014-01-01
tags: identity print
description: Two logo and business card options from an identity proposal for <a href="http://www.victoroff-law.com" target="_blank">Greg Victoroff & Associates,</a> a law firm specializing in IP and copyright law.

#links:
#    -   title: Link_Header
#        url: localhost
#        text: Lorem_ipsum
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span5" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}marks.png" alt="{{ page.title }} logos">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}cards.png" alt="{{ page.title }} business cards">
