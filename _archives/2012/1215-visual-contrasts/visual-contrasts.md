---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
thumbnail: thumbnail.jpg
#subtitle: optional_subtitle
date: 2012-12-15
tags: print
description: Visual Contrasts documents an extensive investigation of six principles of design—direction, form, scale, space, texture, and weight. The project’s first step introduces the designer to extremes of the principles to form a baseline for further exploration. The project’s second step enhances the designer’s ability to create visual interest with asymmetrical compositional schemes and areas of focus. The third step expands the scope of the project with a survey of inventive techniques for creating abstract forms. Step four deals with incorporating these techniques into a digital workspace. The remaining three steps of Visual Contrasts enable the designer to employ lessons from the project’s previous steps to create compositions with continually compounding levels of visual complexity.

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-00.jpg"  alt="cover">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-01.jpg"  alt="cover detail">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-02.jpg" alt="pocket">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-03.jpg" alt="booklet">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-04.jpg" alt="booklet spread">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-06.jpg" alt="composition">
<!-- <img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-07.jpg" alt="section page"> -->
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-08.jpg" alt="section page fold">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-09.jpg" alt="book spread">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-10.jpg" alt="composition">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-11.jpg" alt="composition">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-12.jpg" alt="composition">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-13.jpg" alt="color composition">
<img class="span4" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-14.jpg" alt="color composition">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}book-15.jpg" alt="color composition">
