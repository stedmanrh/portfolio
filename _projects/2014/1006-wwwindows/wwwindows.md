---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


title: wwwindows
thumbnail: thumbnail.png
subtitle: An Interactive History
date: 2014-10-06
tags: interactive web
description: This web experience defines and deconstructs windows as an interface technology. The site includes five sections, each presented within a window, that present research and writing which seeks to inform about the precursors, origins, and developments of windows, to examine the physical analogs that windows metaphorically imitate, and to discuss the roles of windows on the web specifically.<br><br>By nontraditionally enlisting windows as the core navigational mechanism of the document, the entrenched and largely unnoticeable task of performing computing tasks with windows becomes an overt and even unreasonably obtrusive experience. The styling of windows also evolves in accordance with the GUI-based operating systems that chronologically correlate with the developments in window technology discussed in the text.

links:
    -   title: Web
        url: http://stedmanrh.github.io/wwwindows
        text: wwwindows
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{media|strip}}windows.png" alt="{{ page.title }}">
