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

## PWP Final Feedback
Nice start on a very simple site. Overall this is an attractive direction for a theme, and is responsive on mobile. There are some technical points and UI polish that should be corrected to bring this project up to a more professional level - see Edits &amp; Suggestions below.

Your contact form appears to work well - check your email for my test message.

Your PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your overall grade across all of your PWP Milestones is 23/40 points. Please know that due to the 4-Tier evaluation rubric, 20/40 is considered a passing score.

- Milestone 1 - 20%: Tier II 20(0.2) = 4
- Milestone 2a - 20%: Tier III 30(0.2) = 6
- Milestone 2b - 10%: Tier III 30(0.1) = 3
- Milestone 3 - 50%: Tier II 20(0.5) = 10

### Edits &amp; Suggestions
- I see a horizontal scroll bar at the bottom of the browser - this is usually caused by inconsistencies in the Bootstrap grid structure. It's really something that should be fixed as it's very noticeable to a developer's trained eye. All rows should be inside a container or container-fluid... this is where I would start.
- Remove all "dead code" (commented out code)
- Use meaningful `alt` text on your slider images. This is better for image search and accessibility.
- Avoid using height and width attributes on images. Use CSS instead.
- Form `#output-area` layout needs some fixing up.
- I suggest having all external links open in a new tab. Use `target="_blank"` on the a tags to do this.
- White text on the dark gray background might be easier to read.
- Watch the file size on your images - they are a little to big. I recommend keeping them under 600kb for general web purposes.

