# My daily journal

## 2022-10-03

Working with Sublime is nice. I can see how advantageous it is to switch between languages. Something I 
found particularly surprising was the proprietary nature of GIFs (which prompted the creation of PNGs) 
and RTFs. The video about VS Code reinforced this struggle. 

In 3D modeling, there are a host of "free" programs. Some are free to collect data; others are 
subsidizing a market share bump, only to regularly remove functionality and ask for payment. Autodesk's 
Fusion 360 is a notable example, though I think they've done this transition really well. 

I often trawl the internet and find discussions complaining about how Apple products are overpriced 
fancy things. What I like about Apple is that I want my money to go towards privacy. I want to pay for 
privacy. Now, I'm not a fool--I'm aware that what Apple says and what they do behind closed doors is 
different. It did seem like privacy was something that mattered, if only at some point. 

One question: do I have to git init each time I'm in Terminal? Or, do I simply have to navigate to the 
folder and begin edits?


-m


## 2022-10-04

Where do files go when we 'rm' them? They're not in my trash can. 

"A typical element includes an opening tag with some attributes, enclosed text content, and a 
closing tag."

In Sublime Text, is tab spacing important? Currently, it's set to 4. And, in the video, 
'doctype' wasn't colored, but 'DOCTYPE' was colored when typing html > tab--do we need to 
capitalize 'doctype'? - WE SET TO 3

## 2022 10-05

In my mind, libraries, junkyards, thrift stores, and second hand 
bookstores are one and the same. 

tactile, making things

auto shop > bike co-op > Big Art > machining/digi fab > CAD modeling > 
programming

## 2022-10-10

It's been a couple of days since I last updated here. I think there were 
some lingering anxieties about git commits, and I think the main way to 
address this is to simply do this more often. 

### Explain your FTP experience

Working with the FTP was an exercise that proved troublesome. At first, I 
was unable to login, but that was quickly addressed by asking Derek for 
some help. I'm not entirely sure what happened, but he was able to fix it 
on his end.  

I added my files, then somehow doubled some files outside of my folder. 
Fearing I'd break the whole thing, I slowly removed some items and brought 
it back to normal. 

More issues presented themselves with my file paths. I kept getting 404 
errors, so I rechecked my index.html file and cleared that up. 

I'm nervous about breaking it. I have a feeling I'll definitely break it. 


## 2022-10-11

Chrome dev tools can adjust CSS on the fly! Whoa! And, PE's lighthouse results are impressive. Why isn't Progressive Web App set up? What is PWA, anyway?

### Metadata

What would my metadata be? Image logo? I'm a designer looking for work? 

Rich data, smart rich sharing assets are important, across all platforms. There are times when you cannot control how the metadata looks, but you can test.

"it has to have a mobile-first / small-screen-first 'responsive' layout... or it shows you aren't aware of the state of the web." https://dev.to/perpetual_edu/simple-yet-extremely-effective-portfolio-pieces-p3

Is there a way to refresh Chrome Dev Tools when navigating to another site? I found that whe nusing Lighthouse, the prior site's results remained, and I had to close out the tool. THERE IS! 

CSS color cornsilk; thistle; navy; lavenderblush; linen; moccasin; navajowhite; darkorange; seashell; peachpuff; sandybrown; honeydew; mediumaquamarine; powderblue; cadetblue; aliceblue; steelblue; whitesmoke; gainsboro

###

I confused the hell out of myself with file name conventions and git versioning. I have this feeling I’m taking a file naming habit and making things more complicated with regard to version control, and wanted to know what y’all think.

At the moment, I’m playing around with my portal file. Each day I work on it, I’ll save a file with the date:

- 2022-10-06-web-portal.html
- 2022-10-07-web-portal.html
- 2022-10-11-web-portal.html

Is saving versions something I should be doing? Am I doing double duty, something that git version control handles? Or, is this helpful for humans scanning/tracking files down the line?
Something tells me I’m bound to select an outdated version in the future and waste time trying to chase down an error that could be mitigated with a change in behavior.
I’m confused. (edited) 

I’m no longer confused!

