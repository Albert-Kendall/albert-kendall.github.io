---
title: Honeymoon
image: "/img/honeymoon.jpg"
permalink: /honeymoon/
images:
  - /img/honeymoon_1.webp
  - /img/honeymoon_2.webp
  - /img/honeymoon_3.webp
  - /img/honeymoon_4.webp
  - /img/honeymoon_5.webp
---

## Just the two of us...

{% for image in images %}
<img src="{{ image }}" style="padding-bottom:10px">
{% endfor %}
