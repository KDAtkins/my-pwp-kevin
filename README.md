# my-pwp-kevin
Professional Website Project

## Milestone2A Feedback

### FeedbacK
Overall good Job On Milestone2a. Both your Content Strategy and mobile wireframes are straight to the point and easy to follow. That being said I have some concerns about your Desktop wireframes. How you laid out the Desktop wireframes makes it seem like you want to have each wireframe be its own page (which without specific permission is out of the scope of the project). My main point of confusion comes from the first desktop wireframe, I am unsure if it is a general overview of the desktop site or if it will be its own section? If that is the case I want to warn you that having a small cross-section  rotating background images will be difficult, time-consuming, and might come out the way you excpect. For the Carousel, Bootstrap 4 has a built Carousel Component. I would also recommend  looking into fancybox3 for your Carsuel/portfolio. Past PWP's have used Fancy Box to great success, and it is very easy to use. 

there are some layout differences between the mobile and desktop wireframes, notably  in the top page section, and the Portfolio. (nav links in top section on desktop, text content in Portfolio section not on mobile... different placement of social icons). I Question how important these relatively minor differences are, and perhaps streamline as much as possible to make development of these sections a bit more straightforward and consistant.If you decide to go foreword as planned, I would look into the  The `display` property. You can select a particular section can be specfy  certain screen sizes either using `@media` queries OR you can use some of the built-in Bootstrap display classes if they work for you [Bootstrap Responsive Classes](https://getbootstrap.com/docs/4.0/utilities/display/#hiding-elements)

It looks like you intend to use a sticky navbar, and a sticky footer based on these wireframes. If so, there are built-in classes for that - but I might opt for one or the other personally. Having the Copyright info stuck on the bottom of the viewport at all times is not necessary in most use cases. It might be a nice idea to put your social media icons down there too so they are centralized in one place, making them a bit easier to locate. Swapping out the Navbar Brand text on page scroll will require a JavaScript plugin like ScrollMagic [scroll magic](http://scrollmagic.io/), and it might be a bit tricky to get right. It will require triggering an event to swap the text based on scroll position. jQuery can also be used for some nice animated effects to alter the Navbar appearance on scroll too, if that's the kind of thing your looking for.
### Helpful links

bootstrap Carusel https://getbootstrap.com/docs/4.0/components/carousel/
fancybox3 http://fancyapps.com/fancybox/3/


Grade Tier III