Ohhh, boy, yep, this date conventions is something I definitely won’t be doing with things that can be updated with git.
If I kept changing the file name, I’d have to update the index.html file to reflect the newest change. I didn’t even think of that, and it only clicked when I deleted earlier versions of the file and received a 404 error.
Once that error appeared, I looked at the url, manually entered the newest file name, and all was well. That’s real, real bad.
I think from here on out I’ll pick a file name and leave versioning to git!

So, is the process save files > git committ > update transmit?

### Blog post idea - Who to trust?

I wanted to know more about linking with a new tab using the target="_blank"_ property, and found about the "rel=noopener norefferer" properties to address the reverse tabnapping security vulnerability. In hopes of building a new connection in my brain, I added it to my code. Days later, I noticed that some of the information I'd been following was 4-6 years old. What's more, I found a thread stating that changes made to major browsers in 2021--last year at time of writing--addressed this issue, so it was no longer needed. 

So, who should I trust? How often are we second-guessing ourselves? I think back on my times searching for something to buy. What's the best product, bar-none? Which one provides the best value? Which company best aligns with my ideals? 

Who is behind this review? When was it shared? I look back and thank my librarians, as they were at the forefront of showing me how to trust and verify sources of all sorts, from local publications to fresh, polished web pages. 

I've tried my best to find information that's accurate in the present moment in so many facets of my life; I'm seeing that this pursuit will carry on in this realm. 


## 2022-10-12

I'm changing my file structure, and want to make sure that the file paths don't get too messed up. 

- I'm changing FTP folder name from pe-projects to pe-server - so I need to update Transmit location and index.html files 
- Added archive, images, goals, css folders

When testing with the Open Graph Preview, it suggested I change the metadata image file location to https://peprojects.dev/alpha-6/miguel/images/og-metadata-test/og-metadata-test-001.png -- why?

Affinity Designer


It’ll definitely take some getting used to, especially with how some of Affinity’s behavior & shortcuts differ from Illustrator. As with anything, time’ll tell which is preferred. My tutorials I looked at were:

UI overview
Selecting
Layers Panel

Next up are:
New document with templates
Transforming
Placing images
Ordering

I played around with the tools, tried to get comfy with the layout, and the time flew by. In the end, I have some blue triangles, woo!



Metadata image woes and fix


I was having trouble with my metadata image not showing up in Slack and Open Graph Preview. I had…

