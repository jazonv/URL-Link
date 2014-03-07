# URL Link
A simple modifier for Statamic

This will take a URL and turn it into a link with just the domain.

If your variable is any of these:

    website: http://myurl.com/
    website: http://myurl.com
    website: http://www.myurl.com/
    website: http://www.myurl.com
    website: https://myurl.com/
    website: https://myurl.com
    website: https://www.myurl.com/
    website: https://www.myurl.com

and you use this in your template:

    {{ website|url_link }}

it'll turn into a link with the domain as the text and the original URL in the `href`.
ie.

    <a href="http://www.myurl.com">myurl.com</a>

If you just want the nicely formatted url, you can do this:

    {{ website|url_link:no }}
    Outputs: myurl.com