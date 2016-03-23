---
#defaults
layout: project
permalink: /:collection/:year/:month/:title


#title: custom_title
subtitle: Bijou Film & Video Series
date: 2014-09-29
categories: print
description: Three fliers for a series of film lectures organized by The Collective, a CalArts black arts organization. The events featured a talented and diverse set of filmmakers: Kahlil Joseph, Abderrahmane Sissako, and Kwesi Wade Johnson.

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
<img class="span8" src="{{media|strip}}collective-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}collective-2up.jpg" alt="{{ page.title }}">
