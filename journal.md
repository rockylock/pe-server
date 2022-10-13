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

Make changes > collect changes into meaningful commit with Tower > push changes up to GitHub with Tower 

in Tower: remote server names are placeholders -- they don't affect anything but can increase understanding. 

### Emmet (Sublime Text)

I also installed Sublime's Package Control, along with Emmet