Added my images to the server, and confirmed it could be found (ex: https://peprojects.dev/alpha-6/miguel/images/og-metadata-test/og-metadata-test-001.jpg )
Updated my code to include the og metadata property with the full image URL

None of the images showed. So, off to the internet I go.

I found this OGP link that states secure HTTPS sites may need the og:image:secure_url   structured property. I added that optional structured property, and it worked! From the link:

Structured Properties

Some properties can have extra metadata attached to them. These are specified in the same way as other metadata with property and content, but the property will have extra :.

The og:image property has some optional structured properties:

    og:image:url - Identical to og:image.
    og:image:secure_url - An alternate url to use if the webpage requires HTTPS.
    og:image:type - A MIME type for this image.
    og:image:width - The number of pixels wide.
    og:image:height - The number of pixels high.
    og:image:alt - A description of what is in the image (not a caption). If the page specifies an og:image it should specify og:image:alt.

A full image example:

<meta property="og:image" content="https://example.com/ogp.jpg" />
<meta property="og:image:secure_url" content="https://secure.example.com/ogp.jpg" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:image:alt" content="A shiny red apple with a bite taken out" />



OGP Preview URL change?


When trying the Open Graph preview, the image URL changes from…

https://peprojects.dev/alpha-6/miguel/images/og-metadata-test/og-metadata-test-001.png

to

https://peprojects.devimages/og-metadata-test/og-metadata-test-001.png

@sheriffderek, why does it do that?



Next steps


I need to add some index.html files and clean up some stuff!

### Git/FTP confusion

My git repo is pe-server, which points to the alpha-6 server. When I commit from terminal, is there anything else I need to do in order for the server to update? I'm pretty confused here. 


## 2022-10-13

Installed Tower


### Git workflow

Make changes > Sync to server with Transmit > Collect changes into meaningful commit with Tower > Push changes up to GitHub with Tower 

in Tower: remote server names are placeholders -- they don't affect anything but can increase understanding. 

### Emmet (Sublime Text)

I also installed Sublime's Package Control, along with Emmet


## 2022-10-14

### CSS

You can use the style abbreviation element to style content. It shows when in hover mode!


## 2022-10-17

### Affinity Designer

I wanted to get used to the Pen tool, making sure that it was similar to the Pen tool in Illustrator. When I'm warming up, I want to trace a shape and get a feel for it all. I chose to trace the letter 'S' as it's a good gauge of proficiency. Some lowercase 'p' fonts are also good, as they contain inside corners that can be challenging. 

I soon ran into trouble. When tracing out a shape, I prefer to use Guides, as it can break down complex shapes into digestible node locations. In Affinity, these guides are tied to the artboard; any guides not created on the artboard (Above it in the layers panel) will disappear when working on that artboard. I didn't know this, and spent half of the alloted time testing, taking video, and searching for answers online. 

While I didn't complete more traces, I did gain more understanding around the artboard. I'll need to look into this much more. 

## <div> image behavior

    I had two images within <div>: one random image (portrait or landscape); and one small located within a <p>. 

<div>

  <img src="https://source.unsplash.com/random/" width="300">

  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio expedita repellat commodi rerum illum blanditiis pariatur autem ex nemo, quisquam, ut quidem. Suscipit molestiae dolore quasi sint obcaecati! Nihil, harum?</p>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio expedita repellat commodi rerum illum blanditiis pariatur autem ex nemo, quisquam, ut quidem. Suscipit molestiae dolore quasi sint obcaecati! Nihil, harum?</p>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio expedita repellat commodi rerum illum blanditiis <img src="https://raw.githubusercontent.com/schochastics/quartocities/main/img/hacker.gif" width="30px"> pariatur autem ex nemo, quisquam, ut quidem. Suscipit molestiae dolore quasi sint obcaecati! Nihil, harum?</p>
 
</div>

    Based on my layout, when random portrait images were added, the two images interacted with one another; this didn't occur with landscape images, as the <p> containing the second image was pushed down beyond the first image. 

## 2022-10-18

### <div>

    It's a generic html element that allows you to divide and group content. With HTML 5, the creators scraped the internet, and saw how <div> was most being used. That's how the new elements <main> <header> <section> <footer> came to be! Cool!

### inline, inline block

    "Inline elements can only have left & right margins and padding and can’t have a width and height set.
    
    Inline-block elements can have have margin and padding on all 4 sides, and can have a width and height set.


### Hashlinks

    You can have a href that references a section id on the page. 

If 92.6% of users worldwide are using browsers that support it, why shouldn't we use that smooth scrolling behavior? Are there accessibility concerns?



## 2022-10-19

CSS resets

Ran into an issue with firefox not removing stlying, but Chrome doing so. Weird. 


## 2022-10-20

On printing: Linotypes, presses, and the inexhaustible changeover for efficiency


Ridiculous amounts of OSHA violations. There's something romantic about it, somethinng special in seeing professional tradespeople at the NYT work on the final hour, of the final day, and their final page form being page 1, the first page of the New York Times. "OK on 1."

"Keep the old machines running"

It's inevitable. 

I trained as a manual machinist. I can run a lathe, vertical mill, and tons of supporting equipment. The Monarch 10EE is sublime. A Bridgeport mill feels like a good friend. 

It's heartbreaking to think of what happened to so many of these machines, sold for scrap. 

"Automation with the hot metal"

From 40lb lead plates to 14oz plastic plates. 

"It all started on a linotype machine upstairs"

Hot type mechanical printing to computerized cold type ; hot type make up to cold type paste up

cold; is it impersonal? does it look 



    When did they invent the first printing press?
    When did they invent the Linotype?
    What are the differences between Linotype printing and laying out typography for The Web?


## 2022-10-21

### Testing CodePen across different browsers and modes

2:50
<br> is for “line breaks” --- and so, only if you want to have a special heading sentence break at a special place —
2:51
This is a very rare situation - because you don’t usully get to hard-code the heading. It will be a heading someone else wrote - that is coming from a mysterious database somewhere.
2:51
there’s also a new <wbr> element
2:52
that’s the “might will break” element  (as I imagine Josh would say it)
2:52
“If it’s going to break… we will it to break here” ?? hehe
2:54
also horizontal rule <hr>  element! Most of the time, we’ll use borders for this --- but a hr is a meaningful not that you want a page splitter of vignette there ---
2:54
--------
2:54
It can be hidden - or replaced with other stuff to look different.
2:54
That leads to places you aren’t in control of.
2:54
Open your article in ‘debug’ mode (in codepen it’s a settings/preview option)
2:54
then take that URL and view it in Safari
2:55
Start Reader mode - with command + shift + R


## 2022-10-22

Do not put display: block elements into display: inline elements. It will break stuff. 

- Child combinators will only target elements one deeper

/*Below is a child combinator. Any link that is child of parent inner-column within the header will have these properties.*/

header inner-column > a {
    fill: red;
    max-width: 50px;
}


### CSS Rules

It seems like the goal is to create a robust, modular ruleset that can accommodate unpredicatable behavior.  

### CSS Selectors

- universal *
- type: elements, and custom elements p {} or a{} or custom elements
- list p, a 
- adjacent sibling p + a
- child combinator P > a
- descendant combinator   p a

In CSS rules, when creating properties and values in declarations, you can press 'return' immediately after entering the value. You don't have to skip over the ; !!!

### Margins

There will be times when you cannot control content. So, when placing margins, it's better to place margins UP (ex: margin-top: 20px). 


## 2022-10-23

### HTML, CSS connection:

The HTML defines the *content*. 

The CSS defines a set of rules (*visual rules*) that can be associated with that now-defined content.

HTML defines content; CSS defines a set of rules that can be tied to that content. 

### one-a-day idea

Neon circle


## 2022-10-24

### one-a-day idea

isometric cylinder

### CSS

- For fonts, try font-size: clamp(40px, 10vw, 130px);

- Padding is PART of the element; margin is AROUND element 

### Bill's Revisions

Spent 5 minutes forking, and laying out my screens
Spent around 15 minutes reading Bill's edits and annotating a new Cleanshot capture. 


Object-position for embed https://developer.mozilla.org/en-US/docs/Web/CSS/object-position


## 2022-10-25

Blog post idea: similarities between CAD modeling and coding (parameters)
- maybe CAD and CSS?


https://stackoverflow.com/questions/17479912/how-to-change-link-color-when-clicked
https://stackoverflow.com/questions/42134731/css-change-button-style-after-click



## 2022-11-11

### SVGs

I'm noticing that SVG code imports have wonky formatting. Tabs, and a couple spaces, weird stuff. How can I automatically clean that up to just use tabs? 

SVGs are read by the parsesr like any other code. I was encountering a layering issue with my SVGs, where I wanted the leaf to be under the rose petals.

If I wanted the leaves underneath, I had to place the HTML code for that element before the rose!

Can I get the stroke and fill to transition at different times without creating a separate object in Affinity? I want the stroke to appear first, then the fill, using a single object. 


### SVG kitchen sink

MDN glossary: https://developer.mozilla.org/en-US/docs/Web/SVG/Element


- title: https://developer.mozilla.org/en-US/docs/Web/SVG/Element/title
- animate motion! https://developer.mozilla.org/en-US/docs/Web/SVG/Element/animateMotion

SVG graph paper background: 

body {
    background-image: url("https://assets.codepen.io/4543/grid-helper.svg");
    background-size: 20px;
}






# 2022-12-2

Goals, programming

art & programming

set up goals
    build house on the california coast

## svgs 

    hovers
    clickable areas beacons    

Journal - get you git squares up.

deploybot - user interface that takes care of things for us. 
    treat it as a user experience study

crowdsourcing edge cases


cultivate your own Command Station - 



===================================================



## 2023-01-06

### Goals

Short-term (3 months)

- Have a website I'm proud to share
- Competency in HTML/CSS/PHP/JS
- A shareable portfolio 

Mid-term (6 months)

- Employment as a front-end developer
- Completion of my truck
- Learning Python to further digital fabrication projects

Long term (5 years)

- Own land on oro near the California coast
- Series of small homes built


## 2023-01-13

// POST collects form data after submitting an HTML form 

### PHP built-in functions

#### isset()

- Determine if a variable is declared and is different than null. (Boolean)

- only works with variables as passing anything else will result in a parse error

- Returns true if var exists and has any value other than null. false otherwise. 

- array_key_exists($var); to check for NULL key values

#### unset()

- Destroys the specified variables. 

- The behavior of unset() inside of a function can vary depending on what type of variable you are attempting to destroy.

- If a globalized variable is unset() inside of a function, only the local variable is destroyed. The variable in the calling environment will retain the same value as before unset() was called. 

#### strlen()

- Returns the length of the given string. 
- returns the number of bytes rather than the number of characters in a string. 

- See mb_strlen() and iconv_strlen(), as they can return the number of characters in a string

#### strrev() 

- Reverse a string

#### strtolower()

- Make a string lowercase

#### round()

- returns the rounded value of num to specified precision. 

#### trim()

- Strip whitespace (or other characters) from the beginning and end of a string
- Stripped characters can also be specified using the characters parametere. 

#### explode()

- Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator. 

#### join() aka implode()

- Join array elements with a string 

#### substr()

- Returns part of a string specified by the offset and length parameters.

#### count()

- Counts all elements in an array of in a Countable object.

#### array_push() 

- Push one or more elements onto the end of an array

#### array_rand()

- picks one or more randon entries out of an array, and returns the key (or keys) of the random entries. 

#### array_reverse() 

- Return an array with elements in reverse order

#### array_slice()

- Extract a slice of the array

#### array_unique()

- removes duplicate values from an array

#### date()

- Format a Unix timestamp
- Unix timestamps don't handle timezones.  

#### mail()

- Send mail! 
- set to, subject, message, headers (from, Cc, Bcc), parameters, etc.


=================================================


### Exercise for Programmers: Simple Math (Chapter 2, Exercise 5)

PROBLEM STATEMENT

Write a program that prompts for two numbers. 
Print the sum, difference, product, and quotient of those numbers as shown in the example output:

What is the first number? 10
What is the second number? 5
10 + 5 = 15
10 - 5 = 5
10 * 5 = 50
10 / 5 = 2

CONSTRAINTS
Values coming from users will be strings. Ensure that you convert these values to numbers before doing the math.

Keep the inputs and outputs separate from the numerical conversions and other processing.

Generate a single output statement with line breaks in the appropriate spots.

CHALLENGES
Revise the program to ensure that inputs are entered as numeric values. 

Don’t allow the user to proceed if the value entered is not numeric.

Don’t allow the user to enter a negative number.

INPUTS
- $numberOne
- $numberTwo


PROCESSES

- Create form with two string input fields and a submit button
- Once data is collected, check that the entries are numbers
- Convert strings to numbers
- Carry out math
- Create output message 
- Display output message



OUTPUTS
- $numberSum
- $numberDifference
- $numberProduct
- $numberQuotient
- $mathOutput

STEPS




## 2023-01-15

I've built a monster. 

In its current state, I find it unmaintainable. Organization is lacking. The structure is haphazard, and the results show. 

In this moment, I fee like a failure. This site does not satisfy the baseline, and it frustrates me. 

The site is driving, and I feel a reset is in order for this to make sense. 

At this moment, I feel like I've traded earned intuition for novelty. I don't have the skill to control my site vision. That's rough. 


## 2023-01-17

We're working with PHP query strings now. 

Started with a home, list, and detail page. I initially changed the names to machine, machine-detail, but what happens when I'm not listing machines? So, I reverted to the original name structure. 



"slug" is a unique identifier

Today, PHP string queries made my head spin. So, in an effort to solidify parts of this learning, I'm going to write down some things. 

The end goal is to use templates that can be populated with data, allowing sites to grow at scale. Once a template's made, we use data (currently, in the form of associated arrays) to deliver the content. 

### Create base file
- create, then include php partials

### Creating/locating/including data files

### Router to understand where we are

### Select which template that will be rendered

### Using string queries in links to directs us to desired pages.  

### Using loops to populate elements/cards/templates with data

### Using if/else logic to render data or display errors

We're merging our time to make one thing, a singular thing made of our 
  
simple-yet-extremely-effective-portfolio-pieces-p3


## 2023-01-23

- Note that all real elements are <oneword>  - so, for many reasons - you probably want to make your custom elements have <a-dash>

- Why should we employ site.css over style.css?















































